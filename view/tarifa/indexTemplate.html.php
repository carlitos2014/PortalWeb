<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $id = tarifaTableClass::ID ?>
<?php $des = tarifaTableClass::DESCRIPCION ?>
<?php $value = tarifaTableClass::VALOR ?>




<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="glyphicon glyphicon-usd"></i><i class="glyphicon glyphicon-calendar"></i><?php echo i18n::__('rates') ?></h1>
  </div>




  <form id="" action="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('description') ?></th>
          <th><?php echo i18n::__('cost') ?></th>
          <th><?php echo i18n::__('actions') ?></th>
        </tr>
      </thead>
      <tbody >
<?php foreach ($objTarifa as $tarifa): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $tarifa->$id ?>" class="chk"></td>
            <td><?php echo $tarifa->$id ?></td>
            <td><?php echo $tarifa->$des ?></td>
            <td><?php echo $tarifa->$value ?></td>

            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="Datos de Tarifa"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'edit', array(tarifaTableClass::ID => $tarifa->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion De Tarifa"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $tarifa->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Tarifa"></i></a>
            </td>
          </tr>
<?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nueva Tarifa" data-content="Creacion De Tarifa"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-usd"></i></a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar Seleccion" data-content="Borrar Seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    
  </div>


</div>
