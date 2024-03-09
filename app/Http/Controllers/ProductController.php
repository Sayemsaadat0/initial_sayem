<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('products.index' , ['products' => $product]);
    }


    // show the form page
    public function create(){
        return view('products.create');
    }

    // form handling form action
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'desc' => 'required'
        ]);
        $newData = product::create($data);
        // return redirect(route('product.index'));
        return redirect(route('product.index'))->with('success', 'New product has been uploaded successfully.');

    }




    public function edit(product $product){
        return view('products.edit',['product' => $product]);
    }



    public function update(product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'desc' => 'required'
        ]);
        $product->update(($data));
        return redirect(route('product.index'))->with('success', 'New product has been uploaded successfully.');
    }


    public function destroy(product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Succesfully.');
    }
}
