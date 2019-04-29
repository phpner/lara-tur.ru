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

Route::get('/', "Pages\Main@index")->name("index");

Route::get('/search', function () {
    return view('search');
});
Route::get('/choose-tour', function () {
    return view('choose_tour',["menu" => 1]);
})->name("choose-tour");

Route::get('/hot-tour', function () {
    return view('/hot_tour',["menu" => 2]);
})->name("hot-tour");

    /**
     * calender-price
     */
Route::get('calender-price', "Pages\Calender@index")->name("calender-price");


    /* BLOCK TOUR*/
Route::prefix('tour')->group(function () {

    /**
     * egipet
     */

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

    /**
     *  rossiya
     */

    Route::get('rossiya',  "Pages\Rossiya@index")->name("rossiya");

    /**
     * contact
     */
    Route::get('contact',  function (){
        return view('pages.contact', ['menu' => 6]);
    })->name("contact");

    /**
     * vetnam
     */

    Route::get('vetnam', "Pages\Vetnam@index")->name("vetnam");


    /**
     * countries
     */
    Route::get('countries',  function (){
        return view('pages.countries');
    })->name("countries");




});
/* END BLOCK TOUR*/

/*mail*/
Route::post('/send-mail', "Mail@sendForm" )->name("send-mail");
