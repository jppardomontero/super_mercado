<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Super </b>Mercado</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">INICIO DE SESIÓN</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" id="user" placeholder="Nombre de usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-user"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name = "contarsenia" id="contrasenia" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
        <?php
        $objLogin = new controlador_usuarios ();
        $objLogin->ctrlLogin();
        ?>
      </form>

     

      <p class="mb-1">
        <a href="forgot-password.html">Olvide Contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registo Usurios</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>