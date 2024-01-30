<?php

use Illuminate\Support\Facades\Route;
use app\demo;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
    return view('halamanutama',[
        "tittle" => "halamanutama"
    ]);
});

Route::get('/hariini', function () {
    return view('hariini',[
        "tittle" => "hariini"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang',[
        "tittle" => "tentang"
    ]);
});

Route::get('/Api-Get-Data',function(){
    $client = new Client();
    $data = $client->get('https:127.0.0.1:5000/GetData');
    $data_body = $data->getBody();

    $api = $data_body;
    return $api;

});