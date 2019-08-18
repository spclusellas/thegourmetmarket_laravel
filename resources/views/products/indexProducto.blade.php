@extends('layouts.app')
@section('content')
<div class="container p-0 mt-4">
    <section class="table-wrapper m-0">
        <article class="table-title mb-3">
            <section class="row">
                <article class="col-sm-6 ml-4">
                    <h2>Todos nuestros PRODUCTOS</h2>
                </article>
            </section>
        </article>
        <section class="d-flex col-12">
            <div class="row w-100">
                @foreach ($products as $product)
                <div class="card col-11 col-md-5 col-lg-3 mb-2" style="width: 100%;">
                    <img src={{"/storage/$product->image"}} class="card-img-top" alt="...">
                    <div class="card-body p-0">
                        <h5 class="card-title mt-2">{{$product->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Categoria: </b>{{$product->category['name']}}</li>
                        @if ($product->discount != 0)
                        <li class="list-group-item"><b>Descuento: </b>{{($product->discount) * 100}} %
                        </li>
                        @else
                        <li class="list-group-item">Sin descuento
                        </li>
                        @endif
                        <li class="list-group-item preciofinal">Precio: $ {{$product->final_price}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('cart.add',['id' => $product->id])}}"><button type="button" class="btn btn-outline-success"><i class="fas fa-plus"></i> <i class="fas fa-shopping-basket"></i></button></a>
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
