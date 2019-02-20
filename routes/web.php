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

    /* BLOCK TOUR*/
Route::prefix('tour')->group(function () {

    Route::get('egipet', function(){
        return view('pages.egipet',["menu" => 3, 'page' => 'egipet']);
    })->name("egipet");

    /*turkey*/

    Route::get('turkey', function(){
        return view('pages.turkey',["menu" => 3,  'page' => 'turkey']);
    })->name("turkey");

    /*OAE*/

    Route::get('oae', function(){
        return view('pages.oae',["menu" => 3, 'page' => 'oae']);
    })->name("oae");

    /*tailand*/

    Route::get('tailand', function(){
        return view('pages.tailand',["menu" => 3, 'page' => 'tailand']);
    })->name("tailand");

    /*tailand*/

    Route::get('shri-lanka', function(){
        return view('pages.shri_lanka',["menu" => 3, 'page' => 'shri-lanka']);
    })->name("shri-lanka");

    Route::get('indiya', function(){
        return view('pages.indiya',["menu" => 3, 'page' => 'indiya']);
    })->name("indiya");

    /*dominikana*/
    Route::get('dominikana', function(){
        return view('pages.dominikana',["menu" => 3, 'page' => 'dominikana']);
    })->name("dominikana");

    /*dominikana*/

    Route::get('meksika', function(){
        return view('pages.meksika',["menu" => 3, 'page' => 'meksika']);
    })->name("meksika");

    /*bolgariya*/

    Route::get('bolgariya', function(){
        return view('pages.bolgariya',["menu" => 3, 'page' => 'bolgariya']);
    })->name("bolgariya");

});
/* END BLOCK TOUR*/

/*mail*/
Route::post('/send-mail', "Mail@sendForm" )->name("send-mail");
