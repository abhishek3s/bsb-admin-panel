<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('school-list',[SchoolController::class, 'getOnlineAffiliationSchoolList'])->name('getOnlineAffiliationSchoolList');
    Route::get('school/{id}',[SchoolController::class, 'show'])->name('showSchool');
    Route::get('merge-pdf/{id}',[SchoolController::class, 'getPdfFiles'])->name('mergePdf');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
