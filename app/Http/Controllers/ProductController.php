<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $product = Product::paginate(5);
        return view('index', compact('product'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        $number = mt_rand(100000000,999999999);
        if ($this->productCodeExists($number))
        {
            $number = mt_rand(1000000000,9999999999);
        }
        $product = new Product();
        $product->title=$request->title;
        $product->price=$request->price;
        $product->product_code=$number;
        $product->description=$request->description;

        $product->save();

        return redirect()->route('product')->with('success', 'Product added successfully');
    }
    public function productCodeExists($number)
    {
        return Product::whereProductCode($number)->exists();
    }
}
