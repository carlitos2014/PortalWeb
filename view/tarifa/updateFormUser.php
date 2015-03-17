<?php

use mvc\session\sessionClass as session ?>
<?php $titulo = 'Modificacion de Tarifa' ?>
<?php mvc\view\viewClass::genTitle($titulo) ?>
<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $descripcion = tarifaTableClass::DESCRIPCION ?>
<?php $valor = tarifaTableClass::VALOR ?>

<div class="container container-fluid">


  <form class="form-signin" role="form" action="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'create') ?>" method="POST">
    <h2 class="form-signin-heading"></h2>
    <div class="form-group" <?php echo (session::getInstance()->hasFlash(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true) ?>" class="sr-only"><?php echo i18n::__('desc') ?></label>
      <input type="text" class="form-control" placeholder="Descripcion"  name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true) ?>" id="<?php echo tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true) ?>" value="<?php echo (session::getInstance()->hasFlash(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, TRUE)) === TRUE) ? request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, TRUE)) : '' ?>">
      <?php if (session::getInstance()->hasFlash(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, TRUE)) === TRUE): ?>
        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
      <?php endif ?>

    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(tarifaTableClass::getNameField(tarifaTableClass::VALOR, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo tarifaTableClass::getNameField(tarifaTableClass::VALOR, true) ?>" class="sr-only"><?php echo i18n::__('val') ?></label>
      <input type="number" id="<?php echo tarifaTableClass::getNameField(tarifaTableClass::VALOR, true) ?>" name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::VALOR, true) ?>" class="form-control" placeholder="Valor" >
    </div>


   <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>
    <?php if (session::getInstance()->hasError() or session::getInstance()->hasInformation() or session::getInstance()->hasSuccess() or session::getInstance()->hasWarning()): ?>
      <?php view::includeHandlerMessage() ?>
    <?php endif ?>
  </form>

</div>