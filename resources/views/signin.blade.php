@extends('layouts/main')
@section('contenido')
  <div class="container">
        <section class="registro">
          <article class="login">
            <h2>Iniciar Sesión</h2>
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
                  <label for="inputEmail4">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" value="<?= isset($errores["email"])? "": persistir("email") ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control"  placeholder="Password" name="password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1" name="recordar" value="recordar">Recúerdame</label>
                  <button type="submit" class="btn btn-primary">Log In</button>
                </div>
                <div class="form-group col-md-6">
                  <a href="contraseña">Olvidé mi contraseña</a>
                </div>
              </div>
            </form>
          </article>
          <article class="register">
            <h2>¿Sos nuevo en "The Gourmet Market?"</h2>
            <form method="get" action="register.php">
              <button class="button" style="vertical-align:middle"><span>Crear una cuenta </span></button>
            </form>
          </article>
        </section>
      </div>
@endsection
