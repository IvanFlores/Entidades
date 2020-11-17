<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>AGETIC - Entidades</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="/text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
        <link rel="stylesheet" href="/css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Mapa de GoogleChart -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- Select2 -->
        <link rel="stylesheet" href="/css/select2.css"/>
    </head>
    <body>
        <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-container">
                    <div class="cssload-speeding-wheel"></div>
                </div>
                <p>Cargando...</p>
            </div>
        </div>
        <div class="page">
            <header class="section page-header">
                <!--RD Navbar-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed"
                        data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                        data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                        data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                        data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                        data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="150px"
                        data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="150px" data-lg-stick-up="true"
                        data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                            data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
                        </div>
                        <div class="rd-navbar-aside-outer">
                            <div class="rd-navbar-aside">
                                <!--RD Navbar Panel-->
                                <div class="rd-navbar-panel">
                                    <!--RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                        <span></span></button>
                                    <!--RD Navbar Brand-->
                                    <div class="rd-navbar-brand">
                                        <!--Brand-->
                                        <a class="brand" href="/">
                                            <img class="brand-logo-dark" src="/imagenes/logoAgetic.jpg"
                                            alt="" width="100" height="50"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="rd-navbar-info rd-navbar-collapse">
                                    <article class="info-modern">
                                        <div class="info-modern-icon fa-whatsapp"></div>
                                        <a class="info-modern-link"
                                            href="whatsapp://send?text=Coordinación AGETIC: &phone=+59176789008&abid=+591 76789008">
                                            +591 77781687
                                        </a>
                                    </article>
                                    <article class="info-modern">
                                        @guest
                                            <a class="info-modern-link fa-user"
                                                href="/admin" target="_blank"> Acceder
                                            </a>
                                        @endguest
                                        @auth
                                            <a class="icon" href="/admin" target="_blank">
                                                <img src={{ Voyager::image(Auth::user()->avatar) }} width="40"> Administrar
                                            </a>
                                        @endauth
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-main-outer">
                            <div class="rd-navbar-main">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item {{ Request::path() === 'acerca' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/acerca">Acerca de</a>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="#">Quiénes somos</a>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="#">Nuestra historia</a>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="#">Información</a>
                                                <ul class="rd-menu rd-navbar-dropdown">
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="#">PIGEs</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="#">PISLEAs</a>
                                                        <ul class="rd-menu rd-navbar-dropdown">
                                                            <li class="rd-dropdown-item">
                                                                <a class="rd-dropdown-link" href="/estandares_categorias">Categorías de estándares abiertos</a>
                                                            </li>
                                                            <li class="rd-dropdown-item">
                                                                <a class="rd-dropdown-link" href="/catalogo">Catálogo de estándares abiertos</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="#">Otros</a>
                                                    </li>
                                                </ul>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="#">Coordinación</a>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="#">Nuestro equipo</a>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="#">Noticias</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="rd-nav-item {{ Request::path() === 'entidades' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/entidades">Entidades</a>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="/entidad_tipos">Tipos de entidad</a>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="/entidades_lista">Listado de entidades</a>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="/organigrama">Estructura gráfica</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="rd-nav-item {{ Request::path() === 'catalogo' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/catalogo">Catálogo</a>
                                        </li>
                                        <li class="rd-nav-item {{ Request::path() === 'software' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/software">Software</a>
                                        </li>
                                        <li class="rd-nav-item {{ Request::path() === 'geo' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/geo">Mapa</a>
                                        </li>
                                        <li class="rd-nav-item {{ Request::path() === 'contacto' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="/contacto">Contacto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            @yield('contenido')
            @extends('plantillapie')
        </div>
        <script src="/js/core.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/select2.full.js"></script>
        <script>
            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            function getQueryVariable(variable) {
                var query = window.location.search.substring(1);
                var vars = query.split("&");
                for (var i=0; i < vars.length; i++) {
                    var pair = vars[i].split("=");
                    if(pair[0] == variable) {
                        return pair[1];
                    }
                }
                return false;
            }

            $(document).ready(function() {
                $('.select2').select2();
                var value = getParameterByName('tipo');
                //alert(value);
                $('.select2').select2('val', value);
            });
        </script>
    </body>
</html>
