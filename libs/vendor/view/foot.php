<?php

use mvc\i18n\i18nClass as i18n ?>
<?php

use mvc\routing\routingClass as routing ?>
<br>


<?php use mvc\session\sessionClass as session ?>
  <?php if(\mvc\config\configClass::getScope() === 'dev'): ?>
  <div id="mvcMain" class="shfDevelopmentBar">
    <i class="fa fa-leaf mvcPointer"></i> SHF 1.0.4 |
    <i class="fa fa-dashboard"></i> <?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?> MB |
    <i class="fa fa-clock-o"></i> <?php echo number_format((microtime(true) - $GLOBALS['timeIni']), '4', '.', '\'') ?> seg.
    <?php if (session::getInstance()->hasAttribute('mvcDbQuery')): ?>
    | <i class="fa fa-database"></i> <?php echo session::getInstance()->getAttribute('mvcDbQuery') ?>
    <?php session::getInstance()->deleteAttribute('mvcDbQuery') ?>
    <?php endif ?>
  </div>
  <?php endif ?>
  <?php if(\mvc\config\configClass::getScope() === 'dev'): ?>
  <div id="mvcIcon" class="shfDevelopmentBar">
    <i class="fa fa-leaf mvcPointer"></i>
  </div>
  <?php endif ?>

<footer>
  <div class="container" >
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-inline">
          <li>
            <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index')?>"><?php echo i18n::__('homePage') ?></a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#about"><?php echo i18n::__('about') ?></a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#services"><?php echo i18n::__('services') ?></a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#contact"><?php echo i18n::__('contact') ?></a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#contact"><?php echo i18n::__('feedback') ?></a>
          </li>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Your Company 2015. All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>


</body>
</html>


<!-- div con información de memoria consumida por el sript y tiempo que ha tomado la ejecución 
<div id="narumInfo">
  Memoria usada: <?php //echo number_format((memory_get_usage() / 1048576), '3', '.', '\'')   ?> megaBytes -
  Tiempo usado: <?php //echo number_format((microtime(true) - $GLOBALS['timeIni']), '4', '.', '\'')   ?> segundos
</div>-->
