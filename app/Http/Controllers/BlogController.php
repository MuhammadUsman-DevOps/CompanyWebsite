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

        $blogs = Blog::where('status', 'published')->get();
        return view('devlints.all_blog', compact('blogs'));
    }

    public function blogsByProduct($productId)
    {
        $blogs = Blog::where('product_id', $productId)
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->get();

        return response()->json($blogs);
    }
    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return response()->json($blog);
    }
}
