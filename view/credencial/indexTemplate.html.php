

<?php

use mvc\routing\routingClass as routing ?>

<?php $id = credencialTableClass::ID ?>
<div class="container container-fluid">
    <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('credencial', 'deleteSelect') ?>" method="POST">

        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="chkAll"></th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Creacion</th>
                    <th>Fecha de Actualizacion</th>
                    <th>Fecha de Borrado Logico</th>
                </tr>
            </thead>
            <tbody>
<?php foreach ($objCredencial as $credencial): ?>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="<?php echo $credencial->$id ?>"></td>
                        <td><?php echo $credencial->$id ?></td>
                        <td><?php echo $credencial->nombre ?></td>
                        <td><?php echo $credencial->created_at ?></td>
                        <td><?php echo $credencial->updated_at ?></td>
                        <td><?php echo $credencial->deleted_at ?></td>
                        <td>
                            <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
                            <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'edit', array(credencialTableClass::ID => $credencial->$id)) ?>" class="btn btn-primary btn-xs">Editar</a>
                            <a href="#" onclick="confirmarEliminar(<?php echo $credencial->$id ?>)" class="btn btn-danger btn-xs">Eliminar</a>
                        </td>
                    </tr>
<?php endforeach ?>
            </tbody>
        </table>
    </form>
    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('credencial', 'delete') ?>" method="POST">
        <input type="hidden" id="idDelete" name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>">
    </form>
    <div style="margin-bottom: 10px; margin-top: 30px" align="center">
        <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-success ">Inicio</a>  
        <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'insert') ?>" class="btn btn-success ">Nuevo</a>
        <a href="#" class="btn btn-danger " onclick="borrarSeleccion()">Borrar Seleccion</a>

    </div>


</div>