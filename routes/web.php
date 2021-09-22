<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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

// Route::get('/', function () {
//     return view('template.welcome');
// });

Route::get('/dashboard', function () {
    return view('pages.back.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/', function () {
    return view('pages.front.main');
})->middleware(['auth'])->name('home');


Route::get('/articles/front', function (){
    return view('pages.front.article');
})->middleware(['auth'])->name('article');

Route::resource('/articles', ArticleController::class)->middleware(['auth', 'admin']);

require __DIR__.'/auth.php';
