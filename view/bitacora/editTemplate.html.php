<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $usuario = usuarioTableClass::USER ?>
    <div class="jumbotron">
            <h1>Edicion de Usuario : <?php echo $objUsuarios[0]->$usuario ?></h1>
            <p>Modifique los siguientes campos</p>

        </div>
    
    
    
    <?php view::includePartial('usuario/updateFormUser', array('objUsuarios' => $objUsuarios, 'usuario' => $usuario)) ?>