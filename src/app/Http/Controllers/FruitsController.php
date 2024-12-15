<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\FruitsRequest;
use App\Models\Product;
use App\Models\Season;


class FruitsController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(6)->withPath('/products');


        return view('index', compact('products'));
 
    }



    public function register()
    {
        return view('register');
    }


    public function search(Request $request)
    {
      $keyword = $request->input('keyword');
      $priceOrder = $request->input('product_id');

      $products = Product::query()->nameSearch($keyword)->priceOrder($priceOrder)->get();

        return view('search', compact('products'));
    }

    
    
    public function detail($productId)
    {
        $product = Product::findOrFail($productId);


        return view('detail', compact('product'));

    }


}
