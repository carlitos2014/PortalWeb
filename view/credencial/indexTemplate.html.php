
<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>

<?php $id = credencialTableClass::ID ?>
<?php $nam = credencialTableClass::NOMBRE ?>
<?php $cre_at = credencialTableClass::CREATED_AT ?>
<?php $up_at = credencialTableClass::UPDATED_AT ?>
<?php $del_at = credencialTableClass::DELETED_AT ?>

<div class="container container-fluid">

  <div class="page-header">
    <h1><i class="glyphicon glyphicon-credit-card"></i><?php echo i18n::__('credential') ?></h1>
  </div>
  <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('credencial', 'deleteSelect') ?>" method="POST">

    <table class="table">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('name') ?></th>
          <th><?php echo i18n::__('creationDate') ?></th>
          <th><?php echo i18n::__('updateDate') ?></th>
          <th><?php echo i18n::__('deleteDate') ?></th>
          <th><?php echo i18n::__('actions') ?></th>
        </tr>
      </thead>

      <tbody>
<?php foreach ($objCredencial as $credencial): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $credencial->$id ?>"></td>
            <td><?php echo $credencial->$id ?></td>
            <td><?php echo $credencial->$nam ?></td>
            <td><?php echo $credencial->$cre_at ?></td>
            <td><?php echo $credencial->$up_at ?></td>
            <td><?php echo $credencial->$del_at ?></td>
            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="datos de usuario"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'edit', array(credencialTableClass::ID => $credencial->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="edicion de usuario"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $credencial->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar usuario"></i></a>
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
    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Nueva Bitacora" data-content="creacion de bitacora"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-credit-card"></i></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar seleccion" data-content="borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
  </div>

</div>