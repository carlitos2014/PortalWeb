<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<div class="jumbotron">
            <h1>Creacion de Usuario</h1>
            <p>Por favor llenar los siguientes campos</p>

        </div>
<?php view::includePartial('usuario/formUser') ?>