<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $name = session()->get('name');
        $hobbies = session()->get('hobbie');
        $gender = session()->get('gender');
        $favourites = session()->get('favourite');
        $marital = session()->get('marital');
        return view('index',compact('name','hobbies','gender','favourites','marital'));
    }
    
    public function store(Request $request){
        $request->session()->put('name',$request->name);
        $request->session()->put('hobbie',$request->hobbie);
        $request->session()->put('gender',$request->gender);
        $request->session()->put('favourite',$request->favourite);
        $request->session()->put('marital',$request->marital);
        return back();
    }
}
