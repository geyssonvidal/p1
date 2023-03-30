<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    public function productsRegister(){
        
        return view("products-register");
    }

    public function registerProds(request $request){
        $attributes = $request->validate([
            'prodName' => ['required','max:255', 'min:2'],
            'prodPrice' => ['max:10']
            
        ]);

        $prodName = $_POST['prodName'];
        $prodPrice = $_POST['prodPrice'];
        Producto::updateOrInsert(['nombre'=>$prodName], ['precio'=>$prodPrice]);
        return redirect("products-register");
    }
    public function productsList(){
        $lisst = 'hola';
        //dd($lisst);
        $listprod = Producto::All();
        return view("products",compact('listprod'));
        //return "mesanje de prueba";
    }

    
}
