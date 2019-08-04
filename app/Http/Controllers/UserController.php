<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function save(Request $request){
      $reglas = [
        'email' => 'required|unique|email|',
        'password' => 'required|min:6|',
        'repassword' => 'required|min:6|same:password',
        'name' => 'required|filled|max:20|',
        'surname' => 'required|filled|max:20|',
      ];
      $mensajes = [
        'required' => 'El campo :attribute no puede quedar vacío',
        'unique' => 'Ya existe un usuario registrado en ese email',
        'email'=> 'Por favor, ingresá un email válido',
        'min:6' => 'El campo :attribute debe tener por lo menos 6 caracteres',
        'same:password' => 'Las contraseñas no coinciden',
        'filled' => 'El campo :attribute no puede estar vacío',
      ];

      $this->validate($request, $reglas, $mensajes);

      $nuevoUsuario = new User($request->all());
      $nuevoUsuario -> save();
      return redirect('signin');
    }
}
