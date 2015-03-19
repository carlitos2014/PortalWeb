<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $id = eventoTableClass::ID ?>
<?php $nombre = eventoTableClass::NOMBRE ?>
<?php $start_date = eventoTableClass::FECHA_INICIAL_EVENTO ?>
<?php $finish_date = eventoTableClass::FECHA_FINAL_EVENTO ?>
<?php $cost = eventoTableClass::COSTO ?>
<?php $category_ID = eventoTableClass::CATEGORIA_ID ?>
<?php $user_ID = eventoTableClass::USUARIO_ID ?>






<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="glyphicon  glyphicon-eye-open"></i><i class="glyphicon glyphicon-music"></i>&nbsp;<?php echo i18n::__('events') ?></h1>
  </div>




  <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('eventName') ?></th>
          <th><?php echo i18n::__('start_Date') ?></th>
          <th><?php echo i18n::__('finish_Date') ?></th>
          <th><?php echo i18n::__('cost') ?></th>
          <th><?php echo i18n::__('categoryID') ?></th>
          <th><?php echo i18n::__('user_id') ?></th>
          <th><?php echo i18n::__('actions') ?></th>
        </tr>
      </thead>
      <tbody >
        <?php foreach ($objEvento as $evento): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $evento->$id ?>" class="chk"></td>
            <td><?php echo $evento->$id ?></td>
            <td><?php echo $evento->$nombre ?></td>
            <td><?php echo $evento->$start_date ?></td>
            <td><?php echo $evento->$finish_date ?></td>
            <td><?php echo $evento->$cost ?></td>
            <td><?php echo $evento->$category_ID ?></td>
            <td><?php echo $evento->$user_ID ?></td>
            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="datos de usuario"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('evento', 'edit', array(eventoTableClass::ID => $evento->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="edicion de usuario"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $evento->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar usuario"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('evento', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nuevo Usuario" data-content="creacion de usuario"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar seleccion" data-content="borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    <!--        <a href="#" id="example" class="btn btn-primary" rel="popover" data-content="cuerpo-del-popover" data-original-title="ejemplo">Popover</a>-->
    <!--        <a href="#" class="btn btn-lg btn-danger" data-toggle="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Hover to toggle popover</a>-->
    <button type="button" class="btn btn-primary" data-toggle="popover" data-placement="top" title="Popover title" data-content="Default popover">Popover on top</button>
  </div>


</div>
