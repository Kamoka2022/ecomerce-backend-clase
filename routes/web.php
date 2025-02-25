<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/<products', function () {
    echo 'LISTADO DE PRODUCTOS DEL ECOMERCE';
});


Route::get('/products/{name}', function ($name) {
    echo 'EL PRODUCTO ES:', $name;
});

