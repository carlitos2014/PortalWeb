<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idUsuario = credencialTableClass::ID ?>



<form class="form-horizontal" method="post" action="<?php echo routing::getInstance()->getUrlWeb('credencial', ((isset($objCredencial)) ? 'delete' : 'create')) ?>">
<?php if (isset($objCredencial) == true): ?>
        <div class="form-group has-success">
            <label class="col-xs-2 control-label" for="inputSuccess">Nombre de usuario</label>
            <div class="col-xs-10">
                <input name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>"  id="inputSuccess" class="form-control" placeholder="Input with success" value="<?php echo $objCredencial[0]->$idUsuario ?>" type="hidden" >
<?php endif ?>            
        </div>
    </div>
</form>>

