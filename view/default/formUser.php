<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php $idUsuario = usuarioTableClass::ID ?>
<?php $password = usuarioTableClass::PASSWORD ?>
<form method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuarios)) ? 'update' : 'create' )) ?>">
  <?php if(isset($objUsuarios) == true): ?>
  <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID,true) ?>" value="<?php echo $objUsuarios[0]->$idUsuario ?>" type="hidden">
  <?php endif ?>
  <?php echo i18n::__('user') ?>: <input value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$usuario : '') ?>" type="text" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>">
  <br>
  <?php echo i18n::__('pass') ?>: <input value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$password : '') ?>" type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>">
  <br>
  <input type="submit" value="<?php echo i18n::__(((isset($objUsuarios)) ? 'update' : 'register')) ?>">
</form>