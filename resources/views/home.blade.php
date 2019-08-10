@extends('layouts.main')

@section('content')

  <div class="container-fluid">

      <!-- ARRANCA EL CAROUSEL -->
      <section class= "carouselhome">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
          </a>
      </section>
      <!-- TERMINA EL CAROUSEL -->

      <!-- ARRANCA SEGUNDA SECCION -->
      <section class="seg-seccion-gnrl my-3 mx-auto">
        <div class="row m-0">
          <article class="seg-item sale col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannersale.jpg" alt="Sale">
            </a>
          </article>
          <article class="seg-item novedades col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannernov.jpg" alt="SALE">
            </a>
          </article>
          <article class="seg-item vendido col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannervend.jpg" alt="masvendido">
            </a>
          </article>
          <article class="seg-item organico col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannerorganico.jpg" alt="organicos">
            </a>
          </article>
        </div>
      </section>

      <!-- ARRANCA TERCERA SECCION -->

      <section class="sobrenosotros bg-dark my-3 p-4">
        <h2 class="text-light text-center mb-3 font-weight-bold">SOBRE NOSOTROS</h2>
        <i class="fas fa-utensils text-light d-block text-center mb-3"></i>
        <p class="text-light p-2">Somos una tienda online que ofrece a sus clientes alimentos sustentables elaborados por productores locales que garantizan la calidad y trazabilidad de sus productos, contribuyendo así al desarrollo y crecimiento del mercado local en toda la región. A su vez dichos productos fueron especialmente seleccionados por especialistas para garantizarle a nuestros clientes que están recibiendo los mejores alimentos que pueden encontrarse en el mercado.</p>
        <p class="text-light p-2">Nuestro objetivo es poder generar una comunidad que una a los mejores productores de nuestro país con clientes que valoren la calidad de sus productos y los orígenes sustentables de los mismos. Esta red permitirá apoyar a las economías regionales y acercar a los consumidores productos sustentables que garanticen una alimentación más saludable y natural.</p>
      </section>

      <!-- ARRANCA CUARTA SECCION -->

      <section class="productosmasvendidos"> <!-- productos mas vendidos-->
          <h2 class="text-center mb-3 font-weight-bold">NUESTRA SELECCIÓN PARA VOS</h2>
          <i class="fas fa-cart-arrow-down d-block text-center mb-3 text-dark"></i>
          <div class="row">
            <article class="contendor-prod1 col-5 col-md-5 col-lg-3 d-flex flex-column justify-content-center">
              <img src="images/prod1.png" class="producto" alt="...">
              <h5 class="card-title">Vino</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
            <article class="contendor-prod2 col-5 col-md-5 col-lg-3 d-flex flex-column justify-content-center">
              <img src="images/queso.jpg" class="producto" alt="...">
              <h5 class="card-title">Queso de Oveja</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
            <article class="contendor-prod3 d-xs-none col-5 col-md-5 col-lg-3 d-md-flex flex-column justify-content-center">
              <img src="images/jugosorg.jpg" class="producto" alt="...">
              <h5 class="card-title">Jugos Organicos</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
            <article class="contendor-prod4 d-xs-none col-5 col-md-5 col-lg-3 d-md-flex flex-column justify-content-center">
              <img src="images/tomatesor.jpg" class="producto" alt="...">
              <h5 class="card-title">Tomates</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
        </div>
      </section>

@endsection
