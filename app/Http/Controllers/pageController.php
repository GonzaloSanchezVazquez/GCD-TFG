<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        $titulo = "G-Sport-Competition";
        return view('index', compact("titulo"));
        //return view('welcome');
    }
    public function main(){
        $titulo="Página principal";
        return view('main-page', compact("titulo"));
    }
}
