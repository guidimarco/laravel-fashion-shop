<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function pagina_vestiti() {
        $all_dresses = Dress::all();
        // dd($all_dresses);
        $data = [
            'all_dresses' => $all_dresses,
        ];
        return view('pagina_vestiti', $data);
    }
}
