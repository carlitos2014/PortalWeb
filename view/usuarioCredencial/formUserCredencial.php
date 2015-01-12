
<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idCredencial = usuarioCredencialTableClass::ID ?>
<?php $usuarioId = usuarioCredencialTableClass::USUARIO_ID ?>
<?php $credencialId = usuarioCredencialTableClass::CREDENCIAL_ID ?>





<form class="form-horizontal" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', ((isset($objUsuarioCredencial)) ? 'update' : 'create')) ?>">
<?php if (isset($objUsuarioCredencial) == true): ?>
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess"></label>
            <div class="col-xs-10">
                <input name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true) ?>"  id="inputSuccess" class="form-control" placeholder="Input with success" value="<?php echo $objUsuarioCredencial[0]->$idCredencial ?>" type="hidden" >
<?php endif ?>            
        </div>
    </div>

    <div class="form-group has-error">
        <label class="col-xs-2 control-label" for="inputError">Identificacion de usuario</label>
        <div class="col-xs-10">
<?php echo i18n::__('idUser') ?>:<input value="<?php echo ((isset($objusuarioCredencial) == true) ? $objUsuarioCredencial[0]->$usuarioId : '') ?>" type="text" id="inputError" class="form-control" placeholder="Ingrese el numero de usuario" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) ?>">

        </div>
    </div>

    <div class="form-group has-warning">
        <label class="col-xs-2 control-label" for="inputWarning">Identificacion de credencial</label>
        <div class="col-xs-10">
<?php echo i18n::__('idCredencial') ?>: <input value="<?php echo ((isset($objUsuarioCredencial) == true) ? $objUsuarioCredencial[0]->$credencialId : '') ?>" type="text" id="inputWarning" class="form-control" placeholder="ingrese el numero de credencial" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::CREDENCIAL_ID, true) ?>">

        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-success" value="<?php echo i18n::__(((isset($objUsuarioCredencial)) ? 'update' : 'register')) ?>">Crear</button>
        </div>
    </div>
</form>