@extends('layouts.app')
@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3">
        <form class='form-group' method="POST" action="{{route('products.update',['id' => $product->id])}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <section class="product-image">
                            <img class="pic-1" src="{{$product->image}}">
                        </section>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                        <label for="image">Selecciona una imagen</label>
                        <input type="file" value="image" class='form-control-file' name="image" id="image">
                    </article>
                </section>
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value="{{$product->name}}"></h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Descripción</dt>
                            <dd><input type="text" class='form-control' name="description" id="description" value="{{$product->description}}"></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Categoría</dt>
                            <dd>
                                <select name="category_id" id="category_id">
                                    <option value="{{$product->category['id']}}" selected>{{$product->category['name']}}</option>
                                    @foreach ($categories as $category)
                                        @if ($category->name != $product->category['name'])
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Precio $</dt>
                            <dd><input type="number" class='form-control' name="price" id="price" value="{{$product->price}}"></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Descuento</dt>
                            <dd>
                              <select class="" name="discount">
                                <option value=1>Nada</option>
                                <option value=0.10>10%</option>
                                <option value=0.25>25%</option>
                                <option value=0.50>50%</option>
                              </select>
                            </dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Cantidad</dt>
                            <dd><input type="number" class='form-control' name="stock" id="price" value="{{$product->stock}}"></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <hr>
                        <div class='container-fluid p-0'>
                            <a href="{{route('products.show',['id' => $product->id])}}" class="btn btn-info btn-md">Volver</a>
                            <input type="submit" class="btn btn-primary btn-md" value="Actualizar">
                        </div>
                    </article>
                </section>

            </article>
        </form>
        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </section>
</div>
@endsection
