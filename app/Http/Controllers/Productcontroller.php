<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // este método es para listar los productos
        return view('products.index');
    }

    public function create(){ // formulario para crear un producto
        return view('products.create');
    }

    public function show ($name, $categoria = null){
        return view ('products.show');

    }
}