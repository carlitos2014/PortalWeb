
<?php

use mvc\routing\routingClass as routing ?>




<div class="jumbotron">




    <div style="margin-bottom: 0px; margin-top: 0px" align="left">
        <a href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'index') ?>" class="btn btn-success">Login</a>


        <a href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>" class="btn btn-danger">Log out</a>
    </div>

    <h1>Bienvenido al Indice de Tablas del Sistema</h1>
    <p>Por favor seleccione una tabla</p>

</div>



<div class="list-group">
    <a  class="list-group-item active">

    </a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>" class="list-group-item list-group-item-success">Usuario</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>" class="list-group-item list-group-item-warning">Credencial</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index') ?>" class="list-group-item list-group-item-danger">Credencial de Usuario</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'index') ?>" class="list-group-item list-group-item-warning">Bitacora</a>
    <a href="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'index') ?>" class="list-group-item list-group-item-info">Recordar Me</a>
<!--            <a href="<?php //echo routing::getInstance()->getUrlWeb('datosUsuario', 'index')       ?>" class="list-group-item list-group-item-success">Datos de Usuario</a>-->
</div>




