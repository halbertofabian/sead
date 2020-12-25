
<?php
/**
 *  Desarrollador: ifixitmor
 *  Fecha de creación: 16/10/2020 11:57
 *  Desarrollado por: Softmor
 *  Software de Morelos SA.DE.CV 
 *  Sitio web: https://softmor.com
 *  Facebook:  https://www.facebook.com/softmor/
 *  Instagram: http://instagram.com/softmormx
 *  Twitter: https://twitter.com/softmormx
 */
require_once DOCUMENT_ROOT . "app/modulos/conexion/conexion.php";

class UsuariosModelo
{
    public static function mdlAgregarUsuarios($usr)
    {
        try {
            //code...
            $sql = "INSERT INTO tbl_usuarios_usr (usr_matricula,usr_nombre,usr_app,usr_apm,usr_telefono,usr_calle,usr_ne,usr_ni,usr_cp,usr_colonia,usr_estado,usr_municipio,usr_correo,usr_clave,usr_rol,usr_usuario_registro,usr_fecha_registro,usr_id_sucursal) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr['usr_matricula']);
            $pps->bindValue(2, $usr['usr_nombre']);
            $pps->bindValue(3, $usr['usr_app']);
            $pps->bindValue(4, $usr['usr_apm']);
            $pps->bindValue(5, $usr['usr_telefono']);
            $pps->bindValue(6, $usr['usr_calle']);
            $pps->bindValue(7, $usr['usr_ne']);
            $pps->bindValue(8, $usr['usr_ni']);
            $pps->bindValue(9, $usr['usr_cp']);
            $pps->bindValue(10, $usr['usr_colonia']);
            $pps->bindValue(11, $usr['usr_estado']);
            $pps->bindValue(12, $usr['usr_municipio']);
            $pps->bindValue(13, $usr['usr_correo']);
            $pps->bindValue(14, $usr['usr_clave']);
            $pps->bindValue(15, $usr['usr_rol']);
            $pps->bindValue(16, $usr['usr_usuario_registro']);
            $pps->bindValue(17, $usr['usr_fecha_registro']);
            $pps->bindValue(18, SUCURSAL_ID);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlAgregarUsuariosImport($usr)
    {
        try {
            //code...
            $sql = "UPDATE  tbl_usuarios_usr SET usr_nombre =?,usr_app = ?,usr_apm = ?,usr_telefono = ?,usr_calle = ?,usr_ne = ?,usr_ni = ?,usr_cp = ?,usr_colonia = ?,usr_estado = ?,usr_municipio =?,usr_correo = ?,usr_clave = ? WHERE usr_id ?";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr['usr_nombre']);
            $pps->bindValue(2, $usr['usr_app']);
            $pps->bindValue(3, $usr['usr_apm']);
            $pps->bindValue(4, $usr['usr_telefono']);
            $pps->bindValue(5, $usr['usr_calle']);
            $pps->bindValue(6, $usr['usr_ne']);
            $pps->bindValue(7, $usr['usr_ni']);
            $pps->bindValue(8, $usr['usr_cp']);
            $pps->bindValue(9, $usr['usr_colonia']);
            $pps->bindValue(10, $usr['usr_estado']);
            $pps->bindValue(11, $usr['usr_municipio']);
            $pps->bindValue(12, $usr['usr_correo']);
            $pps->bindValue(13, $usr['usr_clave']);
            $pps->bindValue(14, $usr['usr_id']);

            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlActualizarUsuarios($usr)
    {
        try {
            $sql = "UPDATE  tbl_usuarios_usr SET usr_nombre =?,usr_app = ?,usr_apm = ?,usr_telefono = ?,usr_calle = ?,usr_ne = ?,usr_ni = ?,usr_cp = ?,usr_colonia = ?,usr_estado = ?,usr_municipio =?,usr_correo = ?,usr_clave = ? WHERE usr_id = ?";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr['usr_nombre']);
            $pps->bindValue(2, $usr['usr_app']);
            $pps->bindValue(3, $usr['usr_apm']);
            $pps->bindValue(4, $usr['usr_telefono']);
            $pps->bindValue(5, $usr['usr_calle']);
            $pps->bindValue(6, $usr['usr_ne']);
            $pps->bindValue(7, $usr['usr_ni']);
            $pps->bindValue(8, $usr['usr_cp']);
            $pps->bindValue(9, $usr['usr_colonia']);
            $pps->bindValue(10, $usr['usr_estado']);
            $pps->bindValue(11, $usr['usr_municipio']);
            $pps->bindValue(12, $usr['usr_correo']);
            $pps->bindValue(13, $usr['usr_clave']);
            $pps->bindValue(14, $usr['usr_id']);

            $pps->execute();
            return $pps->rowCount()>0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlMostrarUsuariosEmail($usr_correo)
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_correo = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr_correo);
            $pps->execute();
            return $pps->fetch();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlMostrarUsuarios($usr_id = "", $usr_rol = "", $usr_searh = false, $usr_matricula = "")
    {
        try {
            //code...
            if ($usr_searh && $usr_matricula != "") {
                $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_matricula = ? AND usr_id_sucursal = ? ";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, $usr_matricula);
                $pps->bindValue(2, SUCURSAL_ID);
                $pps->execute();
                return $pps->fetch();
            } else if ($usr_searh && $usr_id == "" && $usr_rol != "") {
                $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_rol = ? AND usr_id_sucursal = ? ORDER BY usr_id DESC LIMIT 1";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, $usr_rol);
                $pps->bindValue(2, SUCURSAL_ID);
                $pps->execute();
                return $pps->fetch();
            } else if ($usr_id == "" && $usr_rol != "") {
                $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_rol = ? AND usr_id_sucursal = ? ORDER BY usr_id DESC ";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, $usr_rol);
                $pps->bindValue(2, SUCURSAL_ID);
                $pps->execute();
                return $pps->fetchAll();
            } else if ($usr_id == "" && $usr_rol == "") {
                $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_rol != 'Alumno' AND usr_id_sucursal = ? ORDER BY usr_id DESC ";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, SUCURSAL_ID);

                $pps->execute();
                return $pps->fetchAll();
            } else {
                $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_id = ? AND usr_id_sucursal = ? ";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, $usr_id);
                $pps->bindValue(2, SUCURSAL_ID);
                $pps->execute();
                return $pps->fetch();
            }
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlConsultarUltimoUsuario()
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_usuarios_usr ORDER BY usr_id DESC ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->execute();
            return $pps->fetch();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlEliminarUsuarios($urs_id)
    {
        try {
            $sql = "DELETE FROM  tbl_usuarios_usr  WHERE usr_id = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $urs_id);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlActivarUsuarioViaEmail($usr)
    {
        try {
            //code...
            $sql = "UPDATE tbl_usuarios_usr SET usr_token = ? WHERE usr_correo = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr['usr_token']);
            $pps->bindValue(2, $usr['usr_correo']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        }
    }

    public static function mdlRecuprarClaveUsuarioViaEmail($usr)
    {
        try {
            //code...
            $sql = "UPDATE tbl_usuarios_usr SET usr_token = ?, usr_recuperar_clave = '1' WHERE usr_correo = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr['usr_token']);
            $pps->bindValue(2, $usr['usr_correo']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        }
    }

    public static function mdlConsultarTokenAlumno($usr_token)
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_usuarios_usr WHERE usr_token = ? AND usr_recuperar_clave = 1 ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr_token);
            $pps->execute();
            return $pps->fetch();
        } catch (PDOException $e) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlCambiarClave($usr)
    {
        try {
            //code...
            $sql = "UPDATE tbl_usuarios_usr SET usr_clave =? , usr_token = '', usr_recuperar_clave = '0' WHERE usr_id = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $usr['usr_clave']);
            $pps->bindValue(2, $usr['usr_id']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $e) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
}
