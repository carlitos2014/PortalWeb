<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $usuario = usuarioTableClass::USER ?>
    <div class="page-header">
  <h1><i class="glyphicon glyphicon-pencil"></i><i class="glyphicon glyphicon-user"></i>Edicion de Usuario</h1>
</div>
    
 <?php view::includePartial('usuario/formUser', array('objUsuarios' => $objUsuarios, 'usuario' => $usuario,'datos'=>$datos,'objLocalidad'=>$objLocalidad,'objTipoDocumento'=>$objTipoDocumento,'objOrganizacion'=>$objOrganizacion)) ?>