<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        //Producten ophalen uit de database
        $products = [
            'Broodrooster',
            'Autoradio',
            'Laptop'
        ];

        return view('home', ['producten' => $products]);
    }

    public function showName($name) {
        return 'Hallo' . $name;
    }
}
