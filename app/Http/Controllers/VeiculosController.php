<?php
namespace App\Http\Controllers;
use App\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VeiculosController extends Controller
{
    public function index()
    {
        $veiculos = DB::table('veiculos')->get();
        return view('veiculos.index', ['veiculos' => $veiculos]);
    }
    public function show()
    {
        return view('veiculos.show');
    }
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $veiculo = new Veiculo();
            foreach (array_keys($request->veiculo) as $key) {
                $veiculo->$key = $request->veiculo[$key];
            }
            $veiculo->save();
            return redirect()->route('veiculos');
        }
        return view('veiculos.form');
    }
    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $veiculo = Veiculo::find($request->id);
            foreach (array_keys($request->veiculo) as $key) {
                $veiculo->$key = $request->veiculo[$key];
            }
            $veiculo->save();
            return redirect()->route('veiculos');
        } else {
            $veiculos = DB::table('veiculos')->where('id', '=', $request->id)->first();
            return view('veiculos.form', ['veiculo' => $veiculos, 'editar' => true]);
        }
    }
    public function delete(Request $request)
    {
        Veiculo::find($request->id)->delete();
        return redirect()->route('veiculos');
    }
}