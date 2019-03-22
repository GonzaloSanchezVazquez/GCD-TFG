<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('index');
        //return view('welcome');
    }
    public function main(){
        return view('main-page');
    }
}
