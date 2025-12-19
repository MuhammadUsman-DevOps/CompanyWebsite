<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    private function xmlResponse(string $xml): Response
    {
        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    private function formatDate($dt): string
    {
        return Carbon::parse($dt)->toAtomString();
    }

    private function urlTag(string $loc, ?string $lastmod = null, ?string $changefreq = null, ?string $priority = null): string
    {
        $loc = htmlspecialchars($loc, ENT_XML1);

        $xml  = "  <url>\n";
        $xml .= "    <loc>{$loc}</loc>\n";
        if ($lastmod)   $xml .= "    <lastmod>" . $this->formatDate($lastmod) . "</lastmod>\n";
        if ($changefreq) $xml .= "    <changefreq>{$changefreq}</changefreq>\n";
        if ($priority)  $xml .= "    <priority>{$priority}</priority>\n";
        $xml .= "  </url>\n";

        return $xml;
    }

    private function sitemapTag(string $loc, ?string $lastmod = null): string
    {
        $loc = htmlspecialchars($loc, ENT_XML1);

        $xml  = "  <sitemap>\n";
        $xml .= "    <loc>{$loc}</loc>\n";
        if ($lastmod) $xml .= "    <lastmod>" . $this->formatDate($lastmod) . "</lastmod>\n";
        $xml .= "  </sitemap>\n";

        return $xml;
    }

    public function index(): Response
    {
        Cache::forget('sitemap:index');
        Cache::forget('sitemap:blogs');

        return Cache::remember('sitemap:index', now()->addHours(6), function () {

            $base = "https://devlints.com";
            $lastBlog = Blog::query()
                ->whereNotNull('published_at')
                ->orderByDesc('updated_at')
                ->value('updated_at');

            $lastmodPages = now();
            $lastmodBlogs = $lastBlog ?: now();

            $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
            $xml .= "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
            $xml .= $this->sitemapTag("{$base}/sitemap-pages.xml", $lastmodPages);
            $xml .= $this->sitemapTag("{$base}/sitemap-blogs.xml", $lastmodBlogs);
            $xml .= "</sitemapindex>\n";

            return $this->xmlResponse($xml);
        });
    }

    public function pages(): Response
    {
        Cache::forget('sitemap:index');
        Cache::forget('sitemap:blogs');

        return Cache::remember('sitemap:pages', now()->addHours(12), function () {
            $base = "https://devlints.com";
            $now  = now();

            // ✅ Add/adjust these to match your real URLs
            $staticPages = [
                ['loc' => "{$base}/",            'changefreq' => 'weekly',  'priority' => '1.0'],
                ['loc' => "{$base}/about-us",     'changefreq' => 'monthly', 'priority' => '0.6'],
                ['loc' => "{$base}/contact-us",   'changefreq' => 'monthly', 'priority' => '0.8'],
                ['loc' => "{$base}/careers",      'changefreq' => 'weekly',  'priority' => '0.6'],
                ['loc' => "{$base}/blogs",    'changefreq' => 'daily',   'priority' => '0.7'],
            ];

            // ✅ Services pages
            $serviceSlugs = [
                'web-app-development',
                'mobile-app-development',
                'blockchain-development',
                'ecommerce-development',
                'wordpress-development',
                'digital-marketing',
                'quality-assurance',
                'full-stack-development',
                'ai-development',
                'game-development',
                'android-ios-app-development',
                 'ui-ux-development',
            ];

            $services = collect($serviceSlugs)->map(fn ($slug) => [
                'loc' => "{$base}/services/{$slug}",
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ])->all();

            // ✅ Hire pages
            $hireSlugs = [
                'hire-web-app-developers',
                'hire-mobile-app-developers',
                'hire-block-chain-developers',
                'hire-ui-ux-developers',
                'hire-ecommerce-developers',
                'hire-wordpress-developers',
                'hire-digital-marketers',
                'hire-quality-assurance',
                'hire-full-stack-developers',
                'hire-ai-developers',
            ];

            $hire = collect($hireSlugs)->map(fn ($slug) => [
                'loc' => "{$base}/hire/{$slug}",
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ])->all();

            $all = array_merge($staticPages, $services, $hire);

            $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
            $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

            foreach ($all as $item) {
                $xml .= $this->urlTag(
                    $item['loc'],
                    $now, // static pages lastmod
                    $item['changefreq'] ?? null,
                    $item['priority'] ?? null
                );
            }

            $xml .= "</urlset>\n";

            return $this->xmlResponse($xml);
        });
    }

    public function blogs(): Response
    {
        Cache::forget('sitemap:index');
        Cache::forget('sitemap:blogs');

        return Cache::remember('sitemap:blogs', now()->addHours(6), function () {
            $base = "https://devlints.com";

            $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
            $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

            Blog::query()
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->select(['slug', 'updated_at', 'published_at', 'canonical_url'])
                ->chunk(500, function ($blogs) use (&$xml, $base) {
                    foreach ($blogs as $blog) {
                        $loc = $blog->canonical_url ?: "{$base}/blog/{$blog->slug}";
                        $lastmod = $blog->updated_at ?: $blog->published_at;

                        $xml .= $this->urlTag(
                            $loc,
                            $lastmod,
                            'weekly',
                            '0.6'
                        );
                    }
                });

            $xml .= "</urlset>\n";

            return $this->xmlResponse($xml);
        });
    }
}
