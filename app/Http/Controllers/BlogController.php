<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(){

       $blogs = Blog::all();
   }

    public function blogDetailView(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('devlints.blog_detail', compact('blog'));
    }





}
