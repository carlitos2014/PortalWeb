<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>



    <div class="page-header">
  <h1><i class="glyphicon glyphicon-pencil"></i><i class="glyphicon glyphicon-user"></i>Edicion de Categoria</h1>
</div>
    
 <?php view::includePartial('categoria/formUser', array('objCategoria'=>$objCategoria)) ?>