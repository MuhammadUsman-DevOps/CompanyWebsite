<?php

use App\Http\Controllers\DevlintsController;
use App\Http\Controllers\ServicesController;
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
});
