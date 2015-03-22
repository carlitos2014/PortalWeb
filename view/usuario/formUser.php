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

<?php $usuid=usuarioTableClass::ID  ?>

<?php $id = usuarioTableClass::ID ?>
<?php $usuario = usuarioTableClass::USER ?>
<?php $password = usuarioTableClass::PASSWORD ?>

<?php $fecha = datoUsuarioTableClass::FECHA_NACIMIENTO ?>




<div class="container container-fluid">

  <form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuarios)) ? 'update' : 'create' )) ?>" method="POST">

    <?php if(isset($objUsuarios) == true): ?>
  <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID,true) ?>" value="<?php echo $objUsuarios[0]->$id?>" type="hidden">
  <?php endif ?>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('user') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Nombre de Usuario" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$usuario : '') ?><?php //echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE) ? request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) : '' ?>">
        <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="col-sm-2 control-label"><?php echo i18n::__('pass') ?></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" placeholder="Password" value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$password : '') ?>">
        <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="col-sm-2 control-label"><?php echo i18n::__('pass_confirmation') ?></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" placeholder="Password" value="<?php echo ((isset($objUsuarios) == true) ? $objUsuarios[0]->$password : '') ?>">
        <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
<!--      <label for="<?php// echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" class="col-sm-2 control-label"><?php //echo i18n::__('user_name') ?></label>-->
      <div class="col-sm-10">
        <input type="text" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>"placeholder="Nombre de Usuario" value="<?php echo ((isset($datos) == true) ? $datos[0]->nombre : '') ?>">
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('lastName') ?></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" placeholder="<?php echo i18n::__('lastName') ?>" value="<?php echo ((isset($datos) == true) ? $datos[0]->apellido : '') ?>">
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>

    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('email') ?></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" placeholder="Email" value="<?php echo ((isset($datos) == true) ? $datos[0]->correo : '') ?>">
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
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('eventPlaceID') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" >
          
        <?php foreach ($objLocalidad as $dato): ?> 
            <option value="<?php echo $dato->id ?>"><?php echo $dato->nombre ?></option>

          <?php endforeach ?>
       </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>


    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php //echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" class="col-sm-2 control-label"><?php// echo i18n::__('Document_type') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" >
          
        <?php foreach ($objTipoDocumento as $dato): ?> 
            <option value="<?php echo $dato->id ?>"><?php echo $dato->nombre ?></option>

          <?php endforeach ?>
       </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>



    <div class="form-group" <?php echo (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
      <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" class="col-sm-2 control-label"><?php //echo i18n::__('organization_id') ?></label>
      <div class="col-sm-10">
        <select class="form-control" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" >
          
        <?php foreach ($objOrganizacion as $dato): ?> 
            <option value="<?php echo $dato->id ?>"><?php echo $dato->nombre ?></option>

          <?php endforeach ?>
       </select>
        <?php if (session::getInstance()->hasFlash(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, TRUE)) === TRUE): ?>
          <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
        <?php endif ?>
      </div>
    </div>
    
    <br>
    <br>

<!--entrada oculta para llenar la llave foranea en dato usuario-->


<?php //foreach ($objUsuario as $datoid): ?> 
   
<?php //$dat=array($datoid->id) ?> 
<?php //$ope=array_pop($objusuario['id']) ?> 
<?php //echo $id ?>

<input type="hidden" id="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true) ?>" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true) ?>" value="<?php echo max($objUsuario)+1 ?>">
<?php //endforeach ?>

    <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo i18n::__('create') ?></button>


  </form>


</div>
