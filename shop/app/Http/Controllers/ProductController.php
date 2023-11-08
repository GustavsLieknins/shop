<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function view()
    {
        $products = Product::all();
        // dd($products);
        return view("products", ["products" => $products]);
    }

    public function create()
    {
        return view("create");
    }
    public function store(Request $request, Product $product)
    {
        $product->name = $request->ProductName;
        $product->imageURL = $request->Imgurl;
        $product->description = $request->Deskription;
        $product->price = $request->Price;

        $product->save();

        return redirect("/products");
        // dd($request->ProductTitle);
        // dd($request->Imgurl);
        // dd($request->Deskription);
        // dd($request->Price);
    }
}
