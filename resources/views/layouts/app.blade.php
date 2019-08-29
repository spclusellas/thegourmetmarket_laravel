<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>THE GOURMET MARKET</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/stylesheet.css">

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

</head>

<body>
    <header class="sticky-top mb-1">
        {{-- Arranca mi barra de navegacion --}}
        <div class="row bg-dark">

            <div class="contlogo col-12 col-lg-3 my-3">
                <a href="/home">
                    <img class="logoheader" src="/images/logo_blanco.png" alt="logo_blanco">
                </a>
            </div>

            <div class="buscador col-10 col-md-5 col-lg-5 mr-2">
              <form class="col-12" action={{route('product.search')}} method="get">
                <div class="page">
                    <div class="page__demo">
                        <label class="field a-field a-field_a1 page__field">
                            <input name="busqueda" class="field__input a-field__input" placeholder="Vinos, organicos..." required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Buscador...</span>
                            </span>

                        </label>
                        <button class="bg-dark text-light border-0" type="submit" name="search-submit" ><i class="fas fa-search"></i></button>
                    </div>
                </div>
              </form>
            </div>


            <div class="barraiconos col-11 col-md-5 col-lg-3">
                <ul class="iconos d-flex align-items-baseline justify-content-around">
                  @guest
                    <li class="iconitos"><a  href="{{ route('login') }}"><i class="fas fa-user-circle"></i></a></li>
                    <li class="iconitos"><a href="#"><i class="fas fa-shopping-basket fa-1x"></i></a></li>
                    <li class="iconitos"><a href="/faq"><i class="fas fa-question fa-1x"></i></a></li>
                  @else
                    @if (Auth::User()->role == 7)
                    <li class="iconitos">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        <img class="fotoperfil" src="{{(Auth::user()->avatar)}}" alt="">
                      </a>

                      <section class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item text-dark" href="{{route('products.index')}}">{{ __('Productos') }}</a>
                          <a class="dropdown-item text-dark" href="{{route('users.index')}}">{{ __('Usuarios') }}</a>
                      </section>
                    </li>
                    <li class="cerrarsesion" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesión">
                      <a class="_cerrses" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-user-slash"></i></i>
                    </a>
                  @elseif (Auth::User()->role == 1)
                    <li class="iconitos">
                      <img class="fotoperfil" src="{{(Auth::user()->avatar)}}" alt="">
                    </li>
                    <li class="cerrarsesion" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesión">
                      <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-user-slash"></i></i>
                    </a>
                  @endif
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form></li>
                    <li class="iconitos">
                        <a class='nav-link' href={{route('cart')}}>
                        <i class="fas fa-shopping-basket fa-1x"></i>
                    </a>
                  </li>
                    <li class="iconitos"><a href="/faq"><i class="fas fa-question fa-1x"></i></a></li>
                  @endguest
                </ul>
            </div>

            <div class="barranav col-12">
                <nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="menudesp navbar-nav">
                            <li class="nav-item active m-0">
                                <a class="nav-link" href="/productos">Productos<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active m-0">
                                <a class="nav-link" href="/Novedades">Novedades <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active m-0">
                                <a class="nav-link" href="/Hogar">Hogar<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active m-0">
                                <a class="nav-link" href="/Organicos">Organicos <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active m-0">
                                <a class="nav-link" href="/Vinos">Vinos <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active m-0">
                                <a class="nav-link" href="/Sale">Sale <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-dark">
        {{-- <div class="container-fluid"> --}}

            <div class="sobrenos">
                <h3 class="titfooter">Sobre Nosotros</h3>
                <ul>
                    <li><a href="#">¿Quienes Somos?</a></li>
                    <li><a href="#">Zonas de envío</a></li>
                    <li><a href="#">Compras por mayor</a></li>
                </ul>
            </div>

            <div class="contacto">
                <h3 class="titfooter">Contacto</h3>
                <ul>
                    <li><i class="fas fa-phone"></i> <a href="tel:+511134567890">¡Llamanos ahora!</a> </li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:contacto@thegourmetmarket.com">Mandanos un mail</a></li>
                    <li class="ubic"><i class="fas fa-map-marker-alt"></i> Belgrano, C.A.B.A., Argentina</li>
                </ul>
                <p class="newsletter">
                    ¡Suscribite a nuestro Newsletter y recibí un 15% de descuento en tu próxima compra!
                </p>
            </div>

            <div class="redes">
                <h3 class="titfooter">¡Buscanos en las redes!</h3>
                <ul class="redesa">
                    <li> <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li> <a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                    <li> <a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                </ul>
                <a href="/home">
                    <img src="/images/logo_blanco.png" alt="logo">
                </a>
            </div>

        {{-- </div> --}}

    </footer>

    <!-- BOOTSTRAP 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/master.js') }}" defer></script>
</body>

</html>
