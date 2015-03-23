<?php

use mvc\request\requestClass as request ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $id = eventoTableClass::ID ?>
<?php $img = eventoTableClass::IMAGEN ?>
<?php $nombre = eventoTableClass::NOMBRE ?>
<?php $descripcion = eventoTableClass::DESCRIPCION ?>
<?php $fecha_ini = eventoTableClass::FECHA_INICIAL_EVENTO ?>
<?php $fecha_final = eventoTableClass::FECHA_FINAL_EVENTO ?>
<?php $latitud = eventoTableClass::LUGAR_LATITUD ?>
<?php $longitud = eventoTableClass::LUGAR_LONGITUD ?>
<?php $direccion = eventoTableClass::DIRECCION ?>
<?php $costo = eventoTableClass::COSTO ?>
<?php $usuid = eventoTableClass::USUARIO_ID ?>
<?php $categoria = eventoTableClass::CATEGORIA_ID ?>
<?php $fechainipub = eventoTableClass::FECHA_INICIAL_PUBLICACION ?>
<?php $fechafinpub = eventoTableClass::FECHA_FINAL_PUBLICACION ?>


<div class="container container-fluid">
    <form class="form-create" role="form" action="<?php echo routing::getInstance()->getUrlWeb('evento', ((isset($objEvento)) ? 'update' : 'create')) ?>" method="POST">
        <!--    <h2 class="form-signin-heading"></h2>-->

        <?php if (isset($objEvento) == true): ?>
      <input name="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>" value="<?php echo $objEvento[0]->$id ?>" type="hidden">
    <?php endif ?>
        
        
        
        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::IMAGEN, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('image') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo i18n::__('image') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>" value="<?php echo ((isset($objEvento) == true) ? $objEvento[0]->$img : '') ?>"><?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::IMAGEN, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::IMAGEN, TRUE)) : '' ?>
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::IMAGEN, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>

        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::NOMBRE, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('name') ?></label>
            <div class="col-sm-10">
                <input type="text" id="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>" name="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>" class="form-control" placeholder="<?php echo i18n::__('name') ?>" value="<?php echo ((isset($objEvento) == true) ? $objEvento[0]->$nombre : '') ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::NOMBRE, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>


        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('description') ?></label>
            <div class="col-sm-10">
                <input type="text" id="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>" class="form-control" placeholder="<?php echo i18n::__('description') ?>" value="<?php echo ((isset($objEvento) == true) ? $objEvento[0]->$descripcion : '') ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>

        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('start_Date') ?></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="<?php echo i18n::__('start_Date') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>" value="<?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>

        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('finish_Date') ?></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="<?php echo i18n::__('finish_Date') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>" value="<?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>


        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('latitude') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo i18n::__('latitude') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true) ?>" value="<?php echo ((isset($objEvento) == true) ? $objEvento[0]->$latitud : '') ?><?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>

        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('longitude') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo i18n::__('longitude') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true) ?>" value="<?php echo ((isset($objEvento) == true) ? $objEvento[0]->$longitud : '') ?><?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>

        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::DIRECCION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('adress') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo i18n::__('adress') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" value="  <?php echo ((isset($objEvento) == true) ? $objEvento[0]->$direccion : '') ?><?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::DIRECCION, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DIRECCION, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::DIRECCION, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>


        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::COSTO, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('cost') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo i18n::__('cost') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>" value="<?php echo ((isset($objEvento) == true) ? $objEvento[0]->$costo : '') ?><?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::COSTO, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::COSTO, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::COSTO, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>






<!--        <div class="form-group" <?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::PATROCINADOR_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>

            <label for="<?php //echo eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::PATROCINADOR_ID, true) ?>" class="col-sm-2 control-label"><?php //echo i18n::__('partner_id') ?></label>
            <div class="col-sm-10">


                <select class="form-control" name="<?php //echo eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::PATROCINADOR_ID, true) ?>" id="<?php //echo eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::PATROCINADOR_ID, true) ?>">
                    <option value=""><?php //echo i18n::__('partner_id') ?></option>
                    <?php //foreach ($objPatrocinador as $dato): ?> 
                        <option value="<?php //echo $dato->id ?>"><?php //echo $dato->nombre ?></option>

                    <?php //endforeach ?> 
                </select>
                    <?php //if (session::getInstance()->hasFlash(eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::PATROCINADOR_ID, TRUE)) === TRUE): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                    <?php //endif ?>
            </div>
        </div>-->



        <div class="form-group"<?php echo(session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, True)) == TRUE) ? 'has-error' : '' ?>>
            <label for="<?php echo eventoTableClass:: getNameField(eventoTableClass::USUARIO_ID, TRUE) ?>" class="col-sm-2 control-label"> <?php echo i18n::__('user_id') ?></label>
            <div class="col-sm-10">

                <select class="form-control" name="<?php echo eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, TRUE) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, TRUE) ?>">
<!--                    <option value=""><?php //"Seleccione" ?></option>-->
                    <?php foreach ($objUsuario as $dato1): ?>
                        <option value="<?php echo $dato1->id ?>"><?php echo $dato1->user_name ?></option>
                    <?php endforeach ?>
                </select>
                    <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, TRUE)) === TRUE): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                    <?php endif ?>

            </div>
        </div>


        
     
        
        
        
        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('category') ?></label>
        <div class="col-sm-10">
                <select class="form-control" name="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, TRUE) ?>">
                    <option value=""><?php "Seleccione" ?></option>
                    <?php foreach ($objCategoria as $dato): ?>
                        <option value="<?php echo $dato->id ?>"><?php echo $dato->nombre ?></option>
                    <?php endforeach ?>
                </select>
                    <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE)) === TRUE): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                    <?php endif ?>
            </div>
        </div>
        
        
        
<!--
        <div class="form-group" <?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php //echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" class="col-sm-2 control-label"><?php //echo i18n::__('categoryID') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php //echo i18n::__('categoryID') ?>"  name="<?php// echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" id="<?php //echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" value="<?php //echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE)) : '' ?>">
                <?php //if (  session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php //endif ?>
            </div>
        </div>-->

        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('publicationStartDate') ?></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="<?php echo i18n::__('publicationStartDate') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" value="<?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, TRUE)) === TRUE): ?>
                    <span class="glyphicon glyphicon-remove form-control-feedback" ></span> 
                <?php endif ?>
            </div>
        </div>


        <div class="form-group" <?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, TRUE)) === TRUE) ? 'has-error has-feedback' : '' ?>>
            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>" class="col-sm-2 control-label"><?php echo i18n::__('publicationFinishDate') ?></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="<?php echo i18n::__('publicationFinishDate') ?>"  name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>" value="<?php echo (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, TRUE)) === TRUE) ? request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, TRUE)) : '' ?>">
                <?php if (session::getInstance()->hasFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, TRUE)) === TRUE): ?>
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


























