<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('About-Us', function(){
    return view('about');
});