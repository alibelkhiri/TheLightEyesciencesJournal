<?php
use App\Article;
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

Route::get('/','WelcomeController@newsLoad');
Route::get('/Details', function () {
     
    return view('Details');
});
//Route::get('/articles/newsLoad',[WelcomeController::class,'newsLoad']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/AddNews', 'NewsController@create');
Route::resource('Articles','NewsController');
Route::post('/Articles/Save', 'NewsController@store');
Route::get('/ArticleDelete/{id}','NewsController@destroy');
Route::get('/ArticleEdit/{id}','NewsController@edit');
Route::get('/Chapitres', 'ChapitreController@index');
Route::get('/AddChapter', 'ChapitreController@create');
Route::post('/Chapter/Save', 'ChapitreController@store');
Route::get('/ChapterDelete/{id}','ChapitreController@destroy');