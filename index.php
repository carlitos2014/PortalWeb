<?php
//include './libs/vendor/i18nClass.php';
//include './libs/vendor/interfaces/i18nInterface.php';
//use i18n\i18nClass as i18n
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Indice de tablas del Sistema</title>
        <link rel="stylesheet" href="web/css/bootstrap-theme.css">
        <link rel="stylesheet" href="web/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="web/css/bootstrap.css">
        <link rel="stylesheet" href="web/css/bootstrap.min.css">
        <link rel="stylesheet" href="web/css/font-awesome.min.css">
        <link rel="stylesheet" href="web/css/main.css">
        <link rel="icon" href="web/img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        
        
        
        <div class="jumbotron">
            <h1>Bienvenido al Indice de Tablas del Sistema</h1>
            <p>Por favor seleccione una tabla</p>

        </div>



        <div class="list-group">
            <a  class="list-group-item active">

            </a>
            <a href="web/index.php/usuario/index" class="list-group-item list-group-item-success">Usuario</a>
            
            
            <a href="web/index.php/credencial/index" class="list-group-item list-group-item-warning">Credencial</a>
            <a href="web/index.php/usuarioCredencial/index" class="list-group-item list-group-item-danger">Credencial de Usuario</a>
            <a href="web/index.php/bitacora/index" class="list-group-item list-group-item-warning">Bitacora</a>
            <a href="web/index.php/recordarMe/index" class="list-group-item list-group-item-info">Recordar Me</a>
            <a href="web/index.php/datosUsuario/index" class="list-group-item list-group-item-success">Datos de Usuario</a>
            <a  class="list-group-item active"></a>
        
        </div>
        
       <footer class="">
            
        </footer>
    
        
        </body>
</html>


