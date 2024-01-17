<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Inicio - Tienda Ropa RG";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre nosotros - Tienda Ropa RG";
        $viewData["subtitle"] =  "Sobre nosotros";
        $viewData["description"] =  "Esta página es acerca de ... ";
        $viewData["author"] = "Desarrollado por: ";
        return view('home.about')->with("viewData", $viewData);
    }
}
