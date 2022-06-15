<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$basicInfo 			= \App\Models\BasicInfo::first();
	$workedCompanies 	= \App\Models\WorkedCompany::where('status', 1)->get();
	$aboutMeInfo		= \App\Models\AboutMeInfo::first();
    return view('welcome', compact('basicInfo', 'workedCompanies', 'aboutMeInfo'));
})->name('welcome_page');

Route::post('contact', [App\Http\Controllers\FrontendController::class, 'submitContactForm'])->name('postContact');

Route::group(['prefix'=>'admin', 'as'=>'backend.', 'middleware'=>'admin', 'namespace'=>'App\Http\Controllers\Backend'], function () {
    Route::get('/', [App\Http\Controllers\Backend\AdminController::class, 'viewDashboard'])->name('dashboard');
    Route::get('/basic-info', [App\Http\Controllers\Backend\AdminController::class, 'viewBasicInfoForm'])->name('basic-info');
    Route::post('/basic-info', [App\Http\Controllers\Backend\AdminController::class, 'submitBasicInfoForm'])->name('basic-info');

    Route::get('/about-me', [App\Http\Controllers\Backend\AdminController::class, 'viewAboutMeForm'])->name('about-me');
    Route::post('/about-me', [App\Http\Controllers\Backend\AdminController::class, 'saveAboutMeForm'])->name('about-me');
    Route::get('/about-me-delete/{id}', [App\Http\Controllers\Backend\AdminController::class, 'deleteAboutMe'])->name('about-me-delete');
    
    Route::get('/worked-for', [App\Http\Controllers\Backend\AdminController::class, 'viewWorkedForForm'])->name('worked-for');
    Route::post('/worked-for', [App\Http\Controllers\Backend\AdminController::class, 'saveWorkedForForm'])->name('worked-for');
    Route::get('/worked-for-delete/{id}', [App\Http\Controllers\Backend\AdminController::class, 'deleteWorkedForCompany'])->name('worked-for-delete');

    Route::get('/contacts', [App\Http\Controllers\Backend\AdminController::class, 'getContacts'])->name('contacts');

});


Route::get('command/{command}',  function ($command) {
    dd(asset('storage'));
    // Artisan::call($command);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
