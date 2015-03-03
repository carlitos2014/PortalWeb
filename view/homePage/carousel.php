<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo routing::getInstance()->getUrlImg('cultural.JPG') ?>" alt="Centro Cultural">
      <div class="carousel-caption">
        <h3>CENTRO DE CULTURA</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo routing::getInstance()->getUrlImg('isaac.JPG') ?>" alt="Teatro Jorge Isaac">
      <div class="carousel-caption">
        <h3>TEATRO JORGE ISAAC</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo routing::getInstance()->getUrlImg('libros.jpg') ?>" alt="Biblioteca">
      <div class="carousel-caption">
        <h3>BIBLIOTECA PUBLICA</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo routing::getInstance()->getUrlImg('muestra.jpg') ?>" alt="Bailes Culturales">
      <div class="carousel-caption">
        <h3>BAILES CULTURALES</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo routing::getInstance()->getUrlImg('pintura.jpg') ?>" alt="Pinturas">
      <div class="carousel-caption">
        <h3>ARTE</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo routing::getInstance()->getUrlImg('terminal.jpg') ?>" alt="Terminal de Cali">
      <div class="carousel-caption">
        <h3>TERMINAL DE CALI</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo routing::getInstance()->getUrlImg('zoo.jpg') ?>" alt="Zoologico de Cali">
      <div class="carousel-caption">
        <h3>ZOOLOGICO DE CALI</h3>
      </div>
    </div>
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
  $('.carousel').carousel();
</script>
