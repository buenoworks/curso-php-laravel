<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produtos', ['id' => $id]);
});

Route::get('/produto', function () {
    $busca = request('search');
    return view('produto', ['busca' => $busca]);
});