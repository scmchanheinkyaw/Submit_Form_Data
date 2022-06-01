<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('CRUD.product.index',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('CRUD.product.create',compact('categories'));
    }

    public function store(ProductCreateRequest $request){
        $product = new Product();
        $product->name = $request->name;
        $product->save();

        $product->categories()->sync($request->category);
    
        return redirect()->route('product.index')->with('message', 'Product is successfully created.');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('CRUD.product.edit',compact('product','categories'));
    }

    public function update($id, ProductUpdateRequest $request){
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name
        ]);

        $product->categories()->sync($request->category);
        return redirect()->route('product.index')->with('message', 'Product is successfully updated.');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Product is successfully deleted.');
    }

    public function search(Request $request){
        $products = Product::where('name','like','%' . $request->free_search . '%')->get();
        return view('CRUD.product.index',compact('products'));
    }
}
