<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function pagina_vestiti() {
        return view('pagina_vestiti');
    }
}
