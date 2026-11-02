<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Insight\InsightController;
use App\Http\Controllers\Service\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getDataHome']);

Route::get('/about/about', [AboutUsController::class, 'getDataAboutUs']);

Route::get('/about/profile', function () {
    return view('mains.company-profile.index');
});

Route::get('/about/legality', [AboutUsController::class, 'getLegality']);

Route::get('/about/awards', [AboutUsController::class, 'getAwards']);

Route::get('/services', [ServiceController::class, 'getDataService'])->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'showService'])->name('service.show');

Route::get('/insights', [InsightController::class, 'getDataInsight'])->name('insights');

Route::get('/insights/insights', [InsightController::class, 'insightList'])->name('insight.index');

Route::get('/insights/insights/{slug}', [InsightController::class, 'insightShow'])->name('insight.show');

Route::get('/insights/galleries', [InsightController::class, 'galleryList'])->name('gallery.index');

Route::get('/insights/galleries/{slug}', [InsightController::class, 'galleryShow'])->name('gallery.show');

Route::get('/contact', [ContactController::class, 'getContact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])
    ->middleware('throttle:5,1')
    ->name('contact.send');

// /admin dan semua turunannya (/admin/login, dst.) diarahkan ke panel dyp-admin
Route::get('/admin/{any?}', fn () => redirect()->away('https://admin.dianyogyaperdana.com'))
    ->where('any', '.*');
