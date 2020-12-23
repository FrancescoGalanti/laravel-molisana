<?php

use Illuminate\Support\Facades\Route;

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
    $data = config('site-data');
    // dd($data); //log database

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $card){

        $card["id"] = $key;
        if($card['tipo'] == 'lunga'){
            $lunghe[] = $card;
        }
        elseif ($card['tipo'] == 'corta'){
            $corte[] = $card;
        }
        elseif ($card['tipo'] == 'cortissima'){
            $cortissime[] = $card;
        }
    }
   /*  dd($lunghe, $corte, $cortissime); */

    return view('home', ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);
})-> name('home');

Route::get('/product/{id}', function ($id) {
    // testing
    /* dump($id); */

    include 'database/data.php'; 

    $product = $data[$id];
    

    return view('product', ['product' => $product]);
})-> name('product');

Route::get('/our-news', function () {
    
    return view('news');
})-> name('news');



