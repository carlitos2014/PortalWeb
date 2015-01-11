
<?php

use mvc\routing\routingClass as routing ?>
<?php //$id = usuarioBaseTableClass::ID ?>



<body>

    <table class="table">

        <tr>
            <th>Indice</th>
            <th>Id de Usuario</th>
            <th>Ip de origen</th>
            <th>Hash de Cookie</th>
            <th>Fecha de Creacion</th>
<!--            <th></th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Borrado</th>-->


            <th>Accion</th>
        </tr>
        <?php foreach ($objRecordarMe as $row): ?>
            <tr>
                <td>
                    <?php echo $row->id ?>
                </td>
                <td>
                    <?php echo $row->usuario_id?>
                </td>



                <td>
                    <?php echo $row->ip_address ?>
                </td>
                <td>
                    <?php echo $row->hash_cookie ?>
                </td>

                
                
                 <td>
                    <?php echo $row->create_at ?>
                </td>
                
                
                
                
                
                
                <td>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
             


    
        <?php endforeach; ?>



    </table>

<center><button type="button" class="btn btn-success" ><a href="web/index.php/usuario/create">Nuevo</a></button><center>

        </body>



