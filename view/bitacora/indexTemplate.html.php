<<<<<<< HEAD

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
=======
<?php

use mvc\routing\routingClass as routing ?>
<?php $id = bitacoraBaseTableClass::ID ?>





<center> <table class="table">

        <tr>
            <th>ID</th>
            <th>Creado</th>
            <th>ID de usuario</th>
            <th>Accion</th>
            <th>Tabla</th>
            <th>Registro</th>
            <th>Observacion</th>
>>>>>>> c3a909c6d4ce4ccf630c4927984f85e5be0a48b9


            <th>Accion</th>
        </tr>
<<<<<<< HEAD
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



=======
        <?php foreach ($objBitacora as $value): ?>
            <tr>
                <td>
                    <?php echo $value->id ?>
                </td>
                <td>
                    <?php echo $value->created_at ?>
                </td>

                <td>
                    <?php echo $value->usuario_id ?>
                </td>

                <td>
                    <?php echo $value->accion ?>
                </td>

                <td>
                    <?php echo $value->observacion ?>
                </td>

                <td>
                    <?php echo $value->tabla ?>
                </td>

                <td>
                    <?php echo $value->registro ?>
                </td>



                <td><a href="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'edit', array(bitacoraBaseTableClass::ID => $key->$id)) ?>"><input type="button" value="Modificar" readonly=""></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button type="button" class="btn btn-success" ><a href="web/index.php/usuario/insert">Nuevo</a></button>
</center>
>>>>>>> c3a909c6d4ce4ccf630c4927984f85e5be0a48b9
