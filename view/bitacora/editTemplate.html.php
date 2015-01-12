<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $usuario = credencialTableClass::NOMBRE ?>
    <div class="jumbotron">
            <h1>Edicion de Usuario : <?php echo $objCredencial[0]->$usuario ?></h1>
            <p>Modifique los siguientes campos</p>

        </div>
    
    
    
    <?php view::includePartial('credencial/updateFormUser', array('objCredencial' => $objUsuarios, 'usuario' => $usuario)) ?>