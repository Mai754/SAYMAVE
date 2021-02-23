<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes']=clientes::paginate(5);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'nombre_cliente'=> 'required|alpha',
            'apellido_cliente'=> 'required|alpha',
            'numero_de_telefono'=> 'required|min:8|max:8'
        ];

        $mensaje=["required"=> 'El :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $datosCliente=request()->except('_token');

        clientes::insert($datosCliente);
        return redirect('clientes')->with('Mensaje','Cliente Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cliente = clientes::find($id);
        return view('clientes.ver')->with('clientes',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente= clientes::findOrFail($id);
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCliente=request()->except(['_token','_method']);
        clientes::where('id','=',$id)->update($datosCliente);
        return redirect('clientes')->with('Mensaje','Cliente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        clientes::destroy($id);
        return redirect('clientes')->with('Mensaje','Cliente Eliminado');
    }
}
