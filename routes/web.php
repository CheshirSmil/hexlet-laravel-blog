<?php

use App\Http\Controllers\PageController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});


/**
// простейший случай - возврат строки
Route::get('/', function () {
    return 'hello, world!';
});
*/

/**
Route::get('about', function () {
    return view('about');
});
*/

/**
//добавл в шаблон динам данных с помощью ассоц массива
Route::get('about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop'];
    return view('about', ['tags' => $tags]);
});
*/

Route::get('about', [PageController::class, 'about']);
