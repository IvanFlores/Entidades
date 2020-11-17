@extends('plantilla')
@section('contenido')
<div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/entidades">Opciones para Entidades</a></li>
        <li class="breadcrumb-item"><a href="/entidades_lista">Listado de Entidades</a></li>
        <li class="breadcrumb-item"><a href="/{{ $pige->entidad()->ruta() }}">{{ $pige->entidad()->denominacion }}</a></li>
        <li class="breadcrumb-item active">PIGE</li>
    </ul>
</div>
<section class="section section-lg section-inset-1 position-relative index-1">
    <div class="container">
        <h4 class="text-center">PIGE de {{ $pige->entidad()->denominacion }}</h4>
        <div class="row row-30">
            <div class="col-md-6 col-lg-6 wow fadeInUp">
                <h5><strong>Fecha:</strong> {{ $pige->fecha }}</h5>
                <h5><strong>Resolución:</strong> {{ $pige->resolucion }}</h5>
                <h5><strong>Fecha de resolución:</strong> {{ $pige->fecha_res }}</h5>
                <h5><strong>Documento externo:</strong> {{ $pige->doc_externo }}</h5>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".05s">
                <a  @if(is_null($pige->url))class="desactivado"
                    @endif
                    href="@if(is_null($pige->url))#
                        @else
                            {{$pige->url}}
                        @endif" target="_blank">
                    <img src="@if(is_null($pige->url))/imagenes/pdf_gris.png
                        @else
                            /imagenes/pdf.png
                        @endif" alt="PIGE" width="100">
                        Descarga AGETIC
                </a>
                <a  @if(is_null($pige->url))class="desactivado"
                    @endif
                    href="@if(is_null($pige->url_entidad))#
                        @else
                            {{$pige->url_entidad}}
                        @endif" target="_blank">
                    <img src="@if(is_null($pige->url_entidad))/imagenes/pdf_gris.png
                        @else
                            /imagenes/pdf.png
                        @endif" alt="PIGE" width="100">
                        Descarga Entidad
                </a>
            </div>
        </div>
        <div class="row row-30">
            <div class="container">
                <h3>Contenido del Plan de Implementación de Gobierno Electrónico</h3>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <td>N°</td>
                            <td>Línea estratégica</td>
                            <td>Medio</td>
                            <td>Nombre</td>
                            <td>Instancia</td>
                            <td>Objeto, meta o resultado</td>
                            <td>Inicio</td>
                            <td>Fin</td>
                            <td>Indicador</td>
                            @auth
                                <td>Observaciones</td>
                                <td>Línea estratégica revisada</td>
                                <td>Observaciones a la línea estratégica</td>
                                <td>Acciones</td>
                            @endauth
                        </tr>
                    </thead>
                    <?php $nI=0; ?>
                    <tbody class="tbody">
                    @foreach($pige_detalle as $fila)
                        <tr>
                            <td><?php $nI=$nI+1;echo($nI);?></td>
                            <td>{{ $fila->linea() }}</td>
                            <td>{{ $fila->medio }}</td>
                            <td>{{ $fila->nombre }}</td>
                            <td>{{ $fila->instancia }}</td>
                            <td>{{ $fila->objeto_meta_resultado }}</td>
                            <td>{{ $fila->inicio }}</td>
                            <td>{{ $fila->final }}</td>
                            <td>{{ $fila->indicador }}</td>
                            @auth
                                <td>{{ $fila->observaciones_transcripcion }}</td>
                                <td>{{ $fila->linea_rev() }}</td>
                                <td>{{ $fila->observaciones_linea }}</td>
                                <td>
                                    <a href="#"><div class="fa-edit" data-toggle="modal" data-target="#editar"></div></a>
                                    <a href="/entidades_lista"><div class="fa-trash"></div></a>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @include('pigeeditadet')
            </div>
        </div>
    </div>
@endsection
