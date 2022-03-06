@extends('admin.layout')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Listado de Resultados</h4> 
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="index.html">Resultados</a></li>
            <li class="active">Listar Resultados</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Resultados</h3>
            <div class="table-responsive" style="overflow-y: scroll; height: 500px;">
                <table id="tableresultado" class="table table-hover color-bordered-table info-bordered-table">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Documento</th>
                            <th>Fecha Examen</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <input id="buscar" type="text" class="form-control" placeholder="Escriba algo para buscar" autocomplete="off" />
                            </td> 
                        </tr>
                    </thead> 
                    <tbody>
                    @foreach($resultados as $resultado)
                        <tr>
                            <td>{{ $resultado->resultado_paciente }}</td>
                            <td>{{ $resultado->paciente_documento }}</td>
                            <td>{{ $resultado->resultado_fecha }}</td>                                                  
                            <td>
                                <a target="_blank" href="{{asset('resultado/pdfqr/'.$resultado->resultado_filename.'.pdf')}}" data-toggle="tooltip" data-original-title="Ver Pdf"> <i class="fa fa-binoculars text-inverse m-r-10"></i> </a>                               

                                <a href="{{asset('resultado/pdfqr/'.$resultado->resultado_filename.'.pdf')}}" download data-toggle="tooltip" data-original-title="Descargar Pdf"> <i class="fa fa-file-pdf-o text-inverse m-r-10"></i> </a>
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
    var table = document.getElementById("tableresultado").tBodies[0];

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