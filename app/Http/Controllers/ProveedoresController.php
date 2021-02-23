<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['proveedores']=Proveedores::paginate(5);
        return view('proveedores.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedores.create');
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
            'nombre_encargado'=>'required|alpha',
            'apellido_encargado'=>'required|alpha',
            'nombre_empresa'=>'required|alpha|unique:proveedores,nombre_empresa',
            'dirección_empresa'=>'required|string',
            'numero_encargado'=>'required|min:8|max:8|unique:proveedores,numero_encargado',
            'numero_empresa'=>'required|min:8|max:8|unique:proveedores,numero_empresa'
        ];

        $mensaje=["required"=>'El :atributo es requerido'];
        $this->validate($request, $campos, $mensaje);

        $datosProveedor=request()->except('_token');

        Proveedores::insert($datosProveedor);
        return redirect('proveedores')->with('Mensaje', 'Proveedor Agregado Con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proveedor = Proveedores::find($id);
        return view('proveedores.ver')->with('proveedores',$proveedor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedor= Proveedores::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProveedor=request()->except(['_token','_method']);
        Proveedores::where('id','=',$id)->update($datosProveedor);
        return redirect('proveedores')->with('Mensaje','Proveedor Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proveedores::destroy($id);
        return redirect('proveedores')->with('Mensaje','Proveedor Eliminado');
    }
}
