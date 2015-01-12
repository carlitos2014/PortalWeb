<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<?php $credencial = credencialTableClass::NOMBRE ?>
    <div class="jumbotron">
            <h1>Edicion de Credencial : <?php echo $objCredencial[0]->$credencial ?></h1>
            <p>Modifique los siguientes campos</p>

        </div>
    
    
    
    <?php view::includePartial('credencial/updateFormCredencial', array('objCredencial' => $objCredencial, 'credencial' => $credencial)) ?>