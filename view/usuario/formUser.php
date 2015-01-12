<?php //use mvc\routing\routingClass as routing  ?>
<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idUsuario = usuarioTableClass::ID ?>
<?php $password = usuarioTableClass::PASSWORD ?>






<form class="form-horizontal" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuarios)) ? 'update' : 'create')) ?>">
<?php if (isset($objUsuarios) == true): ?>
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess"></label>
            <div class="col-xs-10">
                <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>"  id="inputSuccess" class="form-control" placeholder="Input with success" value="<?php echo $objUsuarios[0]->$idUsuario ?>" type="hidden" >
<?php endif ?>            
        </div>
    </div>

    <div class="form-group has-error">
        <label class="col-xs-2 control-label" for="inputError">Nombre de usuario</label>
        <div class="col-xs-10">
<?php echo i18n::__('user') ?>:<input value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->user_name : '') ?>" type="text" id="inputError" class="form-control" placeholder="Ingrese un Nombre de usuario valido" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>">

        </div>
    </div>

    <div class="form-group has-warning">
        <label class="col-xs-2 control-label" for="inputWarning">Password</label>
        <div class="col-xs-10">
<?php echo i18n::__('pass') ?>: <input value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$password : '') ?>" type="password" id="inputWarning" class="form-control" placeholder="Contraseña" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>">

        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-success" value="<?php echo i18n::__(((isset($objUsuarios)) ? 'update' : 'register')) ?>">Crear</button>
        </div>
    </div>
</form>



<!--
<?php //use mvc\routing\routingClass as routing ?>
<?php // use mvc\routing\routingClass as routing ?>
<?php // use mvc\i18n\i18nClass as i18n  ?>
<?php //$idUsuario = usuarioTableClass::ID  ?>
<?php //$password = usuarioTableClass::PASSWORD ?>

<form method="post" class="form-horizontal" action="<?//php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuarios)) ? 'update' : 'create' )) ?>">
<?php //if(isset($objUsuarios) == true):  ?>
           
           
           
           
           <input name="<?php //echo usuarioTableClass::getNameField(usuarioTableClass::ID,true)  ?>" value="<?php //echo $objUsuarios[0]->$idUsuario  ?>" type="hidden">
<?php //endif ?>
<?php //echo i18n::__('user')  ?>: <input value="<?php //echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$usuario : '')  ?>" type="text" name="<?php //echo usuarioTableClass::getNameField(usuarioTableClass::USER, true)  ?>">
  <br>
<?php //echo i18n::__('pass')  ?>: <input value="<?php //echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$password : '')  ?>" type="password" name="<?php //echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true)  ?>">
  <br>
  <input type="submit" value="<?php //echo i18n::__(((isset($objUsuarios)) ? 'update' : 'register'))  ?>">
</form>-->

























