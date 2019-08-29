@extends('layouts.app')
@section('content')

<div class="container p-0 mt-4">
    <section class="table-wrapper m-0">
        <article class="table-title mb-3">
            <section class="row">
                <article class="col-sm-6 ml-4 text-center">
                    <h2 class="bg-dark text-light p-2">PRODUCTOS -<i> {{$categ}} </i></h2>
                </article>
                  <form class="" action="/" method="get">
                    <select class="custom-select custom-select-lg mb-3" onchange="la(this.value)">
                    <option disabled selected>Seleccione una categoria...</option>
                  @foreach ($categories as $categorie)
                      <option value="/{{$categorie->name}}"{{$categorie->name}}>{{$categorie->name}}</option>
                  @endforeach
                  </select>
                  <script type="text/javascript">
                    function la(src){
                      window.location=src;
                    }
                  </script>
                  </form>
            </section>
        </article>

        <section class="d-flex col-12">
            <div class="row w-100 d-flex justify-content-around">
                @foreach ($products as $product)
                <div class="_producto card col-11 col-md-5 col-lg-3 mx-1 mb-3" style="width: 100%;">
                  @if ($product->discount == 0.5)
                      <img class="cincuenta" src="/images/50-off.png" alt="">
                  @endif
                    <img src={{"/storage/$product->image"}} class="card-img-top" alt="...">
                    <div class="card-body p-0">
                        <h5 class="card-title mt-2">{{$product->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Categoria: </b>{{$product->category['name']}}</li>
                        @if ($product->discount != 1)
                          <li class="list-group-item"><b>Descuento: </b>{{($product->discount) * 100}} %
                          </li>
                          <li class="list-group-item preciofinal">Precio: <br>
                            <del class="text-danger">$ {{$product->price}}</del>     $ {{$product->final_price}}</li>
                        @else
                          <li class="list-group-item">Sin descuento
                          </li>
                          <li class="list-group-item preciofinal">Precio: <br> $ {{$product->final_price}}</li>
                        @endif
                          {{-- <li class="list-group-item preciofinal">Precio: $ {{$product->final_price}}</li> --}}
                    </ul>
                    <div class="card-body">
                        <a class="addCart" id="addCart" href="{{route('cart.add',['id' => $product->id])}}"><button type="button" class="btn btn-outline-success"><i class="fas fa-plus"></i> <i class="fas fa-shopping-basket"></i></button></a>
                        <a href={{route('front.product.show',['id' => $product->id])}} class="card-link"><button type="button" class="btn btn-outline-info">Ver <i class="fas fa-plus"></i></button></a>
                    </div>
                </div>
                @endforeach
                {{-- {{$products->links()}} --}}
            </div>
        </section>
</div>
<div class="paginacion m-0">
  {{$products->links()}}
</div>
@endsection
