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

Route::get('/tools', function () {
    return view('index');
});

Route::get('/tools/dig_whois', function () {
    return view('dig_whois');
});

Route::get('/tools/domain_search/dig', 'digController@first_visit');

Route::get('/tools/domain_search/whois', 'whoisController@first_visit');

Route::post('/tools/domain_search/dig', 'digController@dig_search');

Route::post('/tools/domain_search/whois', 'whoisController@whois_search');