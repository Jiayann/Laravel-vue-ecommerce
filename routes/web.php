<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function(){
    return view('app');
})->where('any', '.*');


Route::get('/', function () {
    return view('app');
});
/*
Route::any('/{any}', function(){
    return view('app');
    
})->where(name:'any', expression:'.*');

*/