<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $name = organizacionTableClass::NOMBRE ?>
<?php $id = organizacionTableClass::ID ?>
<?php $mail = organizacionTableClass::CORREO ?>
<?php $page = organizacionTableClass::PAGINA_WEB ?>
<?php $dir = organizacionTableClass::DIRECCION ?>
<?php $tel = organizacionTableClass::TELEFONO ?>


<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="glyphicon fa fa-group"></i>&nbsp;<?php echo i18n::__('organizations') ?></h1>
  </div>




  <form id="" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('name') ?></th>
          <th><?php echo i18n::__('adress') ?></th>
          <th><?php echo i18n::__('e-mail') ?></th>
          <th><?php echo i18n::__('phone') ?></th>
          <th><?php echo i18n::__('webPage') ?></th>
          <th><?php echo i18n::__('actions') ?></th>
        </tr>
      </thead>
      <tbody >
        <?php foreach ($objOrganizacion as $patrocinador): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $patrocinador->$id ?>" class="chk"></td>
            <td><?php echo $patrocinador->$id ?></td>
            <td><?php echo $patrocinador->$name ?></td>
            <td><?php echo $patrocinador->$dir ?></td>
            <td><?php echo $patrocinador->$mail ?></td>
            <td><?php echo $patrocinador->$tel ?></td>
            <td><?php echo $patrocinador->$page ?></td>
            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="Datos de Organizacion"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'edit', array(organizacionTableClass::ID => $patrocinador->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion de Organizacion"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Organizacion"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nueva Organizacion" data-content="Creacion de Organizacion"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon fa fa-group"></i></a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar Seleccion" data-content="Borrar Seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    
  </div>


</div>
