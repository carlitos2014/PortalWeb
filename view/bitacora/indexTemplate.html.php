
<?php

use mvc\routing\routingClass as routing ?>

<?php $id = bitacoraTableClass::ID ?>

<div class="container container-fluid">
    <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'deleteSelect') ?>" method="POST">

        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="chkAll"></th>

                    <th>ID de usuario</th>
                    <th>Accion</th>
                    <th>Tabla</th>
                    <th>Registro</th>
                    <th>Observacion</th>
                    <th>Fecha</th>



                </tr>
            </thead>
            <tbody>
<?php foreach ($objBitacora as $bitacora): ?>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="<?php echo $bitacora->$id ?>"></td>

                        <td><?php echo $bitacora->usuario_id ?></td>
                        <td><?php echo $bitacora->accion ?></td>
                        <td><?php echo $bitacora->tabla ?></td>
                        <td><?php echo $bitacora->registro ?></td>
                        <td><?php echo $bitacora->observacion ?></td>
                        <td><?php echo $bitacora->fecha ?></td>
            <!--            <td>
                                          <a href="#" class="btn btn-warning btn-xs">Ver</a>
                          <a href="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'edit', array(bitacoraTableClass::ID => $bitacora->$id)) ?>" class="btn btn-primary btn-xs">Editar</a>
                          <a href="#" onclick="confirmarEliminar(<?php echo $bitacora->$id ?>)" class="btn btn-danger btn-xs">Eliminar</a>
                        </td>-->
                    </tr>
<?php endforeach ?>
            </tbody>
        </table>
    </form>
    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'delete') ?>" method="POST">
        <input type="hidden" id="idDelete" name="<?php echo bitacoraTableClass::getNameField(bitacoraTableClass::ID, true) ?>">
    </form>
    <div style="margin-bottom: 10px; margin-top: 30px" align="center">
        <a href="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>     

    </div>


</div>