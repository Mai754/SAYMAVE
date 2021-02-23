<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class EmpleadosController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Muestra la cantidad de datos en la pantalla

        $datos['empleados']=Empleados::paginate(5);
        return view('empleados.index',$datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        /*Validacion de los datos */
        $campos=[
            'DNIEmpleado'=>'required|unique:empleados,DNIEmpleado|min:13|max:13',
            'PrimerNombre'=>'required|alpha',
            'PrimerApellido' => 'required|alpha|min:15|max:15',
            'DireccionEmpleado' => 'required|string',                  
            'TelefonoEmpleado'=>'required|min:8|max:8',
            'PuestoEmpleado' => 'required|alpha',
            'ContactoDeEmergencia'=> 'required|min:8|max:8'    
        ];
        $mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos,$mensaje);

       // $datosEmpleado=request()->all();
        $datosEmpleado=request()->except('_token');

        //*eliminacion de foto de en la carpeta 
        if($request->hasFile('FotoDeEmpleado')){
            $datosEmpleado['FotoDeEmpleado']=$request->file('FotoDeEmpleado')->store('uploads','public');
        }

        Empleados::insert($datosEmpleado);
        //return response()->json($datosEmpleado);
        return redirect('empleados')->with('Mensaje','Empleado Agregado Con Exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
        $empleado = Empleados::find($id);
        return view('Empleados.ver')->with('empleados',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
        $empleado= Empleados::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        $datosEmpleado=request()->except(['_token', '_method']);
        if($request->hasFile('FotoDeEmpleado')){
            $empleado= Empleados::findOrFail($id);
            Storage::delete('public/'.$empleado->FotoDeEmpleado);
            $datosEmpleado['FotoDeEmpleado']=$request->file('FotoDeEmpleado')->store('uploads','public');
        }

        Empleados::where('id','=',$id)->update($datosEmpleado);
        $empleado= Empleados::findOrFail($id);
        return view('empleados.edit',compact('empleado'));
        return redirect('Empleados')->with('Mensaje','Empleados Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $empleado= Empleados::findOrFail($id);
        if(Storage::delete('public/'.$empleado->FotoDeEmpleado)){
            Empleados::destroy($id);
        }
        return redirect('empleados')->with('Mensaje','Empleado Eliminado');
    }
}
