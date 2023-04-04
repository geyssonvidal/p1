<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductListController extends Controller
{
    public function productsList(){
        
        $listprod = Producto::All();
        return view("pages.products-list",compact('listprod'));
    }
}
