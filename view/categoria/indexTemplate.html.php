<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $categoria = categoriaTableClass::NOMBRE ?>
<?php $id = categoriaTableClass::ID ?>
<?php //$last = categoriaarioTableClass::LAST_LOGIN_AT ?>




<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="glyphicon glyphicon-th-list"></i>&nbsp;<?php echo i18n::__('eventCategory') ?></h1>
  </div>




  <form id="" action="<?php echo routing::getInstance()->getUrlWeb('categoria', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('name') ?></th>
          
        </tr>
      </thead>
      <tbody >
<?php foreach ($objCategoria as $categoriadato): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $categoriadato->$id ?>" class="chk"></td>
            <td><?php echo $categoriadato->$id ?></td>
            <td><?php echo $categoriadato->$categoria ?></td>
          

            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="Datos de Categoria"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('categoria', 'edit', array(categoriaTableClass::ID => $categoriadato->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion de Categoria"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $categoriadato->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Categoria"></i></a>
            </td>
          </tr>
<?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('categoria', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo categoriaTableClass::getNameField(categoriaTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('categoria', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nueva Categoria" data-content="Creacion de Categoria"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-list"></i></a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('categoria', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar Seleccion" data-content="Borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    
  </div>


</div>
