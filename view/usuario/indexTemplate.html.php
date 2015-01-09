
<?php

use mvc\routing\routingClass as routing ?>
<?php $id = usuarioBaseTableClass::ID ?>



<body>

    <table class="table">

        <tr>
            <th>Indice</th>
            <th>Nombre de usuario</th>
            <th>Activo</th>
            <th>Ultimo Ingreso</th>
<!--        
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Borrado</th>-->


            <th>Accion</th>
        </tr>
        <?php foreach ($objUsuarios as $row): ?>
            <tr>
                <td>
                    <?php echo $row->id ?>
                </td>
                <td>
                    <?php echo $row->user_name ?>
                </td>



                <td>
                    <?php echo $row->actived ?>
                </td>
                <td>
                    <?php echo $row->last_login_at ?>
                </td>

                <td>
                    <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(usuarioBaseTableClass::ID => $row -> $id)) ?>'">Modificar</button>
                    <button type="button" class="btn btn-danger"   onclick="location.href = '<?php echo routing::getInstance()->getUrlWeb('usuario', 'delete', array(usuarioBaseTableClass::ID => $row -> $id)) ?>'">Eliminar</button>

                </td>
               



    <!--                <td>
                <?php //echo $row->password ?>
                        </td>-->

        <!--                <td>
                <?php //echo $row->created_at ?>
                        </td>-->

        <!--                <td>
                <?php //echo $value->updated_at ?>
        </td>-->
                <!--                
                                <td>
                <?php //echo $value->deleted_at ?>
                                </td>-->

            </tr>
        <?php endforeach; ?>



    </table>

<center><button type="button" class="btn btn-success" onclick="location.href = 'http://127.0.0.1/PortalWeb/web/index.php/usuario/insert'">Nuevo</button><center>

        </body>



