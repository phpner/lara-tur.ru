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

    Route::get('egipet', "Pages\Egipet@index")->name("egipet");

    /**
     * turkey
     */

    Route::get('turkey',"Pages\Turkey@index")->name("turkey");

    /**
     * OAE
     */

    Route::get('oae',"Pages\Oae@index")->name("oae");

    /**
     * tailand
     */

    Route::get('tailand',"Pages\Tailand@index")->name("tailand");

    /**
     * tailand
     */

    Route::get('shri-lanka', "Pages\Shri_lanka@index")->name("shri-lanka");

    /**
     * indiya
     */

    Route::get('indiya',  "Pages\Indiya@index")->name("indiya");

    /**
     * dominikana
     */
    Route::get('dominikana', "Pages\Dominikana@index")->name("dominikana");

    /**
     * dominikana
     */

    Route::get('meksika',  "Pages\Meksika@index")->name("meksika");

    /**
     * bolgariya
     */

    Route::get('bolgariya',"Pages\Bolgariya@index")->name("bolgariya");

    /**
     * tanzaniya
     */

    Route::get('tanzaniya', "Pages\Tanzaniya@index")->name("tanzaniya");


    /**
     * indoneziya
     */

    Route::get('indoneziya',  "Pages\Indoneziya@index")->name("indoneziya");

});
/* END BLOCK TOUR*/

/*mail*/
Route::post('/send-mail', "Mail@sendForm" )->name("send-mail");
