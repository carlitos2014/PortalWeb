<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $id = tipoDocumentoTableClass::ID ?>
    <div class="jumbotron">
            <h1>Eliminacion de Documento : <?php echo $objDocumento[0]->$name ?></h1>
            <p>¿Desea eliminar el Documento?</p>
<?php view::includePartial('tipoDocumento/alertUser') ?>
        </div>
