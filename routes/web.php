<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Ynara Lira Ventura";
    return view('welcome', ['nome' => $nome]);
});

Route::get('/contact', function () {
    $email = "teste@gmail.com";
    $celular = "(61) 99999-9999";
    $array = [1,2,3,4,5];
    $nomes = ["Ynara", "Maria", "Saulo", "Rafaela"];
    return view('contact', ['celular' => $celular, 'email' => $email, 'arr' => $array, 'nomes' => $nomes]);
});

Route::get('/produtos', function () {
    $busca = request("search");
    return view('produtos', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id = 1) {
    return view('produto', ['id' => $id]);
});
