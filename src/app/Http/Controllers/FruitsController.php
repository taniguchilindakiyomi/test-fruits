<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\FruitsRequest;
use App\Models\Product;
use App\Models\Season;


class FruitsController extends Controller
{
    public function index()
    {
        $perPage = 6;
        $products = Product::paginate($perPage);


        return view('index', compact('products'));
 
    }



    public function register()
    {
        return view('register');
    }


    public function search(Request $request)
    {
      $keyword = $request->input('keyword');
      $product = Product::nameSearch($keyword)->first();

        return view('search', compact('product'));
    }

    
    
    public function detail($productId)
    {
        $product = Product::findOrFail($productId);


        return view('detail', compact('product'));

    }


    public function update()
    {

    }


    public function delete($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();

        return redirect()->route('index');
    }

    public function store(FruitsRequest $request)
    {
      if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/images');
      }

      Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'season' => json_encode($request->season),
        'image' => $imagePath,
        'description' => $request->description,
      ]);

        return redirect()->route('index');
    }
}
