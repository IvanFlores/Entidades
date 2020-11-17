@extends('plantilla')
@section('contenido')
    <!-- Carrusel de imágenes (Swiper) -->
    <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-center text-lg-left">
            <div class="swiper-slide" data-slide-bg="imagenes/imagen01.jpg">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 col-xl-6">
                                <h1 class="text-primary" data-caption-animate="fadeIn" data-caption-delay="100">
                                    Herramientas para las entidades públicas del país.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="imagenes/imagen02.jpg">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 col-xl-6">
                                <h1 class="text-primary" data-caption-animate="fadeIn" data-caption-delay="100">
                                    Planes institucionales de Gobierno Electrónico.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="imagenes/imagen03.jpg">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 col-xl-6">
                                <h1 class="text-primary" data-caption-animate="fadeIn" data-caption-delay="100">
                                    Planes de Implementación de Software Libre y Estándares Abiertos.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Paginación (Swiper) -->
        <div class="swiper-pagination"></div>
        <!-- Navegación (Swiper) -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
    <!--About-->
    <section class="section section-lg section-inset-1 position-relative index-1">
        <div class="container offset-negative-1">
            <div class="row no-gutters">
                <div class="col-sm-6 col-lg-3 wow fadeInUp">
                    <article class="box-default box-default-3">
                        <div class="box-default-icon fa-globe"></div>
                        <h4 class="box-default-title">Entidades <br>públicas nacionales</h4>
                        <div class="box-default-text">
                            Encuentre la información general de todas las entidades públicas del Estado Plurinacional.
                        </div>
                        <a class="box-default-link fa-chevron-right" href="#"></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".05s">
                <article class="box-default box-default-2">
                    <div class="box-default-icon fa-lightbulb-o"></div>
                    <h4 class="box-default-title">Estado de <br>presentación</h4>
                    <div class="box-default-text">
                        Vea el estado de presentación de PIGEs, PISLEAs y otros por parte de su entidad y de las
                        otras Entidades Públicas.
                    </div>
                    <a class="box-default-link fa-chevron-right" href="#"></a>
                </article>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
                <article class="box-default box-default-1">
                    <div class="box-default-icon fa-cog"></div>
                    <h4 class="box-default-title">Base de información <br>compartida</h4>
                    <div class="box-default-text">
                        Conozca en detalle los planes, propuestas y herramientas de cada entidad en cuanto a TICs
                        para usarlas, integrarse con ellas y evolucionar de manera conjunta.
                    </div>
                    <a class="box-default-link fa-chevron-right" href="#"></a>
                </article>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".15s">
                    <article class="box-default">
                        <div class="box-default-icon fa-briefcase"></div>
                        <h4 class="box-default-title">Automatice el seguimiento <br>a sus planes</h4>
                        <div class="box-default-text">
                            Podrá tener a mano la información declarada por su entidad para realizar un seguimiento
                            más efectivo a sus planes y para plantear actualizaciones o mejoras a lo propuesto por
                            su entidad.
                        </div>
                        <a class="box-default-link fa-chevron-right" href="#"></a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--Contacts-->
    <section class="section section-lg bg-gray-700">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-4">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 wow fadeInRight">
                            <article class="info-classic align-items-center">
                                <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                                    <div class="unit-left">
                                        <div class="info-classic-icon fa-map-marker"></div>
                                    </div>
                                    <div class="unit-body">
                                        <a class="info-classic-link" href="#">
                                            Calle Pedro Salazar # 631 esquina, Andrés Muñoz, La Paz - Bolivia
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".05s">
                            <article class="info-classic align-items-center">
                                <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                                    <div class="unit-left">
                                        <div class="info-classic-icon fa-envelope"></div>
                                    </div>
                                    <div class="unit-body"><a class="info-classic-link" href="mailto:coordinacion@agetic.gob.bo">
                                        coordinacion@agetic.gob.bo</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".1s">
                            <article class="info-classic align-items-center info-classic-2">
                                <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                                    <div class="unit-left">
                                        <div class="info-classic-icon fa-whatsapp"></div>
                                    </div>
                                    <div class="unit-body">
                                        <a class="info-classic-link"
                                            href="whatsapp://send?text=Coordinación AGETIC: &phone=+59176789008&abid=+591 76789008">
                                            +591 77781687</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeInRight">
                            <article class="info-classic align-items-center info-classic-2">
                                <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                                    <div class="unit-left">
                                        <div class="info-classic-icon fa-fax"></div>
                                    </div>
                                    <div class="unit-body">
                                        <a class="info-classic-link" href="tel:+59122184026">+591 2 2184026</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".05s">
                            <article class="info-classic align-items-center">
                                <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                                    <div class="unit-left">
                                        <div class="info-classic-icon fa-facebook"></div>
                                    </div>
                                        <div class="unit-body">
                                            <a class="info-classic-link" href="#">Síguenos en Facebook</a>
                                        </div>
                                    </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".1s">
                            <article class="info-classic align-items-center">
                                <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                                    <div class="unit-left">
                                        <div class="info-classic-icon fa-twitter"></div>
                                    </div>
                                    <div class="unit-body">
                                        <a class="info-classic-link" href="#">Síguenos en Twitter</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
