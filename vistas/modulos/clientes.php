<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Administración de clientes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Clientes</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-user-plus"></i> Ingresar clentes
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form action="" method="POST">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ingreso de clientes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- primer final -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
                    </div>
                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cédula" maxlength="10" required>
                  </div>
                  <!-- Segunda fila -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="nombres" id="nombres" placeholder="Ingrese el nombre" class="form-control" required>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese el apellido" class="form-control" required>
                  </div>
                  <!-- tercera fila -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <select name="genero" id="genero" class="form-control" required>
                      <option value="0">Seleccione el genero</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                    </select>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="f_nacimiento" id="f_nacimiento" class="form-control" required>
                  </div>
                  <!-- cuarta fila -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese el correo" required>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                    </div>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese el teléfono" required>
                  </div>
                  <!-- quinta fila -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese la dirección" required>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="card-tools">

        </div>
      </div>
      <div class="card-body">
        Página para la administación de clientes
      </div>

    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->|