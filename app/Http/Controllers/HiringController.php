<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HiringController extends Controller {
    public function hireWebAppDevelopers() {
        return view('devlints.hire.hire_web_app_developers');
    }

 public function hireMobileAppDevelopers() {
        return view('devlints.hire.hire_mobile_app_developers');
 }
    public function hireBlockChainDevelopers() {
        return view('devlints.hire.hire_block_chain_developers');
    }

    public function hireUiUxDevelopers() {
        return view('devlints.hire.hire_ui_ux_developers');
    }

    public function hireEcommerceDevelopers() {
        return view('devlints.hire.hire_ecommerce_developers');
    }

    public function hireWordpressDevelopers() {
        return view('devlints.hire.hire_wordpress_developers');
    }

    public function hireDigitalMarketers() {
        return view('devlints.hire.hire_digital_marketers');
    }

    public function hireQualityAssurance () {
        return view('devlints.hire.hire_quality_assurance');
    }

    public function hireFullStackDevelopers () {
        return view('devlints.hire.hire_full_stack_developers');
    }

    public function hireAiDevelopers () {
        return view('devlints.hire.hire_ai_developers');
    }
}
