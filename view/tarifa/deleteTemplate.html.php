<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $id = tarifaTableClass::ID ?>
    <div class="jumbotron">
            <h1>Eliminacion de Tarifa : <?php echo $objTarifa[0]->$descripcion ?></h1>
            <p>¿Desea eliminar el Tarifa?</p>
<?php view::includePartial('tarifa/alertUser') ?>
        </div>
