<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
use App\Companie;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function show()
    {
        $categories = Categorie::all();
        $companies = Companie::all();
        return view('admin.addProduct', [
            'companies' => $companies,
            'categories' => $categories,
        ]);

    }
    public function add(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->company = $request->company;
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
        return back()->with('status', 'Product has been added to site !');
    }

    public function get()
    {
        $products = Product::all();
        $categories = Categorie::all();
        $companies = Companie::all();
        return view('admin.Products', [
            'products' => $products,
            'companies' => $companies,
            'categories' => $categories,
        ]);
    }

    public function delete($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();
        return back()->with('delete', 'Product has been successfully deleted !');
    }
}
