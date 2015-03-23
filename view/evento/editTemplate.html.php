<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $usuario = usuarioTableClass::USER ?>
    <div class="page-header">
  <h1><i class="glyphicon glyphicon-pencil"></i><i class="glyphicon glyphicon-user"></i>Edicion de Evento</h1>
</div>
    
 <?php view::includePartial('evento/formUser', array('objEvento' => $objEvento,'objCategoria' => $objCategoria,'objUsuario' => $objUsuario)) ?>