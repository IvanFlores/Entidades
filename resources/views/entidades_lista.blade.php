@extends('plantillaentidadeslista')
@section('contenido')
<section class="section section-lg">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-8 col-lg-8 wow fadeInUp">
                <div class="row row-30">
                    <div class="container">
                        <form action="entidades_lista">
                            <label class="form-label-outside" for="tipo">Tipo de entidad</label>
                            <select class="select2" id="tipo" type="text" name="tipo">
                                <option value="0" selected>Todos</option>
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                                @endforeach
                            </select>
                            <button type="submit">Actualizar</button>
                        </form>
                    </div>
                </div>
                <div class="row row-30">
                    <?php
                        $cant=0;
                        $cant_pislea=0;
                        $total_presenta = 0;
                        $total = $entidades->count();
                    ?>
                    <div class="container">
                        <h3>Listado de Entidades</h3>
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <td>Código</td>
                                    <td>Sigla</td>
                                    <td>Denominación</td>
                                    <td>PIGE</td>
                                    <td>PISLEA</td>
                                    <td>E.D.*</td>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                            @foreach($entidades as $entidad)
                                <tr>
                                    <td><a href="{{ $entidad->ruta() }}">{{ $entidad->cod }}</a></td>
                                    <td><a href="{{ $entidad->ruta() }}">{{ $entidad->sigla }}</a></td>
                                    <td>{{ $entidad->denominacion }}</td>
                                    <td>@if($entidad->presenta == 1)
                                            <?php $total_presenta = $total_presenta + 1; ?>
                                            @if($entidad->piges()->count()>=1)
                                                <ul class="list-marked-1">
                                                    <li><a href="{{ $entidad->piges()[0]->ruta() }}"></a></li>
                                                </ul>
                                                <?php $cant = $cant + 1; ?>
                                            @else
                                            <ul class="list-marked-3">
                                                <li><a href="#"></a></li>
                                            </ul>
                                            @endif
                                        @else
                                            <ul class="list-marked-2">
                                                <li><a href=""></a></li>
                                            </ul>
                                        @endif
                                    </td>
                                    <td>@if($entidad->presenta == 1)
                                            @if($entidad->pisleas()->count()>=1)
                                                <ul class="list-marked-1">
                                                    <li><a href="{{ $entidad->pisleas()[0]->ruta() }}"></a></li>
                                                </ul>
                                                <?php $cant_pislea = $cant_pislea + 1; ?>
                                            @else
                                            <ul class="list-marked-3">
                                                <li><a href="#"></a></li>
                                            </ul>
                                            @endif
                                        @else
                                            <ul class="list-marked-2">
                                                <li><a href=""></a></li>
                                            </ul>
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <p>* E.D. = Estrategia de Digitalización</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 wow fadeInUp">
                <div class="info">
                    <div class="info-header">
                        <!-- <div class="icon fa-comment"></div> -->
                        <h3>Estadísticas</h3>
                    </div>
                </div>
                <article class="box-minimal">
                    <div class="unit unit-spacing-md flex-column flex-sm-row text-center text-sm-left">
                        <div class="unit-left">
                            <div class="box-minimal-icon fa-group"></div>
                        </div>
                        <div class="unit-body">
                            <h4 class="text-center"><a href="#">Total de entidades</a></h4>
                            <h4 class="text-center strong"><?php echo($total_presenta); ?></h4>
                        </div>
                    </div>
                </article>
                <article class="box-minimal">
                    <div class="unit unit-spacing-md flex-column flex-sm-row text-center text-sm-left">
                        <div class="unit-left">
                            <div class="box-minimal-icon fa-thumbs-up"></div>
                        </div>
                        <div class="unit-body">
                            <h4 class="text-center"><a href="#"></a>Con PIGE presentado</h4>
                            <h4 class="text-center strong"><?php echo($cant); ?> (<?php echo(round($cant/($total_presenta === 0 ? 1 : $total_presenta)*100,2)); ?> %)</h4>
                        </div>
                    </div>
                </article>
                <article class="box-minimal">
                    <div class="unit unit-spacing-md flex-column flex-sm-row text-center text-sm-left">
                        <div class="unit-left">
                            <div class="box-minimal-icon fa-thumbs-up"></div>
                        </div>
                        <div class="unit-body">
                            <h4 class="text-center"><a href="#"></a>Con PISLEA presentado</h4>
                            <h4 class="text-center strong"><?php echo($cant_pislea); ?> (<?php echo(round($cant_pislea/($total_presenta === 0 ? 1 : $total_presenta)*100,2)); ?> %)</h4>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>





</section>
@endsection
