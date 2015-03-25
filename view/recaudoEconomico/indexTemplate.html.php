<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>


<?php $id=  recaudoEconomicoTableClass::ID ?>
<?php $evento_id=  recaudoEconomicoTableClass::EVENTO_ID ?>
<?php $usuario_id=  recaudoEconomicoTableClass::USUARIO_ID ?>
<?php $observacion=  recaudoEconomicoTableClass::OBSERVACION ?>
<?php $tarifa_id=  recaudoEconomicoTableClass::TARIFA_ID ?>
<?php $valor_parcial=  recaudoEconomicoTableClass::VALOR_PARCIAL ?>
<?php $valor_total=  recaudoEconomicoTableClass::VALOR_TOTAL ?>



<div class="container container-fluid">


  <div class="page-header">
    <h1><i class="fa fa-dollar"></i><?php echo i18n::__('EconomicManagement') ?></h1>
  </div>

<!--"glyphicon glyphicon-usd"-->


  <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('EconomicId') ?></th>
          <th><?php echo i18n::__('EventId') ?></th>
          <th><?php echo i18n::__('Observation') ?></th>
          <th><?php echo i18n::__('rateId') ?></th>
          <th><?php echo i18n::__('valueParcial') ?></th>
          <th><?php echo i18n::__('valueTotal') ?></th>
        </tr>
      </thead>
      <tbody >
<?php foreach ($objRecaudoEconomico as $data): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $data->$id ?>" class="chk"></td>
            <td><?php echo $data->$id ?></td>
            <td><?php echo $data->$evento_id?></td>
            <td><?php echo $data->$observacion ?></td>
            <td><?php echo $data->$tarifa_id ?></td>
            <td><?php echo $data->$valor_parcial?></td>
            <td><?php echo $data->$valor_total?></td>

            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="datos de usuario"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'edit', array(recaudoEconomicoTableClass::ID => $data->$id)) ?>"class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="edicion de usuario"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $data->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Recaudo"></i></a>
            </td>
          </tr>
<?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'delete') ?>" method="POST">
      <input type="hidden" id="idDelete" name="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'report') ?>" target="_blank" class="btn btn-warning " data-toggle="popover" title="Generar Reporte PDF" data-content="Generar Reporte PDF"><i class="glyphicon glyphicon-print"></i></a></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar seleccion" data-content="borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    
  </div>


</div>
