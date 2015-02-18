<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<div class="jumbotron">
  <h1><?php echo i18n::__('createUser') ?></h1>
  <p>Por favor llenar los siguientes campos</p>

</div>
<?php view::includeHandlerMessage() ?>
<?php view::includePartial('usuario/formUser') ?>
