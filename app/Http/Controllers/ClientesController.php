<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller {
   
    public function index(){
    
        
        $clientes = DB::table('clientes')->get();
    return view('clientes.index',['clientes' => $clientes]);
}
    public function show(){
    return view('clientes.show');
}
    public function create(Request $request){
    if($request->isMethod('post')){
        $cliente = new cliente();
        foreach (array_keys($request->cliente) as $key ){
            $cliente->$key = $request->cliente[$key];
        }
        $cliente->save();
        return redirect()->route('clientes');
    }
    return view('clientes.form');
}
    public function update(Request $request){
    return view('clientes.form');
}
    public function delete(){
}
}