<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function productsList(){
        $lisst = 'hola';
        //dd($lisst);
        $listprod = Producto::All();
        return view("products",compact('listprod'));
        //return "mesanje de prueba";
    }
}
