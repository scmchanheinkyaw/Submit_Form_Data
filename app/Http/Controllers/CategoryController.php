<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('CRUD.category.index',compact('categories'));
    }

    public function create(){
        return view('CRUD.category.create');
    }

    public function store(CategoryCreateRequest $request){
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('category.index')->with('message', 'Category is successfully created.');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('CRUD.category.edit',compact('category'));
    }

    public function update($id, CategoryUpdateRequest $request){
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name
        ]);
        return redirect()->route('category.index')->with('message', 'Category is successfully updated.');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Category is successfully deleted.');
    }

    public function search(Request $request){
        $categories = Category::where('name','like','%' . $request->free_search . '%')->get();
        return view('CRUD.category.index',compact('categories'));
    }
}
