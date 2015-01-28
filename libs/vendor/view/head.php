<!DOCTYPE html>
<html lang="<?php echo \mvc\config\configClass::getDefaultCulture() ?>">
  <head>
    <?php echo \mvc\view\viewClass::genMetas() ?>
    <?php echo \mvc\view\viewClass::genFavicon() ?>
    <?php echo \mvc\view\viewClass::genStylesheet() ?>
    <?php echo \mvc\view\viewClass::genJavascript() ?>
    <?php echo \mvc\view\viewClass::genTitle() ?>  
  <div class="panel panel-success">Sesion Iniciada como : <?php echo \mvc\session\sessionClass::getInstance()->getUserName()?> <a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>" class="btn btn-danger">Log out</a></div>
        <?php //echo \mvc\view\viewClass::genSessionId() ?> 
  </head>
  <body>
