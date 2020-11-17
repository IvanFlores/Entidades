@extends('plantilla')
@section('contenido')
<div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/entidades">Opciones para Entidades</a></li>
        <li class="breadcrumb-item"><a href="/entidades_lista">Listado de Entidades</a></li>
        <li class="breadcrumb-item active">{{ $entidad->denominacion }}</li>
    </ul>
</div>
<section class="section section-lg section-inset-1 position-relative index-1">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-6 col-lg-6 wow fadeInUp text-center">
                <h3>{{ $entidad->denominacion }}</h3>
                <?php if(Voyager::image( $entidad->logo ) ==="") {
                        $imagen="/imagenes/entidad.png";
                    } else {
                        $imagen=Voyager::image( $entidad->logo );
                    };
                ?>
                <img src={{$imagen}} alt="logo entidad" width="370" height="108"/>
                <h4>Tipo: {{ $entidad->tipo_entidad() }}</h4>
                <a class="@if(is_null($entidad->url))button button-disabled
                    @else
                        button button-primary
                    @endif" href="{{ $entidad->url }}" target="_blank">Sitio Web
                </a>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".05s">
                <div class="text-center">
                    <h3>Sigla: {{ $entidad->sigla }}</h3>
                    <p>Código de entidad: {{ $entidad->cod }}</p>
                    @if($entidad->piges()->count()>=1)
                        <ul class="list-marked-1">
                            <li><a href="{{ $entidad->piges()[0]->ruta() }}">PIGE</a></li>
                        </ul>
                    @else
                        <ul class="list-marked-3">
                            <li><a href="">PIGE</a></li>
                        </ul>
                    @endif
                    @if($entidad->pisleas()->count()>=1)
                        <ul class="list-marked-1">
                            <li><a href="{{ $entidad->pisleas()[0]->ruta() }}">PISLEA</a></li>
                        </ul>
                    @else
                        <ul class="list-marked-3">
                            <li><a href="">PISLEA</a></li>
                        </ul>
                    @endif
                    @if($entidad->estrategias()->count()>=1)
                        <ul class="list-marked-1">
                            <li><a href="{{ $entidad->estrategias()[0]->ruta() }}">Estrategia de Digitalización</a></li>
                        </ul>
                    @else
                        <ul class="list-marked-3">
                            <li><a href="">Estrategia de Digitalización</a></li>
                        </ul>
                    @endif
                </div>
                <p></p>
                <div class="info">
                    <div class="info-item">
                        <h4 class="info-title">Depende de:</h4>
                        <ul class="info-list">
                            @forelse($padres as $padre)
                                <li><a href="/entidad/{{ $padre->id }}">{{ $padre->sigla }} - {{ $padre->denominacion }}</a></li>
                            @empty
                                <h6>No existen dependencia</h6>
                            @endforelse
                        </ul>
                    </div>
                    <div class="info-item">
                        <h4 class="info-title">Entidades dependientes:</h4>
                        <ul class="info-list">
                            @forelse($hijos as $hijo)
                                <li><a href="/entidad/{{ $hijo->id }}">{{ $hijo->sigla }} - {{ $hijo->denominacion }}</a></li>
                            @empty
                                <h6>No existen dependientes registrados</h6>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
