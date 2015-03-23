<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>



    <div class="page-header">
      <h1><i class="glyphicon glyphicon-pencil"></i><i class="glyphicon glyphicon-credit-card"></i><?php echo i18n::__('modify_credential')?></h1>
</div>
    
 <?php view::includePartial('credencial/formUser', array('objCredencial'=>$objCredencial)) ?>