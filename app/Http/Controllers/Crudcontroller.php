<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    public function index(){
        return view('crud.index');
    }//

    public function create(){
        return view('crud.create');
    }
}
