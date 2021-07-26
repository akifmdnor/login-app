<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users is a variable
        $users = User::all();
        $products = Product::all();
        return view('home', compact('products','users'));
    }

    public function store(Request $request)
    {
        //sini aku save data
        //echo('hello world uwu');
        $product = new Product ([
            'product_name' =>  $request->get('product_name'),
            'price' =>  $request->get('price'),
            'product_description' =>  $request->get('product_description'),
            'quantity' =>  $request->get('quantity'),
        ]);

        $product->save();

        //go back to homepage
        return redirect(route('home'));

    }
}
