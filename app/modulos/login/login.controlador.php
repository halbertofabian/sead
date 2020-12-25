<?php
class LoginControlador
{
  public static function ctrIniciarSesion()
  {
    if (isset($_POST['btnIniciarSesion'])) {

      // Limpiar cadenas
      $_POST['usr_correo'] = trim($_POST['usr_correo']);
      $_POST['usr_correo'] = strtolower($_POST['usr_correo']);

      // Validar

      // Procesar

      $usr = LoginModelo::mdlIniciarSesion($_POST['usr_correo']);

      if (!$usr  || !password_verify($_POST['usr_clave'], $usr['usr_clave'])) {
        echo '
              <script>                                                                
                toastr.error("Usuario o contraseña incorrecto, intenta de nuevo", "Error")
              </script>';
        return;
      }

      $_SESSION['session'] = true;
      $_SESSION['session_usr'] = $usr;

      echo
        '
                    <script>
                        window.location.href = "./bienvenido";
                    </script>';


      // Ejecutar


    }
  }
}
