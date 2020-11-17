@extends('plantillaentidadeslista')
@section('contenido')
<section class="section section-lg">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-10 col-lg-10 wow fadeInUp">
                <div class="row row-30">
                    <div class="col-md-10 col-lg-10 wow fadeInUp">
                        <h2>Catálogo de Estándares Abiertos del Estado Plurinacional de
                            Bolivia</h2>
                    </div>
                    <div class="col-md-2 col-lg-2 wow fadeInUp text-center">
                        <a href="https://www.ctic.gob.bo/wp-content/uploads/2019/10/LISTA-DE-FORMATO-DE-ARCHIVOS-17-07-19.pdf">
                            <img src="/imagenes/pdf.png" alt="Formatos de Archivos Basada en la Definición de Estándares Abiertos">
                            Descarga
                        </a>
                    </div>
                </div>
                <div class="row row-30">
                    <div class="container">
                        <form action="catalogo">
                            <label class="form-label-outside" for="tipo">Categoría</label>
                            <select class="select2" id="categoria" type="text" name="categoria">
                                <option value="0" selected>Categoría de estándar</option>
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->categoria }}</option>
                                @endforeach
                            </select>
                            <button type="submit">Actualizar</button>
                        </form>
                    </div>
                </div>
                <div class="row row-30">
                    <div class="container">
                        <h3>Listado de Estándares</h3>
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <td>N°</td>
                                    <td>Formato</td>
                                    <td>Estándar</td>
                                    <td>Descripción</td>
                                    <td>Extensión</td>
                                    <td>Mime type</td>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                            @foreach($estandares as $estandar)
                                <tr>
                                    <td><a href="{{ $estandar->ruta() }}">{{ $estandar->id }}</a></td>
                                    <td><a href="{{ $estandar->ruta() }}">{{ $estandar->formato }}</a></td>
                                    <td>{{ $estandar->estandar }}</td>
                                    <td>{{ $estandar->descripcion }}</td>
                                    <td>{{ $estandar->extension }}</td>
                                    <td>{{ $estandar->mime_type }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
