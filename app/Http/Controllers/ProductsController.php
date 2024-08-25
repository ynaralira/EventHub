<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function getProducts(){
        $names = ['teste', 'teste2', 'teste3'];
        $cds = [1,2,3];
        return view('produtos', ['cds' => $cds, 'names' => $names]);
    }

    function getProduct(){
        $name = 'teste';
        $cd = 1;
        return view('produto', ['cd' => $cd, 'name' => $name]);
    }
}
