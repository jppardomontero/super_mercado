<?php
class controlador_usuarios{
    public function ctrlLogin(){
        if (isset($_POST['user']) && isset($_POST['contarsenia'])){
            $user =$_POST['user'];
            $pass = $_POST['contarsenia'];
            $data = modelo_usuarios::mdllogin($user, $pass);
            if(isset($data['usuario']) && $data ['usuario'] == $_POST['user'] &&
               isset($data['contrasenia']) && $data['contrasenia'] == $_POST['contarsenia']){
                $_SESSION['login'] = 'activa'; 
                $_SESSION['cedula'] = $data['cedula'];
                $_SESSION['nombres'] = $data['nombres']." ". $data['apellidos'];
                echo "<script>
                        window.location.href='inicio';
                      </script>";
            }
            else{
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Datos erronios!",
                    
                  });
                      </script>';
            }
        }
    }
}