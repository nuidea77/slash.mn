<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/category/{id}', [PostController::class, 'category']);
Route::get('/blog/{slug}', [PostController::class, 'view']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/service/{slug}', [ServiceController::class, 'view']);
Route::get('/portfolios', [PortfolioController::class, 'index']);
Route::get('/portfolio/{id}', [PortfolioController::class, 'view']);
// mail controller
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.us.store');
Route::get('/sitemap.xml', [SitemapController::class, 'generate']);
Route::get('/posts-sitemap.xml', [SitemapController::class, 'generatePosts']);
Route::get('/services-sitemap.xml', [SitemapController::class, 'generateServices']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
