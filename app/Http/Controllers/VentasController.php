<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Ventas']=Ventas::paginate(5);
        return view('Ventas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Ventas.create');
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
            'codigoDeFactura'=> 'required|unique:Compras,codigoDeFactura|min:7|max:7',
            'DNIEmpleado'=> 'required|unique:Compras,DNIEmpleado|min:13|max:13',
            'id_cliente'=> 'required|unique:Compras,IdProveedor',
            'FechaDeLaVenta'=> 'required',
            'CodigoDeProducto'=> 'required|unique:Compras,CodigoDeProducto|min:6|max:6',
            'NombreProducto'=> 'required|string',
            'Cantidad'=> 'required|numeric',
            'TipoDeFactura'=> 'required|string',
            'TotalAntes_DeImpuesto'=> 'required|numeric',
            'Impuesto'=> 'required|numeric',
            'PrecioTotal'=> 'required|numeric',
        ];

        $mensaje=["required"=> 'El :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $datosVenta=request()->except('_token');

        Ventas::insert($datosVenta);
        return redirect('inventarios')->with('Mensaje','Factura Completa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Venta = Ventas::find($id);
        return view('Ventas.ver')->with('Ventas',$Venta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Venta= Ventas::findOrFail($id);
        return view('Ventas.edit',compact('Venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosVenta=request()->except(['_token','_method']);
        Ventas::where('id','=',$id)->update($datosVenta);
        return redirect('Ventas')->with('Mensaje','Factura Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas $ventas)
    {
        //
    }
}
