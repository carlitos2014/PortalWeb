<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $name = patrocinadorTableClass::NOMBRE ?>
<?php $id = patrocinadorTableClass::ID ?>
<?php $mail = patrocinadorTableClass::CORREO ?>

<?php $dir = patrocinadorTableClass::DIRECCION ?>
<?php $tel = patrocinadorTableClass::TELEFONO ?>




<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="glyphicon glyphicon-euro"></i>&nbsp;<?php echo i18n::__('partner') ?></h1>
  </div>




  <form id="" action="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('name') ?></th>
          <th><?php echo i18n::__('adress') ?></th>
          <th><?php echo i18n::__('e-mail') ?></th>
          <th><?php echo i18n::__('phone') ?></th>

          <th><?php echo i18n::__('actions') ?></th>
        </tr>
      </thead>
      <tbody >
        <?php foreach ($objPatrocinador as $patrocinador): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $patrocinador->$id ?>" class="chk"></td>
            <td><?php echo $patrocinador->$id ?></td>
            <td><?php echo $patrocinador->$name ?></td>
            <td><?php echo $patrocinador->$dir ?></td>
            <td><?php echo $patrocinador->$mail ?></td>
            <td><?php echo $patrocinador->$tel ?></td>
            

            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="datos de usuario"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'edit', array(patrocinadorTableClass::ID => $patrocinador->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="edicion de usuario"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $patrocinador->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar usuario"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nuevo Usuario" data-content="creacion de usuario"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i></a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar seleccion" data-content="borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    
  </div>


</div>
