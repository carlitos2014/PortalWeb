<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<div class="page-header">
  <h1><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-briefcase"></i>Creacion de Patrocinador</h1>
</div>
<?php view::includeHandlerMessage() ?>
<?php view::includePartial('patrocinador/formUser') ?>
