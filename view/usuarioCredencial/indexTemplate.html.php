
<?php

use mvc\routing\routingClass as routing ?>
<?php $usu = usuarioCredencialTableClass::USUARIO_ID ?>
<?php $id = usuarioCredencialTableClass::ID ?>
<div class="container container-fluid">
    <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'deleteSelect') ?>" method="POST">

        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="chkAll"></th>
                    <th>ID</th>
                    <th>Usuario ID</th>
                    <th>Credencial ID</th>
                    <th>Fecha de Creacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
<?php foreach ($objUsuarioCredencial as $UsuarioCredencial): ?>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="<?php echo $UsuarioCredencial->$id ?>"></td>
                        <td><?php echo $UsuarioCredencial->$id ?></td>
                        <td><?php echo $UsuarioCredencial->$usu ?></td>
                        <td><?php echo $UsuarioCredencial->credencial_id ?></td>
                        <td><?php echo $UsuarioCredencial->created_at ?></td>

                        <td>
                            <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
                            <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'edit', array(usuarioCredencialTableClass::ID => $UsuarioCredencial->$id)) ?>" class="btn btn-warning">Editar</a>
                            <a href="#" onclick="confirmarEliminar(<?php echo $UsuarioCredencial->$id ?>)" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
<?php endforeach ?>
            </tbody>
        </table>
    </form>
    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'delete') ?>" method="POST">
        <input type="hidden" id="idDelete" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true) ?>">
    </form>
    <div style="margin-bottom: 10px; margin-top: 30px" align="center">
        <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-success ">Inicio</a>  
        <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'insert') ?>" class="btn btn-success">Nuevo</a>
        <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
        <a href="#" class="btn btn-danger " onclick="borrarSeleccion()">Borrar Seleccion</a>
    </div>


</div>