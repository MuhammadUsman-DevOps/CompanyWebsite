<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function blogDetailView(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('devlints.blog_detail', compact('blog'));
    }


    public function allBlogView(Request $request){

        $blogs = Blog::where('status', 'published')
            ->whereNull('product_id')
            ->get();

        return view('devlints.all_blog', compact('blogs'));
    }


    /**
     * Return blogs belonging to a specific product.
     */
    public function blogsByProduct($productId)
    {
        $blogs = Blog::where('product_id', $productId)
            ->where('status', 'published')
            ->select('title', 'slug', 'featured_image', 'meta_description', 'published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $blogs,
        ]);
    }

    /**
     * Return full blog details by slug.
     */
    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => [
                'blog' => $blog,
                'schema_ld' => $blog->getSchemaJsonLd(),
            ]
        ]);
    }
}
