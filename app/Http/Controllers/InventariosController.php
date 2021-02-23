<?php

namespace App\Http\Controllers;

use App\Models\inventarios;
use Illuminate\Http\Request;

class InventariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$query = trim($request->get('search'));
        //if($request){
        //    $datos = inventarios::where('name', 'LIKE', '%'.$query.'%')->orderBy('id','asc')->get();
         //   return view('inventarios.index', [$datos, 'search' => $query]);
        //}
        $datos['inventarios']=inventarios::paginate(5);
        return view('inventarios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventarios.create');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $posts = inventarios::table('posts')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('inventarios.index',  ['posts'=>$posts]);
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
            'codigo_producto'=> 'required|unique:inventarios,codigo_producto|min:6|max:6',
            'Nombre_del_producto'=> 'required|alpha',
            'descripcion_del_producto'=> 'required|alpha',
            'precio_mayorista'=> 'required|numeric',
            'precio_compra'=> 'required|numeric',
            'precio_venta'=> 'required|numeric',
            'marcar_del_producto'=> 'required|alpha'
        ];

        $mensaje=["required"=> 'El :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $datosProducto=request()->except('_token');

        inventarios::insert($datosProducto);
        return redirect('inventarios')->with('Mensaje','Producto Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $inventario = inventarios::find($id);
        return view('inventarios.ver')->with('inventarios',$inventario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inventario= inventarios::findOrFail($id);
        return view('inventarios.edit',compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto=request()->except(['_token','_method']);
        inventarios::where('id','=',$id)->update($datosProducto);
        return redirect('inventarios')->with('Mensaje','Producto Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        inventarios::destroy($id);
        return redirect('inventarios')->with('Mensaje','Producto Eliminado');
    }
}
