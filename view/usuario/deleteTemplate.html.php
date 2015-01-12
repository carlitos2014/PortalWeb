<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $usuario = usuarioTableClass::ID ?>
    <div class="jumbotron">
            <h1>Eliminacion de Usuario : <?php echo $objUsuarios[0]->$usuario ?></h1>
            <p>¿Desea eliminar el usuario?</p>
<?php view::includePartial('usuario/alertUser') ?>
        </div>
