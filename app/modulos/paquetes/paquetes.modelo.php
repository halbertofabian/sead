
<?php
/**
 *  Desarrollador: ifixitmor
 *  Fecha de creación: 27/11/2020 01:39
 *  Desarrollado por: Softmor
 *  Software de Morelos SA.DE.CV 
 *  Sitio web: https://softmor.com
 *  Facebook:  https://www.facebook.com/softmor/
 *  Instagram: http://instagram.com/softmormx
 *  Twitter: https://twitter.com/softmormx
 */
require_once DOCUMENT_ROOT . "app/modulos/conexion/conexion.php";

class PaquetesModelo
{
    public static function mdlAgregarPaquetes($pqt)
    {
        try {
            //code...
            $sql = "INSERT INTO tbl_paquete_pqt (pqt_sku,pqt_nombre,pqt_modalidad,pqt_duracion,pqt_descripcion,pqt_costo,pqt_usuario_registro,pqt_fecha_registro,pqt_id_sucursal) VALUES(?,?,?,?,?,?,?,?,?)";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $pqt['pqt_sku']);
            $pps->bindValue(2, $pqt['pqt_nombre']);
            $pps->bindValue(3, $pqt['pqt_modalidad']);
            $pps->bindValue(4, $pqt['pqt_duracion']);
            $pps->bindValue(5, $pqt['pqt_descripcion']);
            $pps->bindValue(6, $pqt['pqt_costo']);
            $pps->bindValue(7, $_SESSION['session_usr']['usr_nombre']);
            $pps->bindValue(8, FECHA);
            $pps->bindValue(9, SUCURSAL_ID);

            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlActualizarPaquetes()
    {
        try {
            //code...
            $sql = "";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);

            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlMostrarPaquetes($pqt_sku = "")
    {
        try {
            //code...
            if ($pqt_sku == "") {
                $sql = "SELECT * FROM tbl_paquete_pqt WHERE pqt_estado_actividad = 1 AND pqt_id_sucursal = ? ";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, SUCURSAL_ID);
                $pps->execute();
                return $pps->fetchAll();
            } elseif ($pqt_sku != "") {
                $sql = "SELECT * FROM tbl_paquete_pqt WHERE pqt_estado_actividad = 1 AND pqt_id_sucursal = ? AND pqt_sku = ? ";
                $con = Conexion::conectar();
                $pps = $con->prepare($sql);
                $pps->bindValue(1, SUCURSAL_ID);
                $pps->bindValue(2, $pqt_sku);
                $pps->execute();
                return $pps->fetch();
            }
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlEliminarPaquetes()
    {
        try {
            //code...
            $sql = "";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);

            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
}
