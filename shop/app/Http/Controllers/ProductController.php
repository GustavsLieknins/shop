<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view("products.index", ["products" => $products]);
    }

    public function create()
    {
        return view("products.create");
    }
    public function store(Request $request, Product $product)
    {
        $request->validate(
            [
                "name" => ["required", "min:3", "max:30"],
                "imageURL" => ["required", "image", "max:10240"],
                "description" => ["required", "min:3", "max:30"],
                "price" => ["required", "numeric"]
            ]
            );
        $product->name = $request->ProductName;
        $product->imageURL = $request->imageURL;
        $product->description = $request->Deskription;
        $product->price = $request->Price;
        $image = $request->file('Imgurl');
        $fileName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $fileName);
        $product->imageURL = '/images/' . $fileName;

        $product->save();

        return redirect("/products");
        // dd($request->ProductTitle);
        // dd($request->Imgurl);
        // dd($request->Deskription);
        // dd($request->Price);
    }
}
