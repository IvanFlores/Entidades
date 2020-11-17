@extends('plantilla')
@section('contenido')
<section class="section section-lg bg-default">
    <div class="container">
        <div class="row row-30 bordered">
            <div class="col-md-6 wow fadeInRight">
                <article class="box-minimal">
                    <div class="unit unit-spacing-md flex-column flex-sm-row text-center text-sm-left">
                        <div class="unit-left">
                            <a href="/entidad_tipos"><div class="box-minimal-icon fa-book"></div></a>
                        </div>
                        <div class="unit-body">
                            <h4 class="box-minimal-title"><a href="/entidad_tipos">Tipos de entidad</a></h4>
                            <div class="box-minimal-text">Listado correspondiente al tipificador de entidades.</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".05s">
                <article class="box-minimal">
                    <div class="unit unit-spacing-md flex-column flex-sm-row text-center text-sm-left">
                        <div class="unit-left">
                            <a href="/entidades_lista"><div class="box-minimal-icon fa-list"></div></a>
                        </div>
                        <div class="unit-body">
                            <h4 class="box-minimal-title"><a href="/entidades_lista">Listado de entidades</a></h4>
                            <div class="box-minimal-text">Listado general de entidades en el que se puude apreciar el
                                porcentaje de presentación de PIGEs, PISLEAs y Estrategias de Digitalización</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".05s">
                <article class="box-minimal">
                    <div class="unit unit-spacing-md flex-column flex-sm-row text-center text-sm-left">
                        <div class="unit-left">
                            <a href="/organigrama"><div class="box-minimal-icon fa-sitemap"></div></a>
                        </div>
                        <div class="unit-body">
                            <h4 class="box-minimal-title"><a href="/organigrama">Estructura gráfica</a></h4>
                            <div class="box-minimal-text">Estructura gráfica jerárquica de las entidades en la que
                                se puede apreciar visualmente la dependencia existente entre éstas</div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
