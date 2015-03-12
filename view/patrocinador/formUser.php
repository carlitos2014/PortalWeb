<?php

use mvc\request\requestClass as request ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php //$idUsuario = patrocinadorTableClass::ID    ?>
<?php //$password = patrocinadorTableClass::PASSWORD    ?>



<div class="container container-fluid">

<form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'create') ?>" method="POST">
  <div class="form-group" <?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
    <label for="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('name') ?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="<?php echo i18n::__('name') ?>"  name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true) ?>" id="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true) ?>" value="<?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, TRUE)) === TRUE) ? request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, TRUE)) : '' ?>">
      <?php if (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, TRUE)) === TRUE): ?>
        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
      <?php endif ?>
    </div>
  </div>



  <div class="form-group" <?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
    <label for="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('e-mail') ?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="<?php echo i18n::__('e-mail') ?>"  name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true) ?>" id="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true) ?>" value="<?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, TRUE)) === TRUE) ? request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, TRUE)) : '' ?>">
      <?php if (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, TRUE)) === TRUE): ?>
        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
      <?php endif ?>
    </div>
  </div>



  <div class="form-group" <?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
    <label for="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('phone') ?></label>
    <div class="col-sm-10">
      <input type="text" id="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true) ?>" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true) ?>" class="form-control" placeholder="<?php echo i18n::__('phone') ?>" value="<?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, TRUE)) === TRUE) ? request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, TRUE)) : '' ?>">
      <?php if (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, TRUE)) === TRUE): ?>
        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
      <?php endif ?>
    </div>
  </div>


  <div class="form-group" <?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
    <label for="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('adress') ?></label>
    <div class="col-sm-10">
      <input type="text" id="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true) ?>" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true) ?>" class="form-control" placeholder="<?php echo i18n::__('adress') ?>" value="<?php echo (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, TRUE)) === TRUE) ? request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, TRUE)) : '' ?>"> 
      <?php if (session::getInstance()->hasFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, TRUE)) === TRUE): ?>
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


























