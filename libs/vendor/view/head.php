<!DOCTYPE html>

<html lang="<?php echo \mvc\config\configClass::getDefaultCulture() ?>" class="no-js">
  <?php

  use mvc\i18n\i18nClass as i18n ?>
  <?php

  use mvc\routing\routingClass as routing ?>
  <head>
    <?php echo \mvc\view\viewClass::genMetas() ?>
    <?php echo \mvc\view\viewClass::genFavicon() ?> 
    <?php echo \mvc\view\viewClass::genStylesheet() ?>
    <?php echo \mvc\view\viewClass::genJavascript() ?>
    <?php echo  \mvc\view\viewClass::genTitle()  ?>  
    <title><?php echo i18n::__('portalCultural') ?></title>
  </head>

  <body>

    
