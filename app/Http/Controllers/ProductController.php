<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function add(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = DB::table('categories')->where('category', $request->category)->first()->id;
        $product->company = DB::table('companies')->where('company', $request->company)->first()->id;
        if ($request->hasFile('img1')){
            $file = $request->img1;
            $path = $file->store('public/images');
            $product->img_url1 = $path;
        }
        if ($request->hasFile('img2')){
            $file = $request->img2;
            $path = $file->store('public/images');
            $product->img_url2 = $path;
        }
        if ($request->hasFile('img3')){
            $file = $request->img3;
            $path = $file->store('public/images');
            $product->img_url3 = $path;
        }
        if ($request->hasFile('brochure')){
            $file = $request->brochure;
            $path = $file->store('public/documents');
            $product->brochure = $path;
        }
        $product->save();
    }

    public function get()
    {
        $products = Product::all();
        return view('admin.Products', ['products' => $products]);
    }
}
