<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    public function index(){
        return view('veiculos.index');
    }

    public function show(){
        return view('veiculos.show');
    }

    public function create(){
        return view('veiculos.form');
    }

    public function update(){
        return view('veiculos.form');
    }

    public function delete(){

    }
}
