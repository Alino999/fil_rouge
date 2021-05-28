<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function index(){
        return view('index');
    }

    public function inscrire(){
        return view('form.register');
    }

    public function connecter(){
        return view('form.login');
    }
}
