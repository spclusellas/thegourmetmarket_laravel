@extends('layouts.app')
@section('content')
<div class="container-fluid p-0 mt-4">
    <section class="table-wrapper m-0">
        <article class="table-title mb-3">
            <section class="row">
                <article class="col-sm-6">
                    <h2 class="ml-5">Administración de <strong>Productos</strong></h2>
                </article>
                <article class="col-sm-6 text-right pr-4">
                    <a href="{{route('products.create')}}" class="btn btn-success mr-5"><i class="fas fa-plus"></i><span> Agregar Producto</span></a>
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
                    <th class="text-center">Fecha Modificación</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class='w-100'>
                @foreach ($products as $product)
                <tr>
                    <td class="text-center"><a href="{{route('products.show',['id' => $product->id])}}">{{$product->name}}</a></td>
                    <td class="text-center">{{$product->category['name']}}</td>
                    <td class="text-center">$ {{$product->price}}</td>
                    <td class="text-center">{{$product->stock}}</td>
                    <td class="text-center">{{$product->updated_at}}</td>
                    <td class="d-flex text-center">
                        <a href="{{route('products.edit', ['id' => $product->id])}}" class="edit"><i class="fas fa-edit" class="material-icons" data-toggle="tooltip" title="Edit"></i></a>
                        {{-- <a href="{{route('users.destroy',['id' => $product->id])}}" id='delete-link' class="btn btn-danger btn-sm btn-block" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a> --}}
                        <form id='{{$product->id}}' class='form-delete' action="{{route('products.destroy',['id' => $product->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a id='delete-link-{{$product->id}}' href="#" class="delete"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection
