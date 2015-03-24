<?php

use mvc\request\requestClass as request ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php //$idUsuario = usuarioTableClass::ID  ?>
<?php //$password = usuarioTableClass::PASSWORD  ?>



<div class="container container-fluid">
  <form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('pqrsf', 'create') ?>" method="POST">
    <!--    <h2 class="form-signin-heading"></h2>-->


    <div class="form-group"<?php echo(session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::TIPO_PQRS_ID, True)) == TRUE) ? 'has-error' : '' ?>>
      <label for="<?php echo pqrsfTableClass:: getNameField(pqrsfTableClass::TIPO_PQRS_ID, TRUE) ?>" class="col-sm-2 control-label"> <?php echo i18n::__('feedbackType') ?></label>
      <div class="col-sm-10">

        <select class="form-control" name="<?php echo pqrsfTableClass::getNameField(pqrsfTableClass::TIPO_PQRS_ID, TRUE) ?>" id="<?php echo pqrsfTableClass::getNameField(pqrsfTableClass::TIPO_PQRS_ID, TRUE) ?>">
<!--                    <option value=""><?php //"Seleccione"  ?></option>-->
          <?php foreach ($objTipo as $dato1): ?>
            <option value="<?php echo $dato1->id ?>"><?php echo $dato1->nombre ?></option>
        <?php endforeach ?>
        </select>
        <?php if (session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::TIPO_PQRS_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
<?php endif ?>

      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, true) ?>" class="col-sm-2 control-label"><?php //echo i18n::__('title') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="<?php echo i18n::__('title') ?>"  name="<?php echo pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, true) ?>" id="<?php echo pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, true) ?>" value="<?php echo (session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, TRUE)) === TRUE) ? request::getInstance()->getPost(pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
<?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::CONTENIDO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo pqrsfTableClass::getNameField(pqrsfTableClass::CONTENIDO, true) ?>" class="col-sm-2 control-label"><?php //echo i18n::__('content') ?></label>
      <div class="col-sm-10">
        <textarea></textarea>
        <?php if (session::getInstance()->hasFlash(pqrsfTableClass::getNameField(pqrsfTableClass::CONTENIDO, TRUE)) === TRUE): ?>
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














