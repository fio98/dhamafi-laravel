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

    public function showRecetas() {
        return view('landing.recetas');
    }

    public function showContacto() {
        return view('landing.contacto');
    }
}
