<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        return view('clientes.index');
    }

    public function show(){
        return view('clientes.show');
    }

    public function create(){
        return view('clientes.form');
    }

    public function update(){
        return view('clientes.form');
    }

    public function delete(){

    }
}
