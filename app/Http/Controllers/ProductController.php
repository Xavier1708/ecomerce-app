<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function mostrarDetalhes(Product $id){


       //  $pega = Product::find($id);
         return view('mostarProdutos', ['product' => $id]);
    

    }
}
