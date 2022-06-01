<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function crudIndex(){
        return view('CRUD.index');
    }
}
