<?php
class controladorClientes{
  //preparar daros para guardar
  public static function ctrlGuardarClientes(){
    if (
      isset($_POST['cedula_guardar']) &&
      isset($_POST['nombre_guardar']) &&
      isset($_POST['apellido_guardar']) &&
      isset($_POST['sexo_guardar']) &&
      isset($_POST['f_nacimiento_guardar']) &&
      isset($_POST['correo_guardar']) &&
      isset($_POST['telefono_guardar'])
    ) {
      $tabla = 'clientes';
      $data = array(
        'cedula' => $_POST['cedula_guardar'],
        'nombres' => $_POST['nombre_guardar'],
        'apellidos' => $_POST['apellido_guardar'],
        'sexo' => $_POST['sexo_guardar'],
        'f_nacimiento' => $_POST['f_nacimiento_guardar'],
        'correo' => $_POST['correo_guardar'],
        'telefono' => $_POST['telefono_guardar'],
        'direccion' => $_POST['direccion_guardar']
      );
      if (modeloClientes::mdlGuardarClientes($tabla, $data) == "ok") {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Datos del Cliente guardados correctamente...!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then(function(result){
                    if(result.value){
                        window.location = 'clientes'
                    }
                  })
                </script>";
      } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: '¡NO se puede guardar los datos de cliente...!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then(function(result){
                    if(result.value){
                        window.location = 'clientes'
                    }
                  })
                </script>";
      }
    }
  }

  //función para preparar datos para cargar
  public static function ctrlCargarClientes($id_clientes){
    $tabla = 'clientes';
    $res = modeloClientes::mdlCargarClientes($tabla, $id_clientes);
    return $res;
  }

  //preparar daros para modificar
  public static function ctrlModificarClientes(){
    
    if (
      isset($_POST['nombre_modificar']) &&
      isset($_POST['apellido_modificar']) &&
      isset($_POST['sexo_modificar']) &&
      isset($_POST['f_nacimiento_modificar']) &&
      isset($_POST['correo_modificar']) &&
      isset($_POST['telefono_modificar'])
    ) {
      $tabla = 'clientes';
      $data = array(
        'nombres' => $_POST['nombre_modificar'],
        'apellidos' => $_POST['apellido_modificar'],
        'sexo' => $_POST['sexo_modificar'],
        'f_nacimiento' => $_POST['f_nacimiento_modificar'],
        'correo' => $_POST['correo_modificar'],
        'telefono' => $_POST['telefono_modificar'],
        'direccion' => $_POST['direccion_modificar'],
        'id_clientes' => $_POST['id_clientes'] 
      );
      
      if (modeloClientes::mdlModificarClientes($tabla, $data) == 'ok') {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Datos del Cliente modificados correctamente...!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then(function(result){
                    if(result.value){
                        window.location = 'clientes'
                    }
                  })
                </script>";
      } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: '¡NO se puede modificar los datos de cliente...!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then(function(result){
                    if(result.value){
                        window.location = 'clientes'
                    }
                  })
                </script>";
      }
    }
  }
}
