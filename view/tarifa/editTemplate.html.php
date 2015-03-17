<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $descripcion = tarifaTableClass::DESCRIPCION ?>
    <div class="page-header">
  <h1><i class="glyphicon glyphicon-pencil"></i><i class="glyphicon glyphicon-usd"></i>Edicion de Tarifa</h1>
</div>
    
 <?php view::includePartial('tarifa/updateFormUser', array('objTarifa' => $objTarifa, 'tarifa' => $descripcion)) ?>