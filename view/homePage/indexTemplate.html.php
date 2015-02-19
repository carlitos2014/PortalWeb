
<?php

use mvc\routing\routingClass as routing ?>




 <div class="page-header">
    <h1><i class="glyphicon glyphicon-screenshot"></i><i class="glyphicon glyphicon-user"></i>Administracion</h1>
  </div>

<p>Hola</p>

<div class="list-group">
    <a  class="list-group-item active">

    </a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>" class="list-group-item list-group-item-success">Usuario</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>" class="list-group-item list-group-item-warning">Credencial</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index') ?>" class="list-group-item list-group-item-danger">Credencial de Usuario</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'index') ?>" class="list-group-item list-group-item-warning">Bitacora</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'index') ?>" class="list-group-item list-group-item-info">Recordar Me</a>
            <a href="<?php echo routing::getInstance()->getUrlWeb('datosUsuario', 'index')       ?>" class="list-group-item list-group-item-success">Datos de Usuario</a>
</div>




