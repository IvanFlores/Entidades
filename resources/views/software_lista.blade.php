@extends('plantillasoftwarelista')
@section('contenido')
<section class="section section-lg">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-10 col-lg-10 wow fadeInUp">
                <div class="row row-30">
                    <div class="col-md-10 col-lg-10 wow fadeInUp">
                        <h2>Listado de Alternativas de Software Libre</h2>
                        <a class="button button-primary" href="/software_recomendado">Listado recomendado</a>
                    </div>
                    <div class="col-md-2 col-lg-2 wow fadeInUp text-center">
                        <a href="https://www.ctic.gob.bo/wp-content/uploads/2017/07/pa_tablas_sl_2016SL.pdf" target="_blank">
                            <img src="/imagenes/pdf.png" alt="Alternativas de software">
                            Descarga
                        </a>
                    </div>
                </div>
                <div class="row row-30">
                    <div class="container">
                        <form action="software">
                            <label class="form-label-outside" for="categoria">Categoría</label>
                            <select class="select2" id="categoria" type="text" name="categoria">
                                <option value="0" selected>Todas las categorías</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                @endforeach
                            </select>
                            <button type="submit">Actualizar</button>
                        </form>
                    </div>
                </div>
                <div class="row row-30">
                    <div class="container">
                        <h3>Listado de Alternativas de Software Libre</h3>
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <td>N°</td>
                                    <td>Categoría</td>
                                    <td>Funcionalidad</td>
                                    <td>Imágen</td>
                                    <td>Software</td>
                                    <td>Versión</td>
                                    <td>Licencia</td>
                                    <td>Fecha*</td>
                                    <td>Paquetes</td>
                                    <td>Año</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($software as $alternativa)
                                    <tr>
                                        <td>{{ $alternativa->id }}</td>
                                        <td>{{ $alternativa->categoria()->categoria }}</td>
                                        <td>{{ $alternativa->funcionalidad()->funcionalidad }}</td>
                                        <?php if(Voyager::image( $alternativa->imagen ) ==="") {
                                                $imagen="/imagenes/software.png";
                                            } else {
                                                $imagen=Voyager::image( $alternativa->imagen );
                                            };
                                        ?>
                                        <td><img src={{$imagen}} alt="logo software" width="50" height="50"/></td>
                                        <td><a href="{{ $alternativa->ruta() }}">{{ $alternativa->software }}</a></td>
                                        <td>{{ $alternativa->version }}</td>
                                        <td>{{ $alternativa->licencia }}</td>
                                        <td>{{ $alternativa->fecha_ultima_version }}</td>
                                        <td>{{ $alternativa->paquetes }}</td>
                                        <td>{{ $alternativa->anio }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        * Fecha de última versión
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
