@extends('plantilla')
@section('contenido')
<section class="section section-lg section-inset-1 position-relative index-1">
    <p></p>
    <p></p>
    <div class="container">
        <div class="row row-30">
            <div class="col-md-6 col-lg-6 wow fadeInUp text-center">
                <h3>{{ $software->software }}</h3>
                <h3>Versión: {{ $software->version }}</h3>
                <?php if(Voyager::image( $software->imagen ) ==="") {
                        $imagen="/imagenes/software.png";
                    } else {
                        $imagen=Voyager::image( $software->imagen );
                    };
                ?>
                <img src={{$imagen}} alt="logo software" width="370" height="108"/>
                <h4><strong>Categoría: </strong>{{ $software->categoria()->categoria }}</h4>
                <h5><strong>Funcionalidad: </strong>{{ $software->funcionalidad()->funcionalidad }}</h5>
                <h5><strong>Sitio Web: </strong><a href="{{ $software->url }}">{{ $software->url }}</a></h5>
                <h5><strong>Repositorio: </strong><a href="{{ $software->url_repo }}">{{ $software->url_repo }}</a></h5>
                <a class="button button-primary" href="/software"><< Listado general</a>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".05s">
                <h4><strong>Licencia: </strong>{{ $software->licencia }}</h4>
                <h4><strong>Año: </strong>{{ $software->anio }}</h4>
                <h4><strong>Fecha de última revisión: </strong>{{ $software->fecha_ultima_revision }}</h4>
                <ul class="list-marked-1">
                    <li>Soberanía: <a href="#">{{ $software->soberania }}</a></li>
                    <li>Generación de tecnología: <a href="#">{{ $software->generacion_de_tecnologia }}</a></li>
                    <li>Curva de aprendizaje: <a href="#">{{ $software->curva_de_aprendizaje }}</a></li>
                    <li>Soporte: <a href="#">{{ $software->soporte }}</a></li>
                    <li>Seguridad: <a href="#">{{ $software->seguridad }}</a></li>
                    <li>Usabilidad: <a href="#">{{ $software->usabilidad }}</a></li>
                    <li>Especialización: <a href="#">{{ $software->especializacion }}</a></li>
                    <li>Compatibilidad: <a href="#">{{ $software->compatibilidad }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
