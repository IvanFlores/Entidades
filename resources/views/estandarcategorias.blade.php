@extends('plantilla')
@section('contenido')
<section class="section section-lg">
    <div class="row row-30">
        <div class="col-md-8 col-lg-8 wow fadeInUp">
            <div class="container">
                <h3>Categorías de estándares abiertos</h3>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <td>N°</td>
                            <td>Categoría</td>
                            <td>Imágen</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->categoria }}</td>
                                <td>{{ Voyager::image($categoria->imagen) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
