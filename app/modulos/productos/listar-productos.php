<?php

$clas_d_none = "d-none";
$icon = '<i class="fas fa-plus"></i>';

$productos = ProductosModelo::mdlMostrarProductosActivos();


?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-default float-right btnDisplayProductos" data-display="<?php echo $clas_d_none ?>"><?php echo $icon ?></button>
        </div>
    </div>

    <div class="card <?php echo $clas_d_none ?>" id="card-filtro-producto">
        <div class="card-body">
            <h4 class="card-title">Productos</h4>
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-dark mb-1" href="<?php echo HTTP_HOST . 'productos/new' ?>">Añadir nuevo <i class="fas fa-plus"></i></a>
                    <a class="btn btn-dark mb-1" href="<?php echo HTTP_HOST . 'productos/importar' ?>">Importar <i class="fas fa-file-import"></i></a>
                    <a class="btn btn-dark mb-1" href="<?php echo HTTP_HOST . 'productos/exportar' ?>">Exportar <i class="fas fa-file-download"></i></a>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12 col-md-2">

                    <p> <strong><a href="">Mostrar todos (9)</a></strong></p>

                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="">Filtrar por categoría</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Todas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="">Tipo de producto</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Todos</option>
                                    <option value="POS">POS</option>
                                    <option value="ONLINE">ONLINE</option>
                                    <option value="POS/ONLINE">POS / ONLINE</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="">Estado de producto</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Activos</option>
                                    <option value="">Activos</option>

                                </select>
                                <button class="btn btn-dark mt-1 float-right">Filtrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="card-text">Lista de productos</p>
            <form action="" method="post">
                <div class="table-responsive">
                    <table class="table tablas ">
                        <thead>
                            <tr>
                                <th>

                                    <input type="checkbox" name="" id="checkboxAllProducto">

                                </th>
                                <th><i class="fas fa-image"></i></th>
                                <th>Nombre</th>
                                <th>SKU</th>
                                <th>Inventario</th>
                                <th>Categorías</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach ($productos as $key => $pds) : ?>
                                <tr class="pds_content text-center" pds_id="pds_id_<?php echo $pds['pds_id_producto'] ?>" style="height: 110px;">
                                    <td><input type="checkbox" class="pds_action_product" name="pds_action_product[]" value="<?php echo $pds['pds_id_producto'] ?>"></td>
                                    <td><img src="<?php echo $pds['pds_imagen_portada'] ?>" width="50" height="50" alt="no fount"></td>
                                    <td>
                                        <a href="" class="bt btn-link"><?php echo $pds['pds_nombre'] ?></a>
                                        <div class="d-none pds_id_move" id="pds_id_<?php echo $pds['pds_id_producto'] ?>">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="" style="font-size: 11px; color: #737B82; ">ID: <?php echo $pds['pds_id_producto']  ?></p>
                                                </div>
                                                <div class="col-12 btn-group">
                                                    <button class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-default"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-default">Editar rapido</button>


                                                </div>
                                            </div>

                                        </div>

                                    </td>
                                    <td><?php echo $pds['pds_sku'] ?></td>
                                    <td>
                                        <?php
                                        if ($pds['pds_stok'] <= $pds['pds_stok_min'] || $pds['pds_stok'] == 0) :

                                            echo '<strong class="text-danger">' . $pds['pds_stok'] . '</strong>';

                                        else :
                                            echo '<strong class="text-success">' . $pds['pds_stok'] . '</strong>';
                                        endif;
                                        ?>

                                    </td>
                                    <td><?php echo $pds['pds_categoria'] ?></td>
                                    <td>
                                        <?php
                                        if ($pds['pds_fecha_modificacion'] == '0000-00-00 00:00:00') :
                                            echo 'Creado el: ' . $pds['pds_fecha_creacion']  . '<br> <strong class="text-warning">' . $pds['pds_usaurio_registro'] . '</strong>';
                                        else :
                                            echo 'Ultima modificación el: ' . $pds['pds_fecha_modificacion'] . '<br> <strong class="text-warning">' . $pds['pds_usuario_modifico'] . '</strong>';

                                        endif;
                                        ?>

                                    </td>

                                </tr>
                            <?php endforeach; ?>
                            
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-sm  mt-1" type="submit"><i class="fa fa-trash"></i> Borrar elementos</button>
                                </div>
                            </div>
                            <hr>

                        </tbody>
                    </table>

                </div>
            </form>
        </div>
    </div>
</div>