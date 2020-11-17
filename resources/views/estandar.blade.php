@extends('plantilla')
@section('contenido')
<section class="section section-lg section-inset-1 position-relative index-1">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-6 col-lg-6 wow fadeInUp text-center">
                <h3>{{ $estandar->formato }}</h3>
                <?php if(Voyager::image( $estandar->imagen ) ==="") {
                        $imagen="/imagenes/estandar.png";
                    } else {
                        $imagen=Voyager::image( $estandar->imagen );
                    };
                ?>
                <img src={{$imagen}} alt="logo entidad" width="370" height="108"/>
                <h4><strong>Tipo: </strong>{{ $estandar->categoria() }}</h4>
                <a class="button button-primary" href="/catalogo"><< Listado general</a>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".05s">
                <h4><strong>Estándar: </strong>{{ $estandar->estandar }}</h4>
                <h4><strong>Descripción: </strong>{{ $estandar->descripcion }}</h4>
                <ul class="list-marked-1">
                    <li>Extensión: <a href="#">{{ $estandar->extension }}</a></li>
                    <li>Mime type: <a href="#">{{ $estandar->mime_type }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
