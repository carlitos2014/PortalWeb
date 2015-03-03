<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php $eventId = recaudoEconomicoTableClass::EVENTO_ID ?>
<?php $id = recaudoEconomicoTableClass::ID ?>
<?php $user_id = recaudoEconomicoTableClass::USUARIO_ID ?>
<?php $observation = recaudoEconomicoTableClass::OBSERVACION ?>
<?php $rateId = recaudoEconomicoTableClass::TARIFA_ID ?>
<?php $partialPayment = recaudoEconomicoTableClass::VALOR_PARCIAL ?>
<?php $totalPayment = recaudoEconomicoTableClass::VALOR_TOTAL ?>


<div class="container container-fluid">

  <div class="page-header">
    <h1><i class="glyphicon glyphicon-upload"></i><i class="glyphicon glyphicon-euro"></i><i class="glyphicon glyphicon-download"></i>&nbsp;<?php echo i18n::__('EconomicManagement') ?></h1>
  </div>

  <form id="" action="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'deleteSelect') ?>" method="POST">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id') ?></th>
          <th><?php echo i18n::__('eventId') ?></th>
          <th><?php echo i18n::__('user_id') ?></th>
          <th><?php echo i18n::__('observation') ?></th>
          <th><?php echo i18n::__('rateId') ?></th>
          <th><?php echo i18n::__('partialPayment') ?></th>
          <th><?php echo i18n::__('totalPayment') ?></th>
        </tr>
      </thead>
      <tbody >
        <?php foreach ($objRecaudoEconomico as $recaudoEconomico): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $recaudoEconomico->$id ?>" class="chk"></td>
            <td><?php echo $recaudoEconomico->$id ?></td>
            <td><?php echo $recaudoEconomico->$eventId ?></td>
            <td><?php echo $recaudoEconomico->$user_id ?></td>
            <td><?php echo $recaudoEconomico->$observation ?></td>
            <td><?php echo $recaudoEconomico->$rateId ?></td>
            <td><?php echo $recaudoEconomico->$partialPayment ?></td>
            <td><?php echo $recaudoEconomico->$totalPayment ?></td>
            <td>
              <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open" data-toggle="popover" title="Ver" data-content="datos de usuario"></i></a>
              <a href="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'edit', array(recaudoEconomicoTableClass::ID => $recaudoEconomico->$id)) ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="edicion de usuario"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" onclick="confirmarEliminar(<?php echo $recaudoEconomico->$id ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar usuario"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">

    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 
    <a href="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'insert') ?>" class="btn btn-success" data-toggle="popover" title="Crear Nuevo Usuario" data-content="creacion de usuario"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i></a>
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar seleccion" data-content="borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
    <!--        <a href="#" id="example" class="btn btn-primary" rel="popover" data-content="cuerpo-del-popover" data-original-title="ejemplo">Popover</a>-->
    <!--        <a href="#" class="btn btn-lg btn-danger" data-toggle="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Hover to toggle popover</a>-->
    <button type="button" class="btn btn-primary" data-toggle="popover" data-placement="top" title="Popover title" data-content="Default popover">Popover on top</button>
  </div>


</div>
