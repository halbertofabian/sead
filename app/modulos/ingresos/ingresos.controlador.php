
<?php
/**
 *  Desarrollador: ifixitmor
 *  Fecha de creación: 09/11/2020 13:08
 *  Desarrollado por: Softmor
 *  Software de Morelos SA.DE.CV 
 *  Sitio web: https://softmor.com
 *  Facebook:  https://www.facebook.com/softmor/
 *  Instagram: http://instagram.com/softmormx
 *  Twitter: https://twitter.com/softmormx
 */
class IngresosControlador
{
    public function ctrAgregarIngresos()
    {
        if (isset($_POST['btnAgregarIngreso'])) {
            $_POST['igs_usuario_registro'] = $_SESSION['session_usr']['usr_nombre'];
            $_POST['igs_monto'] = str_replace(",", "", $_POST['igs_monto']);

            $crearIngreso = IngresosModelo::mdlAgregarIngresos($_POST);

            if ($crearIngreso) {
                AppControlador::msj('success', 'Muy bien', 'Ingreso registrado con exito', HTTP_HOST . 'ingresos');
            } else {
                AppControlador::msj('error', 'Error', 'Ingreso no registrado, intenta de nuevo');
            }
        }
    }
    public function ctrAgregarIngresosCaja()
    {
        if (isset($_POST['btnAgregarIngresoCaja'])) {
            $_POST['igs_usuario_registro'] = $_SESSION['session_usr']['usr_nombre'];
            $_POST['igs_monto'] = str_replace(",", "", $_POST['igs_monto']);
            $_POST['igs_concepto'] = "BANCO A CAJA";
            $_POST['igs_mp'] = "Efectivo";

            $crearGasto = GastosModelo::mdlCrearGasto(
                array(
                    'tgts_categoria' => 2,
                    'tgts_concepto' =>  $_POST['igs_concepto'],
                    'tgts_fecha_gasto' =>  $_POST['igs_fecha_registro'],
                    'tgts_cantidad' => $_POST['igs_monto'],
                    'tgts_mp' => 'Transferencia',
                    'tgts_nota' => "",
                    'tgts_usuario_registro' => $_POST['igs_usuario_registro'],
                )
            );

            if ($crearGasto) {
                $crearIngreso = IngresosModelo::mdlAgregarIngresos($_POST);

                if ($crearIngreso) {
                    AppControlador::msj('success', 'Muy bien', 'Ingreso registrado con exito', HTTP_HOST . 'ingresos');
                } else {
                    AppControlador::msj('error', 'Error', 'Error no esperado, registre un ingreso');
                }
            } else {
                AppControlador::msj('error', 'Error', 'Ingreso no registrado, intenta de nuevo');
            }
        }
    }
    public function ctrActualizarIngresos()
    {
    }
    public function ctrMostrarIngresos()
    {
    }
    public function ctrEliminarIngresos()
    {
    }
}
