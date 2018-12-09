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

        return view('products', ['products' => $products]);

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

    public function displayBycompany($id)
    {
        $products = Product::where('company', $id)->simplePaginate(20);
        return view('products', ['products' => $products]);
    }

    public function displayBycategory($id)
    {
        $products = Product::where('category', $id)->simplePaginate(20);
        return view('products', ['products' => $products]);
    }
}
