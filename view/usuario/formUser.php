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

  <form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'create') ?>" method="POST">


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('user') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Nombre de Usuario" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" value="<?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE) ? request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="col-sm-2 control-label"><?php echo i18n::__('pass') ?></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" placeholder="Password">
        <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="col-sm-2 control-label">Confirmacion de contraseña</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" placeholder="Password">
        <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('name') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>"placeholder="Nombre de Usuario">
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('last_name') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" placeholder="<?php echo i18n::__('last_name') ?>">
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('email') ?></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" placeholder="Email">
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('gender') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" >
          <option value="true">Masculino</option>
          <option value="false">Femenino</option>
        </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('birth_day') ?></label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>" >
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('place_id') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" >
          <option value="true">Masculino</option>

        </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('IdType') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" >
          <option value="true">Masculino</option>
        </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('organization_id') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" >
          <option value="true">Masculino</option>
        </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>



    <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>
    

  </form>

</div>

