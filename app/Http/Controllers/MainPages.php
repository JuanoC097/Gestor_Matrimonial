<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPages extends Controller
{
    public function layout(){
        return view('layout');
    }

    public function main(){
        return view('main');
    }
}
