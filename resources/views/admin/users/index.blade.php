@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <section class="table-wrapper m-0">
        <article class="table-title my-3">
            <section class="row">
                <div class="col-sm-6 ml-2">
                    <h2>Administración de <strong>Usuarios</strong></h2>
                </div>
            </section>
        </article>
        <table id='table' class="table table-striped table-hover  w-100">
            <thead class='w-100'>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Fecha Creacion</th>
                    <th class="text-center">Fecha Modificación</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class='w-100'>
                @foreach ($users as $user)
                <tr>
                    <td class="text-center"><a href="{{route('users.show',['id' => $user->id])}}">{{$user->name}}</a></td>
                    <td class="text-center">{{$user->email}}</td>
                    <td class="text-center">{{$user->created_at}}</td>
                    <td class="text-center">{{$user->updated_at}}</td>
                    <td class="d-flex text-center">
                        <a href="{{route('users.edit', ['id' => $user->id])}}" class="edit"><i class="fas fa-edit" class="material-icons" data-toggle="tooltip" title="Edit"></i></a>
                        <form id='{{$user->id}}' class='form-delete' action="{{route('users.destroy',['id' => $user->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a id='delete-link-{{$user->id}}' href="#" class="delete"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection
