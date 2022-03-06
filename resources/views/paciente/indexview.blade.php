@extends('admin.layout')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Listado de Pacientes</h4> 
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="index.html">Pacientes</a></li>
            <li class="active">Listar Pacientes</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Pacientes</h3>
            <div class="table-responsive" style="overflow-y: scroll; height: 500px;">
                <table id="tablepaciente" class="table table-hover color-bordered-table info-bordered-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Completo</th>
                            <th>Tipo Documento</th>
                            <th>Documento</th>
                            <th>Telefono(s)</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <input id="buscar" type="text" class="form-control" placeholder="Escriba algo para buscar" autocomplete="off" />
                            </td> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$i++;}}</td>
                                <td>{{ $paciente->paciente_nombre1 }} {{$paciente->paciente_nombre2}} {{$paciente->paciente_apellido1}} {{$paciente->paciente_apellido2}}</td>
                                <td>{{ $paciente->paciente_tipo_documento }}</td>
                                <td>{{ $paciente->paciente_documento }}</td>                                               
                                <td>{{ $paciente->paciente_telefono }} {{ $paciente->paciente_celular }}</td>
                                <td>
                                <a href="" data-toggle="tooltip" data-original-title="Ver Paciente"> <i class="fa fa-binoculars text-inverse m-r-10"></i> </a>                               
                                <a href="" data-toggle="tooltip" data-original-title="Editar Paciente"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                </td>
                            </tr>
                        @endforeach                                                                                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<script>
    var busqueda = document.getElementById('buscar');
    var table = document.getElementById("tablepaciente").tBodies[0];

    buscaTabla = function(){
    texto = busqueda.value.toLowerCase();
    var r=0;
    while(row = table.rows[r++])
    {
        if ( row.innerText.toLowerCase().indexOf(texto) !== -1 )
        row.style.display = null;
        else
        row.style.display = 'none';
    }
    }

    busqueda.addEventListener('keyup', buscaTabla);
</script>
@endsection
