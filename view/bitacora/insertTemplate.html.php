<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<<<<<<< HEAD
<?php use mvc\view\viewClass as view ?>
<div class="jumbotron">
            <h1>Creacion de Usuario</h1>
            <p>Por favor llenar los siguientes campos</p>

        </div>
<?php view::includePartial('usuario/formUser') ?>
=======
<form method="post" action="<?php echo routing::getInstance()->getUrlWeb('default', 'create') ?>">
  <?php echo i18n::__('user') ?>: <input type="text" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USUARIO, true) ?>">
  <br>
  <?php echo i18n::__('pass') ?>: <input type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>">
  <br>
  <input type="submit" value="<?php echo i18n::__('register') ?>">
</form>
>>>>>>> c3a909c6d4ce4ccf630c4927984f85e5be0a48b9
