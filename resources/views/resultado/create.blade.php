@extends('admin.layout')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Agregar Resultado</h4> 
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Resultado</a></li>
                <li class="active">Agregar Resultado</li>
            </ol>
        </div>
    </div>
        <!-- /.col-lg-12 -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title"></h3>
                <form action="{{route('resultado.storeresultadoapp')}}" method="POST" enctype="multipart/form-data" class="form-material form-horizontal">              
                    @csrf  
                    <div class="row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <label class="col-md-12" for="paciente">Nombre Completo</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente" name="paciente" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="identificacion">Numero Documento</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="identificacion" name="identificacion" class="form-control">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="fecha_examen">Fecha Resultado</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="date" id="fecha_examen" name="fecha_examen" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_apellido2">Subir Archivo</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="file" id="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Guardar</button>
                    <!-- <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancelar</button> -->
                </form>
            </div>
        </div>
    </div>
@endsection