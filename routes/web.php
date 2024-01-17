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
    //return view('welcome');
    return 'hello, world!';
});

/**Route::get('about', function () {
    return view('about');
});
*/

Route::get('about', [PageController::class, 'about']);

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками

# id – параметр, который зависит от конкретной статьи
# Фигурные скобки нужны для описания параметров маршрута
Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
