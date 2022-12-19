<?php

use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('ourTeam');
Route::get('/monotize', [HomeController::class, 'monotize'])->name('monotize');
Route::get('/mobile', [HomeController::class, 'mobile'])->name('mobile');
Route::get('/performance', [HomeController::class, 'performance'])->name('performance');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/project', [HomeController::class, 'project'])->name('project');




