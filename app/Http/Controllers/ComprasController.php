<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Compras']=Compras::paginate(5);
        return view('Compras.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Compras.create');
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
            'IdProveedor'=> 'required|unique:Compras,IdProveedor',
            'NombreEmpresa'=> 'required|string',
            'FechaDeLaCompra'=> 'required',
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

        $datosCompra=request()->except('_token');

        Compras::insert($datosCompra);
        return redirect('inventarios')->with('Mensaje','Factura Completa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Compra = Compras::find($id);
        return view('Compras.ver')->with('Compras',$Compra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Compra= Compras::findOrFail($id);
        return view('Compras.edit',compact('Compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCompra=request()->except(['_token','_method']);
        Compras::where('id','=',$id)->update($datosCompra);
        return redirect('Compras')->with('Mensaje','Factura Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compras $compras)
    {
        //
    }
}
