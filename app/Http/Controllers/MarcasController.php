<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(){
        return view('marcas.index');
    }

    public function show(){
        return view('marcas.show');
    }

    public function create(){
        return view('marcas.form');
    }

    public function update(){
        return view('marcas.form');
    }

    public function delete(){

    }
}
