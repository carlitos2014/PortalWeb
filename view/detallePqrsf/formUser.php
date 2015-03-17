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
  <form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('detallePqrsf', 'create') ?>" method="POST">
    <!--    <h2 class="form-signin-heading"></h2>-->

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('feedbackTypeID') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="<?php echo i18n::__('feedbackTypeID') ?>"  name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, true) ?>" id="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, true) ?>" value="<?php echo (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, TRUE)) === TRUE) ? request::getInstance()->getPost(detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('answer') ?></label>
      <div class="col-sm-10">
        <input type="textarea" id="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" class="form-control" placeholder="<?php echo i18n::__('answer') ?>" >
        <?php if (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('user_id') ?></label>
      <div class="col-sm-10">
<!--        <input type="text" id="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true) ?>" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true) ?>" class="form-control" placeholder="<?php echo i18n::__('user_id') ?>" >-->
        <select class="form-control" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true) ?>" id="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true) ?>">
          <option value="">Seleccione un usuario</option>
          <?php foreach ($objIdUsuario as $dato): ?> 
            <option value="<?php echo $dato->id ?>"><?php echo $dato->id . " " . $dato->user_name ?></option>

          <?php endforeach ?> 

          <?php if (session::getInstance()->hasFlash(detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, TRUE)) === TRUE): ?>
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


























