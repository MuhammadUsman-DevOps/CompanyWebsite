<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevlintsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\HiringController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DevlintsController::class, 'homeView'])->name('home');
Route::get('/about-us/', [DevlintsController::class, 'aboutView'])->name('about_us');
Route::get('/service-detail', [DevlintsController::class, 'serviceDetailView'])->name('service_detail');
Route::get('/talent-detail', [DevlintsController::class, 'talentDetailView'])->name('talent_detail');
Route::get('/contact-us/', [DevlintsController::class, 'contactUsView'])->name('contact_us');
Route::get('/careers/', [DevlintsController::class, 'careerView'])->name('careers');


Route::group(["prefix" => "services/"], function () {
   Route::get('web-app-development', [ServicesController::class, 'webAppDevelopment'])->name('web_app_development');
   Route::get('mobile-app-development', [ServicesController::class, 'mobileAppDevelopment'])->name('mobile_app_development');
   Route::get('blockchain-development', [ServicesController::class, 'blockChainDevelopment'])->name('blockchain_development');
   Route::get('ui-ux-development', [ServicesController::class, 'uiUXDevelopment'])->name('ui_ux_development');
   Route::get('ecommerce-development', [ServicesController::class, 'ecommerceDevelopment'])->name('ecommerce_development');
   Route::get('wordpress-development', [ServicesController::class, 'wordpressDevelopment'])->name('wordpress_development');
   Route::get('digital-marketing', [ServicesController::class, 'digitalMarketing'])->name('digital_marketing');
   Route::get('quality-assurance', [ServicesController::class, 'qualityAssurance'])->name('quality_assurance');
   Route::get('full-stack-development', [ServicesController::class, 'fullStackDevlopment'])->name('full_stack_development');
   Route::get('ai-development', [ServicesController::class, 'aiDevelopment'])->name('ai_development');
   Route::get('game-development', [ServicesController::class, 'gameDevelopment'])->name('game_development');
   Route::get('app-development', [ServicesController::class, 'appDevelopment'])->name('app_development');

});

Route::group(["prefix" => "hire/"], function () {

    Route::get('hire-web-app-developers', [ HiringController::class,'hireWebAppDevelopers'])->name('hire_web_app_developers');
    Route::get('hire-mobile-app-developers', [HiringController::class,'hireMobileAppDevelopers'])->name('hire_mobile_app_developers');
    Route::get('hire-block-chain-developers', [HiringController::class,'hireBlockChainDevelopers'])->name('hire_block_chain_developers');
    Route::get('hire-ui-ux-developers', [HiringController::class,'hireUiUxDevelopers'])->name('hire_ui_ux_developers');
    Route::get('hire-ecommerce-developers', [HiringController::class,'hireEcommerceDevelopers'])->name('hire_ecommerce_developers');
    Route::get('hire-wordpress-developers', [HiringController::class,'hireWordpressDevelopers'])->name('hire_wordpress_developers');
    Route::get('hire-digital-marketers', [HiringController::class,'hireDigitalMarketers'])->name('hire_digital_marketers');
    Route::get('hire-quality-assurance', [HiringController::class,'hireQualityAssurance'])->name('hire_quality_assurance');
    Route::get('hire-full-stack-developers', [HiringController::class,'hireFullStackDevelopers'])->name('hire_full_stack_developers');
    Route::get('hire-ai-developers', [HiringController::class,'hireAiDevelopers'])->name('hire_ai_developers');
});

Route::post('/contact', [ContactController::class, 'send']);

Route::get('/case-study/{slug}', [CaseStudyController::class, 'caseStudyView'])->name('case_study_detail');

Route::get('/blog/{slug}', [BlogController::class, 'blogDetailView'])->name('blog_detail');

