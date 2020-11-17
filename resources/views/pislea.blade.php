@extends('plantilla')
@section('contenido')
<div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/entidades">Opciones para Entidades</a></li>
        <li class="breadcrumb-item"><a href="/entidades_lista">Listado de Entidades</a></li>
        <li class="breadcrumb-item"><a href="/{{ $pislea->entidad()->ruta() }}">{{ $pislea->entidad()->denominacion }}</a></li>
        <li class="breadcrumb-item active">PISLEA</li>
    </ul>
</div>
<section class="section section-lg section-inset-1 position-relative index-1">
    <div class="container">
        <h4 class="text-center">PISLEA de {{ $pislea->entidad()->denominacion }}</h4>
        <div class="row row-30">
            <div class="col-md-6 col-lg-6 wow fadeInUp">
                <h5><strong>Fecha:</strong> {{ $pislea->fecha }}</h5>
                <h5><strong>Resolución:</strong> {{ $pislea->resolucion }}</h5>
                <h5><strong>Fecha de resolución:</strong> {{ $pislea->fecha_res }}</h5>
                <h5><strong>Documento externo:</strong> {{ $pislea->doc_externo }}</h5>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".05s">
                <a  @if(is_null($pislea->url))class="desactivado"
                    @endif
                    href="@if(is_null($pislea->url))#
                        @else
                            {{$pislea->url}}
                        @endif" target="_blank">
                    <img src="@if(is_null($pislea->url))/imagenes/pdf_gris.png
                        @else
                            /imagenes/pdf.png
                        @endif" alt="PISLEA" width="100">
                        Descarga AGETIC
                </a>
                <a  @if(is_null($pislea->url))class="desactivado"
                    @endif
                    href="@if(is_null($pislea->url_entidad))#
                        @else
                            {{$pislea->url_entidad}}
                        @endif" target="_blank">
                    <img src="@if(is_null($pislea->url_entidad))/imagenes/pdf_gris.png
                        @else
                            /imagenes/pdf.png
                        @endif" alt="PISLEA" width="100">
                        Descarga Entidad
                </a>
            </div>
        </div>
        <div class="row row-30">
            <div class="container">
                <h3>Contenido del Plan de Implementación de Sofware Libre y Estándares Abiertos</h3>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <td>N°</td>
                            <td>Código</td>
                            <td>Descripción</td>
                            <td>Presentó</td>
                            @auth
                                <td>Observaciones</td>
                                <td>Recomendaciones</td>
                                <td>Acciones</td>
                            @endauth
                        </tr>
                    </thead>
                    <?php $nI=0; ?>
                    <tbody class="tbody">
                    @foreach($pislea_estructura as $fila)
                        <tr>
                            <td><?php $nI=$nI+1;echo($nI);?></td>
                            <td>{{ $fila->codigo }}</td>
                            <td>{{ $fila->descripcion }}</td>
                            <td></td>
                            @auth
                                <td>{{ $fila->observaciones }}</td>
                                <td>{{ $fila->recomendaciones }}</td>
                                <td>
                                    <a href="#"><div class="fa-edit" data-toggle="modal" data-target="#editar"></div></a>
                                    <a href="#"><div class="fa-trash"></div></a>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
