<?php

use mvc\session\sessionClass as session ?>
<?php $titulo = 'MOdificacion de usuario' ?>
<?php mvc\view\viewClass::genTitle($titulo) ?>
<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idUsuario = usuarioTableClass::ID ?>
<?php $password = usuarioTableClass::PASSWORD ?>

<div class="container container-fluid">


  <form class="form-signin" role="form" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'create') ?>" method="POST">
    <h2 class="form-signin-heading"></h2>
    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" class="sr-only"><?php echo i18n::__('user') ?></label>
      <input type="text" class="form-control" placeholder="Usuario"  name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" value="<?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE) ? request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) : '' ?>">
      <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE): ?>
        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
      <?php endif ?>



    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="sr-only"><?php echo i18n::__('pass') ?></label>
      <input type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="form-control" placeholder="Contraseña" >
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Verificar Contraseña</label>
      <input type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="Verificar Contraseña" >
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Nombre</label>
      <input type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="Nombre" >
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Apellido</label>
      <input type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="apellido" >
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Verificar Contraseña</label>
      <input type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="correo" >
    </div>





    <select>
      <option>m</option>
    </select>



    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Verificar Contraseña</label>
      <input type="date" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="fecha de nacimiento" >
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Verificar Contraseña</label>
      <input type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="localidad" >
    </div>

   <select>
      <option>cc</option>
    </select>

<div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="sr-only">Verificar Contraseña</label>
      <input type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control" placeholder="ID de organizacion" >
    </div>






















    <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>
    <?php if (session::getInstance()->hasError() or session::getInstance()->hasInformation() or session::getInstance()->hasSuccess() or session::getInstance()->hasWarning()): ?>
      <?php view::includeHandlerMessage() ?>
    <?php endif ?>
  </form>

</div>