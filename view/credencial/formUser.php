<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idCredencial = credencialTableClass::ID ?>
<?php $nombre = credencialTableClass::NOMBRE?>






<form class="form-horizontal" method="post" action="<?php echo routing::getInstance()->getUrlWeb('credencial', ((isset($objCredencial)) ? 'update' : 'create')) ?>">
<?php if (isset($objCredencial) == true): ?>
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess"></label>
            <div class="col-xs-10">
                <input name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>"  id="inputSuccess" class="form-control" placeholder="Input with success" value="<?php echo $objCredencial[0]->$idCredencial ?>" type="hidden" >
<?php endif ?>            
        </div>
    </div>

    <div class="form-group has-error">
        <label class="col-xs-2 control-label" for="inputError">Nombre de credencial</label>
        <div class="col-xs-10">
<?php echo i18n::__('name') ?>:<input value="<?php echo ((isset($objCrendencial) == true) ? $objCredencial[0]->$nombre: '') ?>" type="text" id="inputError" class="form-control" placeholder="Ingrese un Nombre de credencial valido" name="<?php echo credencialTableClass::getNameField(credencialTableClass::NOMBRE, true) ?>">

        </div>
    </div>

    


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-success" value="<?php echo i18n::__(((isset($objCredencial)) ? 'update' : 'register')) ?>">Crear</button>
        </div>
    </div>
</form>