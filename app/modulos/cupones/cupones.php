

<?php

if (isset($rutas[1]) && $rutas[1] == "new") :
    cargarComponente('breadcrumb', '', 'Nuevo cupón');
?>

    <div class="container">
        <form method="post" id="formAgregarCupones">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="cps_nombre">Nombre del cupón</label>
                        <input type="text" name="cps_nombre" id="cps_nombre" class="form-control" placeholder="Nombre del cupón" required>

                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="cps_codigo">Código</label>
                        <input type="text" name="cps_codigo" id="cps_codigo" class="form-control" placeholder="Introduce aquí el código" required>
                    </div>
                    <div class="form-group">
                        <label for="cps_asociado">Asociar a vendedor:</label>
                        <select name="cps_asociado" class="form-control" id="cps_asociado">
                            <option value="sin_vendedor">Sin asociar</option>
                            <!-- <option value="all_productos">Todos los productos</option> -->
                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <h3 for="">Esté cupón se aplicará a:</h3>
                        <input type="radio" required value="new_student" name="cps_aply" class="cps_aply" id="cps_aply_1"> <label for="cps_aply_1" class="text-dark">Alumnos nuevos</label> <br>
                        <input type="radio" required value="all_student" name="cps_aply" class="cps_aply" id="cps_aply_2"> <label for="cps_aply_2" class="text-dark">Todos los alumnos</label> <br>
                        <input type="radio" required value="by_email" name="cps_aply" class="cps_aply_ok" id="cps_aply_3"> <label for="cps_aply_3" class="text-dark">Por correo</label><br>
                        <input type="text" name="cps_aply_email" id="cps_aply_email" class="form-control d-none" placeholder="Introduce aquí el correo Ejamplo: a_1@correo.com,a2@correo.com ">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="cps_tope">Tope de cupones</label>
                        <input type="number" name="cps_tope" id="cps_tope" class="form-control" placeholder="Dejar en blanco si serán ilimitados">

                    </div>

                    <div class="alert alert-dark" role="alert">
                        <strong>Programar actividad</strong>
                    </div>
                    <div class="form-group">
                        <label for="cps_fecha_inicio">Inicio</label>
                        <input type="datetime-local" name="cps_fecha_inicio" id="cps_fecha_inicio" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="cps_fecha_fin">Fin</label>
                        <input type="datetime-local" name="cps_fecha_fin" id="cps_fecha_fin" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-dark" role="alert">
                        <strong>Restricciones sobre el paquete</strong>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Descuento % </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Inscripción
                                </td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Dejar en blanco en caso de no aplicar" name="cps_r_inscripcion" id="cps_r_inscripcion">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Exámen
                                </td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Dejar en blanco en caso de no aplicar" name="cps_r_examen" id="cps_r_examen">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Guía
                                </td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Dejar en blanco en caso de no aplicar" name="cps_r_guia" id="cps_r_guia">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Incorporación
                                </td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Dejar en blanco en caso de no aplicar" name="cps_r_incorporacion" id="cps_r_incorporacion">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Certificado
                                </td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Dejar en blanco en caso de no aplicar" name="cps_r_certificado" id="cps_r_certificado">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Semanas
                                </td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Dejar en blanco en caso de no aplicar" name="cps_r_semanas" id="cps_r_semanas">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="cps_sku_producto">Aplicar al paquete:</label>
                        <select name="cps_sku_producto" class="form-control" id="cps_sku_producto">
                            <option value="all_paquetes">Todos los paquetes</option>
                            <!-- <option value="all_productos">Todos los productos</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <button type="submit" class="btn btn-primary btn-block btnCrearCupon" name="btnCrearCupon" id="btnCrearCupon">Crear cupón</button>
                    </div>
                </div>

            </div>
            <?php

            $crearCupon = new CuponesControlador();
            $crearCupon->ctrAgregarCupones();

            ?>
        </form>
    </div>
<?php else :
    cargarComponente('breadcrumb', '', 'Listar cupones');
?>
    <div class="container">
        <div class="row">
            <div class="col-12 table-responsive ">
                <table class="table tablas table-bordered tablaPagosAlumno table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Vendedor Asociado</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha Fin</th>
                            <th>Tope</th>
                            <th>Usuario registro</th>
                            <th>Fecha registro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $cupones = CuponesModelo::mdlMostrarCupones();
                        foreach ($cupones as $key => $cps) :
                        ?>
                            <tr>
                                <td><?php echo $cps['cps_codigo'] ?></td>
                                <td><?php echo $cps['cps_nombre'] ?></td>
                                <td><?php echo $cps['cps_asociado'] ?></td>
                                <td><?php echo $cps['cps_fecha_inicio'] ?></td>
                                <td><?php echo $cps['cps_fecha_fin'] ?></td>
                                <td><?php echo $cps['cps_tope'] ?></td>
                                <td><?php echo $cps['cps_usuario_registro'] ?></td>
                                <td><?php echo $cps['cps_fecha_registro'] ?></td>
                                <td></td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>