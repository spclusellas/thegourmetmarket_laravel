@extends('layouts.app')
@section('content')
  <div class="container-fluid p-0 mt-4">
      <section class="table-wrapper m-0">
          <article class="table-title mb-3">
              <section class="row">
                  <article class="col-sm-6 ml-4">
                      <h2>Todos nuestros PRODUCTOS</h2>
                  </article>
              </section>
          </article>
          <table id='table' class="table table-striped table-hover  w-100">
              <thead class='w-100'>
                  <tr>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Categoría</th>
                      <th class="text-center">Precio</th>
                      <th class="text-center">Cantidad</th>
                  </tr>
              </thead>
              <tbody class='w-100'>
                  @foreach ($products as $product)
                  <tr>
                      <td class="text-center"><a href="{{route('front.product.show',['id' => $product->id])}}">{{$product->name}}</a></td>
                      <td class="text-center">{{$product->category['name']}}</td>
                      <td class="text-center">$ {{$product->price}}</td>
                      <td class="text-center">{{$product->stock}}</td>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <div class='container-fluid d-flex justify-content-center'>
        {{-- {{$products->links()}} --}}
    </div>
      </section>
  </div>
  @endsection
