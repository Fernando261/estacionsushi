<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categorias = [
            "Handrolls",
            "Especialidades de la casa",
            "Entradas",
            "Snacks",
            "Selectos",
            "Premium",
            "Platillos",
            "Makis",
            "Tradicionales",
            "Infantiles",
            "Cocteleria sin alcohol",
            "Refrescos",
            "Cocteleria con alcohol",
            "Cerveza",
            "Postres",
            "Extras",
        ];

        $platillos = Platillo::all()->groupBy('categoria');

        return view('menu.index', compact('categorias', 'platillos'));
    }
}
