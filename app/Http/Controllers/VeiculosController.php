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

    public function create(Request $request){
        if($request->isMethod('post')){
            var_dump($request->all);
        }
        return view('veiculos.form');

    }

    public function update(Request $request){

        return view('veiculos.form');
    }

    public function delete(){

    }
}
