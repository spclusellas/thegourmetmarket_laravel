@extends('layouts.app')
{{-- @section('assets')
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .pagination a {color:black}
        .product-grid{padding:0 0 0px !important;}
        .edit, .edit:hover{color:blue}
        .delete, .delete:hover{color:red}

    </style>
@endsection --}}
@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3">
        <form class='form-group' method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" >
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class='container-fluid p-0 mb-4'>
                        <label for="image">Selecciona una imagen</label>
                        <input type="file" value="image" class='form-control-file' name="image" id="image">
                    </article>
                </section>
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <dt>Nombre</dt>
                        <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value=""></h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Descripción</dt>
                            <dd><input type="text" class='form-control' name="description" id="description" value=""></dd>
                        </dl>

                        <dl class="param param-feature">
                            <dt>Categoría</dt>
                            <dd>
                                <select name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </dd>
                        </dl>  <!-- item-property-hor .// -->
                        <!-- item-property-hor -->
                        <dl class="param param-feature">
                            <dt>Precio $</dt>
                            <dd><input type="number" class='form-control' name="price" id="price" value=""></dd>
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
                            <dd><input type="number" class='form-control' name="stock" id="price" value=""></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <hr>
                        <section class='container-fluid p-0'>
                            <a href="{{url()->previous()}}" class="btn btn-info btn-md">Volver</a>
                            <input type="submit" class="btn btn-primary btn-md" value="Crear">
                        </section>
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
