@extends('admin.layout2')

@section('content')

 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">       
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h2>{{ $resultado->resultado_paciente; }}</h2>
              <ul>
                <li style="font-size: 20px;">Identificacion: {{ $resultado->paciente_documento; }}</li>
                <li style="font-size: 20px;">Fecha de Examen: {{ $resultado->resultado_fecha; }}</li>                
              </ul>
              <div class="btn-wrap">
              <a  class="btn btn-success waves-effect waves-light m-t-20" href="{{asset('resultado/pdfqr/'.$resultado->resultado_filename.'.pdf')}}" download data-toggle="tooltip" data-original-title="Descargar Pdf"> Descargar PDF </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
@endsection


