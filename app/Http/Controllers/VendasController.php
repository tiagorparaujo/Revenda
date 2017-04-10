<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index(){
        return view('vendas.index');
    }

    public function show(){
        return view('vendas.show');
    }

    public function create(){
        return view('vendas.form');
    }

    public function update(){
        return view('vendas.form');
    }

    public function delete(){

    }
}
