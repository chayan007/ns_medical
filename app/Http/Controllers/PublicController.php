<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index()
    {
        $products = Product::simplePaginate(8);
        return view('home', ['products' => $products]);
    }

    public function contact(Request $request)
    {
        $name = $request->name;
        $email = 'sonicxxx7@gmail.com';
        $phone = $request->phone;
        $product = $request->product;
        $title = 'Someone has requested Product Enquiry';
        $content = $name." has enquired about -> ".$product." \n Email : '$email' \n Phone: '$phone'";
        try {
            Mail::send('send', ['title' => $title, 'content' => $content], function ($message)
            {
                $message->subject('Enquiry from Website _ REPLY FAST');
                $message->from('xyz@gmail.com', 'XYZ');
                $message->to('sonicxxx7@gmail.com');
            });
        }
        catch (Exception $e)
        {
            return back()->with('mail-fail', $e);
        }
        return back()->with('mail-success', 'You shall be contacted in a short span of time');
    }

    public function newsletter(Request $request)
    {
        $email = $request->contact;
        $title = 'Someone has shown interest in your Company';
        $content = 'He/She wishes to be notified about your latest products and offers through '.$email;
        try {
            Mail::send('send', ['title' => $title, 'content' => $content], function ($message)
            {
                $message->subject('NS Medico Subscribed _ Followers');
                $message->from('xyz@gmail.com', 'XYZ');
                $message->to('chayandatta007@gmail.com');
            });
        }
        catch (Exception $e)
        {
            return back()->with('mail-fail', $e);
        }
        return back();

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
