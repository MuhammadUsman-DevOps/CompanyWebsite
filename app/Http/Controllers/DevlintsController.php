<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

class DevlintsController extends Controller
{
    public function homeView(Request $request)
    {
        $blogs = Blog::where('status', 'published')
            ->whereNull('product_id')->take(3)->get();

        $caseStudies = CaseStudy::take(4)->get(); // Fetch all records
        return view('devlints.index',  compact('blogs','caseStudies'));
    }



    public function aboutView(Request $request)
    {
        return view('devlints.about');
    }

    public function serviceDetailView(Request $request)
    {
        return view('devlints.service_detail');
    }


    public function talentDetailView(Request $request)
    {
        return view('devlints.talent_detail');
    }


    public function contactUsView(Request $request)
    {
        return view('devlints.contact');
    }

    public function careerView(Request $request)
    {
        return view('devlints.career');
    }

    public function privacyPolicyView(){
        return view('devlints.privacy_policy');
    }

    public function termsConditionsView(){
        return view('devlints.terms_conditions');
    }



}
