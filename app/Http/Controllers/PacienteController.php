<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $token22 = "f595f3e5e2cced19af3dbada66c8fd88";
        if($request->token == $token22) {
            $pacientes = Paciente::where(['paciente_estado'=>1])->get();
            return $pacientes;
        } 

        return response()->json([
            "message" => "error token no valido"               
        ]);
    }

    public function indexview()
    {
        $pacientes = Paciente::where(['paciente_estado'=>1])->get();
        // return $pacientes;
        return view('paciente.indexview', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->paciente_nombre1 = $request['paciente_nombre1'];
        $paciente->paciente_nombre2 = $request['paciente_nombre2'];
        $paciente->paciente_apellido1 = $request['paciente_apellido1'];
        $paciente->paciente_apellido2 = $request['paciente_apellido2'];
        $paciente->paciente_tipo_documento = $request['paciente_tipo_documento'];
        $paciente->paciente_documento = $request['paciente_documento'];
        $paciente->paciente_fecha_nacimiento = $request['paciente_fecha_nacimiento'];
        $paciente->paciente_sexo = $request['paciente_sexo'];
        $paciente->paciente_edad = $request['paciente_edad'];
        $paciente->paciente_direccion = $request['paciente_direccion'];
        $paciente->paciente_telefono = $request['paciente_telefono'];
        $paciente->paciente_celular = $request['paciente_celular'];
        $paciente->paciente_email = $request['paciente_email'];
        $paciente->fecha_actualizacion = date("y-m-d");
        $paciente->save();

        return redirect()->route('paciente.indexview');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
