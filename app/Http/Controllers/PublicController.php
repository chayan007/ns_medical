<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
use App\Companie;

class PublicController extends Controller
{
    public function index()
    {
        return view();
    }

    public function contact()
    {

    }

    public function requestPrice()
    {

    }

    public function newsfeed()
    {

    }

    public function displayProducts()
    {
        $products = Product::simplePaginate(20);
        $categories = Categorie::all();
        $companies = Companie::all();

        return view('products', [
            'products' => $products,
            'companies' => $companies,
            'categories' => $categories,
        ]);

    }

    public function displaySingleProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $relateds = Product::where('category', $product->category)->simplePaginate(4);
        return view('single_product', [
            'product' => $product,
            'relateds' => $relateds,
        ]);
    }
}
