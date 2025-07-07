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

    public function ecommerceDevelopment (Request $request)
    {
        return view ('devlints.services.ecommerce_development');
    }

    public function wordpressDevelopment(Request $request) {
        return view ('devlints.services.wordpress_development');
    }

    public function digitalMarketing (Request $request) {
        return view ('devlints.services.digital_marketing');
    }

    public function qualityAssurance (Request $request) {
        return view ('devlints.services.quality_assurance');
    }

    public function fullStackDevlopment (Request $request) {
        return view ('devlints.services.full_stack_development');
    }

    public function aiDevelopment (Request $request) {
        return view ('devlints.services.ai_development');
    }

    public function gameDevelopment (Request $request) {
        return view ('devlints.services.game_development');
}

    public function appDevelopment (Request $request) {
        return view ('devlints.services.app_development');
    }



}
