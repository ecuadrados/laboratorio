@extends('admin.layout')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Agregar Paciente</h4> 
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Paciente</a></li>
                <li class="active">Agregar Paciente</li>
            </ol>
        </div>
    </div>
        <!-- /.col-lg-12 -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title"></h3>
                <form action="{{route('paciente.store')}}" method="POST" enctype="multipart/form-data" class="form-material form-horizontal">              
                    @csrf  
                    <div class="row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_nombre1">Primer Nombre</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_nombre1" name="paciente_nombre1" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_nombre2">Segundo Nombre</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_nombre2" name="paciente_nombre2" class="form-control">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_apellido1">Primer Apellido</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_apellido1" name="paciente_apellido1" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_apellido2">Segundo Apellido</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_apellido2" name="paciente_apellido2" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-12">Tipo Documento</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="paciente_tipo_documento" required>
                                        <option  value="">Seleccione</option>
                                        <option  value="Cedula Ciudadania">Cedula Ciudadania</option>
                                        <option  value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                        <option  value="Registro Civil">Registro Civil</option>
                                        <option  value="Pasaporte">Pasaporte</option>
                                        <option  value="Cedula de Extranjeria">Cedula de Extranjeria</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_documento">Numero Documento</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_documento" name="paciente_documento" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_fecha_nacimiento">Fecha de Nacimiento</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="date" id="paciente_fecha_nacimiento" name="paciente_fecha_nacimiento" class="form-control mydatepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-12">Sexo</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="paciente_sexo" required>
                                        <option value="">Selecione</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_edad">Edad</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_edad" name="paciente_edad" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_direccion">Direccion</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_direccion" name="paciente_direccion" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_telefono">Telefono</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="number" id="paciente_telefono" name="paciente_telefono" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_celular">Celular</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="number" id="paciente_celular" name="paciente_celular" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12" for="paciente_email">Email</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="paciente_email" name="paciente_email" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-6"> 

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