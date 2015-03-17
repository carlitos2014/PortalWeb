<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $name = tipoDocumentoTableClass::NOMBRE?>
    <div class="page-header">
  <h1><i class="glyphicon glyphicon-pencil"></i><i class="glyphicon glyphicon-credit-card"></i>Edicion de Documento</h1>
</div>
    
 <?php view::includePartial('tipoDocumento/updateFormUser', array('objDocumento' => $objDocumento, 'tipoDocumento' => $name)) ?>