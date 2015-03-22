<?php use mvc\request\requestClass as request       ?>
<?php

use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php// $idUsuario = localidadTableClass::ID ?>
<?php //$password = localidadTableClass::LOCALIDAD_ID ?>



<div class="container container-fluid">

<form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('localidad', 'create') ?>" method="POST">
   
  <div class="form-group" <?php echo (session::getInstance()->hasFlash(localidadTableClass::getNameField(localidadTableClass::NOMBRE, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo localidadTableClass::getNameField(localidadTableClass::NOMBRE, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('name') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="<?php echo i18n::__('name') ?>" name="<?php echo localidadTableClass::getNameField(localidadTableClass::NOMBRE, true) ?>" id="<?php echo localidadTableClass::getNameField(localidadTableClass::NOMBRE, true) ?>" value="<?php echo (session::getInstance()->hasFlash(localidadTableClass::getNameField(localidadTableClass::NOMBRE, TRUE)) === TRUE) ? request::getInstance()->getPost(localidadTableClass::getNameField(localidadTableClass::NOMBRE, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(localidadTableClass::getNameField(localidadTableClass::NOMBRE, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true)  ?>" class="col-sm-2 control-label"><?php echo i18n::__('eventPlaceID') ?></label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="<?php echo localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true)  ?>" name="<?php echo localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true)  ?>" placeholder="<?php echo i18n::__('eventPlaceID') ?>">
        <?php if (session::getInstance()->hasFlash(localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    


    <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>
    <?php if (session::getInstance()->hasError() or session::getInstance()->hasInformation() or session::getInstance()->hasSuccess() or session::getInstance()->hasWarning()): ?>
      <?php view::includeHandlerMessage() ?>
    <?php endif ?>
  </form>

</div>


























