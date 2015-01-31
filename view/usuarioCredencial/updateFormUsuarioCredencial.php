<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idCredencial = usuarioCredencialTableClass::ID ?>
<?php $usuarioId = usuarioCredencialTableClass::USUARIO_ID ?>
<?php $credencialId = usuarioCredencialTableClass::CREDENCIAL_ID ?>
<?php $idCredencial1 =credencialTableClass::ID?>
  <?php $user_name = usuarioTableClass::USER ?>

<!--((isset($objUsuarioCredencial)) ? 'update' : 'create')-->





<form class="form-horizontal" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial',((isset($objCredencial1)) ? 'update' : 'create'),((isset($objUsuarioCredencial)) ? 'update' : 'create')) ?>">
<?php if (isset($objUsuarioCredencial) == true): ?>
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess"></label>
            <div class="col-xs-10">
                <input name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true) ?>"  id="inputSuccess" class="form-control" placeholder="Input with success" value="<?php echo $objUsuarioCredencial[0]->$idCredencial ?>" type="hidden" >
<?php endif ?>            
        
            
            <?php if (isset($objCredencial1) == true): ?>
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess"></label>
            <div class="col-xs-10">
                <input name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>"  id="inputSuccess" class="form-control" placeholder="Input with success" value="<?php echo $objCredencial[0]->$idCredencial ?>" type="hidden" >
<?php endif ?> 
            
            
            
            
            
            
            </div>
    </div>

    <div class="form-group has-error">
        <label class="col-xs-2 control-label" for="inputError">Identificacion de usuario</label>
        <div class="col-xs-10">
<!--         <pre><?php print_r($objUsuarioCredencial) ?></pre>-->
            <?php echo i18n::__('idUser') ?>:<select class="form-control" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true) ?>">
                    <option value="">Seleccione el ID de usuario</option>
                    <?php foreach ($objUsuarioCredencial as $dato): ?> 
                        <option value="<?php echo $dato->id ?>"><?php echo $dato->user_name ?></option>

                    <?php endforeach ?>
                </select>


<!--<input value="<?php //echo ((isset($objUsuarioCredencial) == true) ? $objUsuarioCredencial[0]->$usuarioId : '') ?>" type="text" id="inputError" class="form-control" placeholder="Ingrese el numero de usuario" name="<?php //echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) ?>">-->

        </div>
    </div>

    <div class="form-group has-warning">
        <label class="col-xs-2 control-label" for="inputWarning">Identificacion de credencial</label>
        <div class="col-xs-10">


        
        
<!--        <pre><?php print_r($objCredencial1) ?></pre>-->
        <?php echo i18n::__('idCredencial') ?>:<select class="form-control" name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>" >
                    <option value="">Seleccione el ID de la credencial</option>
                    <?php foreach ($objCredencial1 as $dato2): ?> 
                        <option value="<?php echo $dato2->id ?>"><?php echo $dato2->nombre ?></option>

                    <?php endforeach ?>
                </select>
        
        
        
        
        
        
        
        
        
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-success" value="<?php echo i18n::__(((isset($objUsuarioCredencial)) ? 'update' : 'register')) ?>">Actualizar</button>
        </div>
    </div>
</form>