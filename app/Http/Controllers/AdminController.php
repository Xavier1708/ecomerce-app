<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Redirect;

class AdminController extends Controller
{
    //

    public function areaAdminstrativa(){

      $products = Product::all();
       return view('admin.geralAdmin', ['products' => $products]); 
    }

    public function mostrarTelaDeNovoProduto(){

      return view('admin.novoProduto');
    }


    public function salvarProduto(Product $product, Request $request){
           $input = $request->validate
           ([
            'name' =>'string|required',
            'price' =>'string|required',
            'stock' =>'integer|nullable',
            'cover' =>'file|nullable',
            'description' =>'string|nullable'
        ]);
           $input['slug'] = Str::slug($input['name']);

         //  dd($input);

           Product::create($input);
           return Redirect::route('mostrar.areaAdmistrativa');

    }







    public function mostrarTelaDeActualizarProduto($id){
      
      $products = Product::find($id);
     // dd($products);
     return view('admin.actualizarProduto', ['product' => $products]);
      

    }

    public function actualizar(){



    }




    
}
