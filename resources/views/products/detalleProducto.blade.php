@extends('layouts.app')

@section('content')
  <div id='product-container' class="container-fluid p-0">
      <section class="container pt-3 mt-3 pb-3">
          <article class="row">
              <section class="col-md-3 col-sm-6 border ">
                  <article class="product-grid mb-4 mt-4 d-flex flex-column justify-content-center">
                      <div class="product-image mb-4">
                          <img class="pic-1 w-100 " src="{{"/storage/$product->image"}}" alt="Este producto no tiene imagen">
                      </div>

                        <div class="">

                          <a href="{{route('cart.add',['id' => $product->id])}}"><button type="button" class="btn btn-outline-success btn-lg mx-0"><i class="fas fa-plus"></i><i class="fas fa-shopping-basket"></i></button></a>
                        </div>
                  </article>
              </section>
              <section class="col-md-9 col-sm-6">
                  <article class="card-body p-2 pl-4">
                    <h3 class="title mx-0 my-3 "><strong>{{$product->name}}</strong></h3>
                      <hr>
                      <dl class="item-property">
                          <dt>Descripción</dt>
                          <dd><p>{{$product->description}}</p></dd>
                      </dl>
                      <dl class="param param-feature">
                          <dt>Categoría</dt>
                          <dd>{{$product->category['name']}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                      @if ($product->discount != 1)
                        <dl class="param param-feature">
                            <dt>Descuento</dt>
                            <dd>{{($product->discount) * 100}} %</dd>
                        </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt class="h4">Precio</dt>
                          <dd class=""><del class="text-danger">$ {{$product->price}}</del>  <br>   <span class="h4">$ {{$product->final_price}}</span></dd>
                      </dl>  <!-- item-property-hor .// -->
                      @else
                        <dl class="param param-feature">
                            <dt>Precio</dt>
                            <dd>$ {{$product->final_price}}</dd>
                        </dl>  <!-- item-property-hor .// -->
                        @endif
                      <hr>
                  </article>
              </section>
          </article>
      </section>
  </div>
@endsection
