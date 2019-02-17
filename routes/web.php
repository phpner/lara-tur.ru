<?php

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
    return view('index');
});

Route::get('/search', function () {
    return view('search');
});
Route::get('/choose-tour', function () {
    return view('choose_tour',["menu" => 1]);
})->name("choose-tour");

Route::get('/hot-tour', function () {
    return view('/hot_tour',["menu" => 2]);
})->name("hot-tour");

Route::prefix('tour')->group(function () {

    Route::get('egipet', 'Pages\Egipet@index')->name("egipet");

    Route::get('turkey', function(){
        return view('Pages.turkey',["menu" => 3]);
    })->name("turkey");

});


/*mail*/
Route::post('/send-mail', "Mail@sendForm" )->name("send-mail");
