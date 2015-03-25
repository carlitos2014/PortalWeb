<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $usu = usuarioTableClass::USER ?>
<?php $id = usuarioTableClass::ID ?>
<?php $last = usuarioTableClass::LAST_LOGIN_AT ?>




<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="glyphicon glyphicon-user"></i><?php echo i18n::__('userManagement') ?></h1>
  </div>




  <form id="" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('user') ?></th>
          <th><?php echo i18n::__('lastLogin') ?></th>
          <th><?php echo i18n::__('actions') ?></th>
        </tr>
      </thead>
      <tbody >
<?php foreach ($objUsuarios as $usuario): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>" class="chk"></td>
            <td><?php echo $usuario->$id ?></td>
            <td><?php echo $usuario->$usu ?></td>
            <td><?php echo $usuario->$last ?></td>

            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="Datos de EstadoPqrsf"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(usuarioTableClass::ID => $usuario->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion de EstadoPqrsf"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar EstadoPqrsf"></i></a>
            </td>
          </tr>
<?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nuevo EstadoPqrsf" data-content="Creacion de EstadoPqrsf"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i></a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('estadoPqrsf', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar Seleccion" data-content="Borrar Seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    
  </div>


</div>
