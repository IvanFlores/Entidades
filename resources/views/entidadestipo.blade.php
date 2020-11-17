@extends('plantilla')
@section('contenido')
<section class="section section-lg">
    <div class="row row-30">
        <div class="col-md-8 col-lg-8 wow fadeInUp">
            <div class="container">
                <h3>Listado de Tipos de Entidad</h3>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <td>N°</td>
                            <td>Tipo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo->id }}</td>
                                <td>{{ $tipo->tipo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
