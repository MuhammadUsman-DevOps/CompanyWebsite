<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function webAppDevelopment(Request $request)
    {
        return view('devlints.services.web_app_development');
    }
    public function mobileAppDevelopment(Request $request)
    {
        return view('devlints.services.mobile_app_development');
    }
    public function blockChainDevelopment(Request $request)
    {
        return view('devlints.services.blockchain_development');
    }
 public function uiUXDevelopment(Request $request)
    {
        return view('devlints.services.ui_ux_development');
    }

}
