<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Punto | de venta</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">
</head>
<?php
if (isset($_SESSION["login"]) && $_SESSION['login'] == 'activa') {
  echo '<body class="hold-transition sidebar-mini">
  <div class="wrapper">';

  include "modulos/nav.php";
  include "modulos/sidebar.php";
  //rutas del sitio
  if (isset($_GET["enlace"])) {
    if (
      $_GET["enlace"] == "inicio" ||
      $_GET["enlace"] == "productos" ||
      $_GET["enlace"] == "clientes"
    ) {
      include "modulos/" . $_GET["enlace"] . ".php";
    }
  } else {
    include "modulos/inicio.php";
  }

  include "modulos/footer.php";
  echo '</div>';
} else {
  echo '<body class="hold-transition login-page">';
  include "modulos/login.php";
}

?>



<!-- ./wrapper -->
<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
</body>

</html>