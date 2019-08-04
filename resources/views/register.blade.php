@extends('layouts/main')
@section('contenido')
  <div class="container">
        <section class="registro">
          <article class="login text-center">
            <h2>Iniciar Sesión</h2>
            <form method="GET" action="signin.php">
              <button class="button" style="vertical-align:middle"><span>Ya tengo una cuenta</span></button>
            </form>
          </article>
          <article class="register text-center">
            <h2>REGISTRARME</h2>
            <?php if (isset($errores)) :?>
              <ul>
                <?php foreach ($errores as $key => $value):?>
                  <li><?=$value ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <form method="POST" action="" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= isset($errores["email"])? "": persistir("email") ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                  <label for="repassword">Confirmar Password</label>
                  <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>">
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>">
              </div>
              <input  type="file" name="avatar" value=""/>
              <br>
              <button type="submit" class="btn btn-primary">Crear cuenta</button>
            </form>
          </article>
        </section>

      </div>
@endsection
