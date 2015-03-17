<?php use mvc\request\requestClass as request       ?>
<?php

use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $id = tipoDocumentoTableClass::ID ?>
<?php $name = tipoDocumentoTableClass::NOMBRE ?>



<div class="container container-fluid">


  <form class="form-signin" role="form" action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'create') ?>" method="POST">
    <h2 class="form-signin-heading"></h2>
    <div class="form-group" <?php echo (session::getInstance()->hasFlash(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, TRUE))===TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true) ?>" class="sr-only"><?php echo i18n::__('nom') ?></label>
      <input type="text" class="form-control" placeholder="Tipo Documento"  name="<?php echo tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true) ?>" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" value="<?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE))===TRUE) ? request::getInstance()->getPost(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, TRUE)) : '' ?>">
    <?php if (session::getInstance()->hasFlash(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, TRUE))===TRUE):?>
    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
 <?php endif?>
    
    
   <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>
    <?php if (session::getInstance()->hasError() or session::getInstance()->hasInformation() or session::getInstance()->hasSuccess() or session::getInstance()->hasWarning()): ?>
      <?php view::includeHandlerMessage() ?>
    <?php endif ?>
  </form>

</div>


























