<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FirReportController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrimereportController;
use App\Http\Controllers\ReportwantedcrimeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontendController::class, 'home'])->name('front.home');

Auth::routes([
    // 'verify' => true
]);

Route::get('/home', [FrontendController::class, 'homepage'])->name('home');
Route::get('/about', [FrontendController::class, 'aboutpage'])->name('front.about');
Route::get('/contact', [FrontendController::class, 'contactpage'])->name('front.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('front.contact.store');
Route::middleware(['auth'])->group(function () {
    Route::get('/ask-question', [FrontendController::class, 'askquestion'])->name('front.askquestion');
    Route::post('/ask-question', [ContactController::class, 'askquestion'])->name('front.askquestion.store');
    Route::get('/reportwantedcrime', [FrontendController::class, 'reportwantedcrime'])->name('reportwantedcrime');
    Route::post('/reportwantedcrime', [ReportwantedcrimeController::class, 'store'])->name('reportwantedcrime.store');
    Route::get('/viewwantedboard', [FrontendController::class, 'viewwantedboard'])->name('viewwantedboard');
    Route::get('/reporting', [FrontendController::class, 'crimeReport'])->name('front.crime.remport');
    Route::get('/reporting/fir', [FrontendController::class, 'firReport'])->name('front.fir.remport');
    Route::post('/reporting/fir', [FirReportController::class, 'store'])->name('front.fir.remport.store');
    Route::get('/reporting/crimereport', [FrontendController::class, 'crimeReporting'])->name('front.crimereport.remport');
    Route::post('/reporting/crimereport', [CrimereportController::class, 'store'])->name('front.crimereport.remport.store');

    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'admin']);
        Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('my.profile');
        Route::post('/profile/{id}/update', [App\Http\Controllers\AdminController::class, 'profileUpdate'])->name('my.profile.update');

        Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/users/add', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::get('/users/edit/{id}', [UserController::class, 'show'])->name('admin.user.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/users/status/{id}', [UserController::class, 'userstatus'])->name('users.status');
        Route::get('/users/role/{id}', [UserController::class, 'userrole'])->name('users.role');

        Route::get('/reportwantedcrime', [ReportwantedcrimeController::class, 'index'])->name('admin.reportwantedcrime.index');
        Route::get('/reportwantedcrime/add', [ReportwantedcrimeController::class, 'create'])->name('admin.reportwantedcrime.create');
        Route::post('/reportwantedcrime/store', [ReportwantedcrimeController::class, 'store'])->name('admin.reportwantedcrime.store');
        Route::get('/reportwantedcrime/delete/{id}', [ReportwantedcrimeController::class, 'delete'])->name('admin.reportwantedcrime.delete');
        Route::get('/reportwantedcrime/edit/{id}', [ReportwantedcrimeController::class, 'show'])->name('admin.reportwantedcrime.edit');
        Route::post('/reportwantedcrime/update/{id}', [ReportwantedcrimeController::class, 'update'])->name('admin.reportwantedcrime.update');
        Route::get('/reportwantedcrime/status/{id}', [ReportwantedcrimeController::class, 'reportwantedcrimetatus'])->name('reportwantedcrime.status');
        Route::get('/reportwantedcrime/role/{id}', [ReportwantedcrimeController::class, 'userrole'])->name('reportwantedcrime.role');


        Route::get('/reporting/fir', [FirReportController::class, 'index'])->name('admin.fir.remport');
        Route::get('/reporting/fir/{id}/edit', [FirReportController::class, 'edit'])->name('admin.fir.remport.edit');
        Route::post('/reporting/fir/{id}/edit', [FirReportController::class, 'update'])->name('admin.fir.remport.update');

        Route::get('/reporting/crime', [CrimereportController::class, 'index'])->name('admin.crime.remport');
        Route::get('/reporting/crime/{id}/edit', [CrimereportController::class, 'edit'])->name('admin.crime.remport.edit');
        Route::post('/reporting/crime/{id}/edit', [CrimereportController::class, 'update'])->name('admin.crime.remport.update');
    });


    Route::prefix('police')->middleware('police')->group(function () {
        Route::get('/', [App\Http\Controllers\PoliceController::class, 'admin']);
        Route::get('/profile', [App\Http\Controllers\PoliceController::class, 'profile'])->name('police.my.profile');
        Route::post('/profile/{id}/update', [App\Http\Controllers\PoliceController::class, 'profileUpdate'])->name('police.my.profile.update');



        Route::get('/reportwantedcrime', [ReportwantedcrimeController::class, 'index'])->name('police.reportwantedcrime.index');
        Route::get('/reportwantedcrime/add', [ReportwantedcrimeController::class, 'create'])->name('police.reportwantedcrime.create');
        Route::post('/reportwantedcrime/store', [ReportwantedcrimeController::class, 'store'])->name('police.reportwantedcrime.store');
        Route::get('/reportwantedcrime/delete/{id}', [ReportwantedcrimeController::class, 'delete'])->name('police.reportwantedcrime.delete');
        Route::get('/reportwantedcrime/edit/{id}', [ReportwantedcrimeController::class, 'show'])->name('police.reportwantedcrime.edit');
        Route::post('/reportwantedcrime/update/{id}', [ReportwantedcrimeController::class, 'update'])->name('police.reportwantedcrime.update');
        Route::get('/reportwantedcrime/status/{id}', [ReportwantedcrimeController::class, 'reportwantedcrimetatus'])->name('reportwantedcrime.status');
        Route::get('/reportwantedcrime/role/{id}', [ReportwantedcrimeController::class, 'userrole'])->name('reportwantedcrime.role');


        Route::get('/reporting/fir', [FirReportController::class, 'index'])->name('police.fir.remport');
        Route::get('/reporting/fir/{id}/edit', [FirReportController::class, 'edit'])->name('police.fir.remport.edit');
        Route::post('/reporting/fir/{id}/edit', [FirReportController::class, 'update'])->name('police.fir.remport.update');

        Route::get('/reporting/crime', [CrimereportController::class, 'index'])->name('police.crime.remport');
        Route::get('/reporting/crime/{id}/edit', [CrimereportController::class, 'edit'])->name('police.crime.remport.edit');
        Route::post('/reporting/crime/{id}/edit', [CrimereportController::class, 'update'])->name('police.crime.remport.update');
    });
});
