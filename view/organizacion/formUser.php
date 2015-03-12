<?php

use mvc\request\requestClass as request ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php //$idUsuario = usuarioTableClass::ID   ?>
<?php //$password = usuarioTableClass::PASSWORD   ?>



<div class="container container-fluid">
  <form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'create') ?>" method="POST">
    <div class="form-group" <?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('name') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="<?php echo i18n::__('name') ?>"  name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true) ?>" id="<?php echo organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true) ?>" value="<?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, TRUE)) === TRUE) ? request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('adress') ?></label>
      <div class="col-sm-10">
        <input type="text" id="<?php echo organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true) ?>" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true) ?>" class="form-control" placeholder="<?php echo i18n::__('adress') ?>"  value="<?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, TRUE)) === TRUE) ? request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('phone') ?></label>
      <div class="col-sm-10">
        <input type="text" id="<?php echo organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true) ?>" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true) ?>" class="form-control" placeholder="<?php echo i18n::__('phone') ?>"  value="<?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, TRUE)) === TRUE) ? request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::FAX, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo organizacionTableClass::getNameField(organizacionTableClass::FAX, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('facsimil') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="<?php echo i18n::__('facsimil') ?>"  name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::FAX, true) ?>" id="<?php echo organizacionTableClass::getNameField(organizacionTableClass::FAX, true) ?>" value="<?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::FAX, TRUE)) === TRUE) ? request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::FAX, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::FAX, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::CORREO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo organizacionTableClass::getNameField(organizacionTableClass::CORREO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('e-mail') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="<?php echo i18n::__('e-mail') ?>"  name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::CORREO, true) ?>" id="<?php echo organizacionTableClass::getNameField(organizacionTableClass::CORREO, true) ?>" value="<?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::CORREO, TRUE)) === TRUE) ? request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::CORREO, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::CORREO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('webPage') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="<?php echo i18n::__('webPage') ?>"  name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true) ?>" id="<?php echo organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true) ?>" value="<?php echo (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, TRUE)) === TRUE) ? request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, TRUE)) === TRUE): ?>
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


























