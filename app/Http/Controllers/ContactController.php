<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function get(){
        $email = "teste@gmail.com";
        $celular = "(61) 99999-9999";
        $array = [1,2,3,4,5];
        $nomes = ["Ynara", "Maria", "Saulo", "Rafaela"];
        return view('contact', ['celular' => $celular, 'email' => $email, 'arr' => $array, 'nomes' => $nomes]);
    }
}
