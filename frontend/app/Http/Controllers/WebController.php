<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Blade;

class WebController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
}
