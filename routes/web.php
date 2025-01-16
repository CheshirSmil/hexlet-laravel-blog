<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
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
    return view('welcome');
    //return 'hello, world!';
});


Route::get('about', function () {
    return view('about');
});

Route::get('about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop'];
    return view('about', ['tags' => $tags]);
});

/*
Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::resource('articles', ArticleController::class);
*/

