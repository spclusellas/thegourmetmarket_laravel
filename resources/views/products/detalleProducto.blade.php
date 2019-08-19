@extends('layouts.app')

@section('content')

  <div id='product-container' class="container-fluid p-0">
      <section class="container pt-3 pb-3">
          <article class="row">
              <section class="col-md-3 col-sm-6">
                  <article class="product-grid mb-4 mt-4">
                      <div class="product-image">
                          <img class="pic-1 w-100" src="{{"/storage/$product->image"}}" alt="Este producto no tiene imagen">
                      </div>
                  </article>
              </section>
              <section class="col-md-9 col-sm-6">
                  <article class="card-body p-2 pl-4">
                    <div class="">
                      <h3 class="title mx-0 mb-3">{{$product->name}}</h3>
                      <a href="{{route('cart.add',['id' => $product->id])}}"><button type="button" class="btn btn-outline-success btn-lg mx-0"><i class="fas fa-plus"></i><i class="fas fa-shopping-basket"></i></button></a>
                    </div>
                      <hr>
                      <dl class="item-property">
                          <dt>Descripción</dt>
                          <dd><p>{{$product->description}}</p></dd>
                      </dl>
                      <dl class="param param-feature">
                          <dt>Categoría</dt>
                          <dd>{{$product->category['name']}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Precio</dt>
                          <dd>$ {{$product->price}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Descuento</dt>
                          <dd>{{($product->discount) * 100}} %</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Cantidad</dt>
                          <dd>{{$product->stock}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Precio Final</dt>
                          <dd>$ {{$product->final_price}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <hr>
                  </article>
              </section>
          </article>
      </section>
  </div>
@endsection
