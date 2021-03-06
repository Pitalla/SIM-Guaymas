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
    return view('welcome');
});




Route::group(['middleware' => 'auth'], function () {

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('soporte_informatica', function ()    {
        $data = [];
        return view('soporte_informatica',$data);
    })->name('soporte_informatica');

    Route::get('nose', 'NoseController@index')->name('nose');

    Route::get('/about', function () {
        return view('about');
    });


});
