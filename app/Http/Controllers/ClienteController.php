<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        $cliente = null;
        return view('index' ,compact('cliente','clientes'));
    }

    public function add(Request $request){
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->celular = $request->celular;
        $cliente->save();
        $clientes = Cliente::all();
        $cliente = null;
        return view('index' ,compact('cliente','clientes'));
    }

    public function update($id,Request $request){
        $cliente = Cliente::find($id);
        $clientes = Cliente::all();
        return view('index' , compact('cliente','clientes'));
    }

    public function editar($id,Request $request){
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->celular = $request->celular;
        $cliente->save();
        $clientes = Cliente::all();
        $cliente = null;
        return view('index' ,compact('cliente','clientes'));
    }
    public function delete($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        $clientes = Cliente::all();
        $cliente = null;
        return view('index' ,compact('cliente','clientes'));
    }

}
