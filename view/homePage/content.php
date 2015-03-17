<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\routing\routingClass as routing ?>


<!--  <div id="search" >
    <form method="get" action="#">
      <div>
        <input type="text" name="s" id="search-text" value="" />
        <input type="submit" id="search-submit" value="GO" />
      </div>
    </form>
  </div>
  <div style="clear: both;"></div>-->

<div id="content">
  <div id="left">
    <h2><?php echo i18n::__('welcome') ?>!!</h2>
    <p><strong>Conozca un poco Sobre Cali</strong></p>
    <p>Cali, oficialmente Santiago de Cali, es la capital del departamento del Valle del Cauca, 
      la tercera ciudad más poblada de Colombia. Tiene un área de 564 km² y una longitud de 17 km de 
      Sur a Norte y 12 km de Oriente a Occidente. La ciudad forma parte del Área Metropolitana de 
      Santiago de Cali, junto con los municipios aledaños a ésta. Fue fundada el 25 de julio de 1536 por 
      Sebastián de Belalcázar, lo que la convierte en una de las ciudades más antiguas de América.
      Cuenta con una de las economías de mayor crecimiento e infraestructura en el país debido a su ubicación 
      geográfica, la ciudad se encuentra a 115 km de Buenaventura, el principal puerto marítimo de Colombia 
      en el océano Pacífico. Cali es uno de los principales centros económicos e industriales de Colombia, 
      además de ser el principal centro urbano, cultural, económico, industrial y agrario del suroccidente del 
      país. Como capital departamental, alberga las sedes de la Gobernación del Valle del Cauca, la Asamblea 
      Departamental, el Tribunal Departamental, la Fiscalía General, Instituciones y Organismos del Estado, 
      también es la sede de empresas oficiales como la municipal EMCALI.
      Es además un simple centro deportivo de Colombia. Ha sido la única ciudad colombiana en organizar los 
      Juegos Panamericanos, siete Paradas Mundiales de Ciclismo en Pista, el Campeonato Mundial de Patinaje, 
      y la IX edición de los Juegos Mundiales, siendo la primer ciudad latinoamericana en ser anfitriona de 
      este certamen.
      Ha sido nombrada por los mejores cantantes de Salsa en el mundo como "La Capital Mundial de la Salsa",
      pues a pesar de ser de origen cubano, o puertorriqueño, es en Cali donde se ha vuelto más popular 
      (aunque el ritmo a perdido popularidad en Latinoamerica). <a href=”http://es.wikipedia.org/wiki/Cali”>Citado de Wikipedia.</a></p>
  </div>
  <div id="right">
    <h2><?php echo i18n::__('latestNews') ?></h2>
    <h3><?php echo i18n::__('events') ?></h3>
    <p>Aqui Veremos informacion sobre las ultimas actualizaciones de eventos...</p><a href="#"><?php echo i18n::__('seeMore') ?></a>
    <h2>Quieres saber mas?</h2>
    <ul>
      <li name="li1" id="li1"><a href="http://es.wikipedia.org/wiki/Cali#Literatura"><?php echo i18n::__('literature') ?></a></li>
      <li name="li2" id="li2"><a href="http://es.wikipedia.org/wiki/Cali#Salsa_cale.C3.B1a"><?php echo i18n::__('music') ?></a></li>
      <li name="li3" id="li3"><a href="http://es.wikipedia.org/wiki/Cali#Gastronom.C3.ADa"><?php echo i18n::__('dining') ?></a></li>
      <li name="li4" id="li4"><a href="http://es.wikipedia.org/wiki/Cali#Bibliotecas"><?php echo i18n::__('libraries') ?></a></li>
      <li name="li5" id="li5"><a href="http://es.wikipedia.org/wiki/Cali#Museos"><?php echo i18n::__('museums') ?></a></li>
      <li name="li6" id="li6"><a href="http://es.wikipedia.org/wiki/Cali#Teatros"><?php echo i18n::__('theater') ?></a></li>
      <li name="li7" id="li7"><a href="http://es.wikipedia.org/wiki/Cali#Centros_de_Convenciones"><?php echo i18n::__('conventionCenter') ?></a></li>
      <li name="li8" id="li8"><a href="http://es.wikipedia.org/wiki/Cali#Eventos"><?php echo i18n::__('events') ?></a></li>
      <li name="li9" id="li9"><a href="http://es.wikipedia.org/wiki/Cali#Centros_culturales"><?php echo i18n::__('cultureCenter') ?></a></li>
    </ul>
    <h2><?php echo i18n::__('contact') ?></h2>
    <a href="#" ><img alt="Facebook" src="https://lh6.googleusercontent.com/-CYt37hfDnQ8/T3nNydojf_I/AAAAAAAAAr0/P5OtlZxV4rk/s32/facebook32.png" /></a>
    <a href="#" ><img alt="Twitter"src="https://lh6.googleusercontent.com/--aIk2uBwEKM/T3nN1x09jBI/AAAAAAAAAs8/qzDsbw3kEm8/s32/twitter32.png" /></a>
    <a href="#" ><img alt="Instagram" src="https://lh5.googleusercontent.com/-vBqtz2iv2BE/UIqE3LQyFMI/AAAAAAAABgA/TJ4W-vIBjsc/s32/instagram32.png"/></a>
  </div>
</div>