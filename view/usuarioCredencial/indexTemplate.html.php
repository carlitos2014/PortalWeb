<?php use mvc\routing\routingClass as routing ?>
<?php $id = usuarioCredencialBaseTableClass::ID ?>



<body>

    <table class="table">

        <tr>
            <th>Indice</th>
            <th>identificacion de usuario</th>
            <th>Identificacion de Credencial</th>
            <th>Creado en</th>
<!--            <th></th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Borrado</th>-->


            <th>Accion</th>
        </tr>
        <?php foreach ($objUsuarioCredencial as $row): ?>
            <tr>
                <td>
                    <?php echo $row->id ?>
                </td>
                <td>
                    <?php echo $row->usuario_id ?>
                </td>



                <td>
                    <?php echo $row->credencial_id ?>
                </td>
                <td>
                    <?php echo $row->created_at ?>
                </td>

                <td>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>

                </td>
                



            </tr>
        <?php endforeach; ?>



    </table>

<center><button type="button" class="btn btn-success" ><a href="index.php/usuarioCredencial/create">Nuevo</a></button><center>

        </body>