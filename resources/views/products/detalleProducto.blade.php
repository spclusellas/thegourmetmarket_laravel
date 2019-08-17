@extends('layouts.app')
@section('content')
  <div id='product-container' class="container-fluid p-0">
      <section class="container pt-3 pb-3">
          <article class="row">
              <section class="col-md-3 col-sm-6">
                  <article class="product-grid mb-4 mt-4">
                      <div class="product-image">
                          <img class="pic-1" src="{{"/storage/$product->image"}}" alt="Este producto no tiene imagen">
                      </div>
                  </article>
              </section>
              <section class="col-md-9 col-sm-6">
                  <article class="card-body p-2 pl-4">
                      <h3 class="title mb-3">{{$product->name}}</h3>
                      <hr>
                      <dl class="item-property">
                          <dt>Descripción</dt>
                          <dd><p>{{$product->description}}</p></dd>
                      </dl>
                      <dl class="param param-feature">
                          <dt>Género</dt>
                          <dd>{{$product->genre['name']}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Categoría</dt>
                          <dd>{{$product->category['name']}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Talle</dt>
                          <dd>{{$product->size['size']}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Precio</dt>
                          <dd>$ {{$product->price}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Cantidad</dt>
                          <dd>{{$product->stock}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <hr>
                  </article>
              </section>
          </article>
      </section>
  </div>
@endsection
