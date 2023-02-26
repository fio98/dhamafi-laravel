<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function showAcercaDe() {
        return view('landing.acercade');
    }

    public function showProductos() {
        return view('landing.producto');
    }
}
