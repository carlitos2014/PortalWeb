<?php use mvc\request\requestClass as request       ?>
<?php

use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>


<?php $id=  recaudoEconomicoTableClass::ID ?>
<?php $evento_id=  recaudoEconomicoTableClass::EVENTO_ID ?>
<?php $usuario_id=  recaudoEconomicoTableClass::USUARIO_ID ?>
<?php $observacion=  recaudoEconomicoTableClass::OBSERVACION ?>
<?php $tarifa_id=  recaudoEconomicoTableClass::TARIFA_ID ?>
<?php $valor_parcial=  recaudoEconomicoTableClass::VALOR_PARCIAL ?>
<?php $valor_total=  recaudoEconomicoTableClass::VALOR_TOTAL ?>



<div class="container container-fluid">


  <form class="form-signin" role="form" action="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'create') ?>" method="POST">
    <h2 class="form-signin-heading"></h2>
    <div class="form-group" <?php echo (session::getInstance()->hasFlash(recaudoEconomicoTableClass::getAll(recaudoEconomicoTableClass::ID, ture))===TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, true) ?>" class="sr-only"><?php echo i18n::__('user') ?></label>
      <input type="text" class="form-control" placeholder="Id"  name="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, true) ?>" id="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, true) ?>" value="<?php echo (session::getInstance()->hasFlash(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, TRUE))===TRUE) ? request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, TRUE)) : '' ?>">
    <?php if (session::getInstance()->hasFlash(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, TRUE))===TRUE):?>
    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
 <?php endif?>
    
    
    
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::USUARIO_ID, TRUE))===TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::USUARIO_ID, true)  ?>" class="sr-only"><?php echo 'Mensaje' ?></label>
      <input type="text" placeholder="Usuario Id" id="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::USUARIO_ID, true) ?>" name="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::USUARIO_ID, true) ?>" class="form-control" placeholder="Usuario Id" >
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::OBSERVACION, TRUE))===TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::OBSERVACION, true)  ?>" class="sr-only"><?php echo 'msj'?></label>
      <input type="text" id="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::OBSERVACION, true) ?>" name="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::OBSERVACION, true) ?>" class="form-control" placeholder="Observacion" >
    </div>

    
    <div class="form-group" <?php echo(session::getInstance()->hasFlash(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::TARIFA_ID, TRUE))== TRUE) ? 'has-error has-feedback':''?>>
        <label for="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::TARIFA_ID, TRUE)?>" class="sr-only"><?php echo 'mnsaje'?></label>  
        <input type="text" id="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::TARIFA_ID, TRUE)?>" name="<?php echo recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::TARIFA_ID, true) ?>" class="form-control" placeholder="Tarifa">
        
    </div>
    
    
    <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>
    <?php if (session::getInstance()->hasError() or session::getInstance()->hasInformation() or session::getInstance()->hasSuccess() or session::getInstance()->hasWarning()): ?>
      <?php view::includeHandlerMessage() ?>
    <?php endif ?>
  </form>

</div>


























