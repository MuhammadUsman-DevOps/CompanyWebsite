<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevlintsController extends Controller
{
    public function homeView(Request $request)
    {
        return view('devlints.index');
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
}
