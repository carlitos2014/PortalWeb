<?php use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<div class="container container-fluid">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-star"></i><?php echo i18n::__('create_credential') ?></h1>
  </div>
</div>
<?php view::includeHandlerMessage() ?>
<?php view::includePartial('credencial/formUser') ?>
