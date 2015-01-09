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


            <th>Accion</th>
        </tr>
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