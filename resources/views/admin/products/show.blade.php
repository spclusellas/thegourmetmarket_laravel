@extends('layouts.app')
{{-- @section('assets')
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .pagination a {color:black}
        .product-grid{padding:0 0 0px !important;}
        .edit, .edit:hover{color:blue}
        .delete, .delete:hover{color:red}
    </style>

 <script type="text/javascript">
    $(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    document.getElementById("delete-link").onclick = function() {
        swal({
            title: "Estás seguro?",
            text: "Una vez eliminado, no podrás recuperar este registro",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                document.getElementById("form-delete").submit();
                swal("El registro ha sido eliminado.", {
                icon: "success",
                });
            } else {
                swal("El registro no se ha eliminado.");
            }
        });
    }
    });
</script>
@endsection --}}
@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3">
        <article class="row">
            <section class="col-md-3 col-sm-6">
                <article class="product-grid mb-4 mt-4">
                    <div class="product-image">
                        <img class="pic-1 w-100" src="{{"/storage/$product->image"}}" alt="{{$product->image}}">
                    </div>
                </article>

                <article class='container-fluid p-0 text-center d-flex'>
                    <a href="{{route('products.edit', ['id' => $product->id])}}" class="m-0"><button type="button" class="btn btn-outline-warning btn-lg mx-0"><i class="fas fa-edit" class="material-icons" data-toggle="tooltip" title="Edit"></i></button></a>

                    <form id='form-delete' class='form-delete' action="{{route('products.destroy',['id' => $product->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <a href='#' id='delete-link' class="btn btn-outline-danger btn-lg mx-0" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                    </form>

                    <a href="{{route('products.index')}}" class="edit btn btn-outline-primary btn-lg mx-0"><i class="fas fa-arrow-alt-circle-left"></i></a>
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
                        <dt>Categoría</dt>
                        <dd>{{$product->category['name']}}</dd>
                    </dl>  <!-- item-property-hor .// -->
                    @if ($product->discount != 1)
                      <dl class="param param-feature">
                          <dt>Descuento</dt>
                          <dd>{{($product->discount) * 100}} %</dd>
                      </dl>  <!-- item-property-hor .// -->
                      <dl class="param param-feature">
                          <dt>Precio Original</dt>
                          <dd>$ {{$product->price}}</dd>
                      </dl>  <!-- item-property-hor .// -->
                    @else
                      <dl class="param param-feature">
                          <dt>Descuento</dt>
                          <dd>Sin descuento</dd>
                      </dl>  <!-- item-property-hor .// -->
                      @endif
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
