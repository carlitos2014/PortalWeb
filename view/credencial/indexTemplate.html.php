
<?php //use mvc\routing\routingClass as routing  ?>
<?php $id = credencialBaseTableClass::ID ?>





<center> <table class="table">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de creacion</th>
            <th>Fecha de Actualizacion</th>
            <th>Fecha de Borrado(logico)</th>
            


            <th>Accion</th>
        </tr>
        <?php foreach ($objCredencial as $row): ?>
            <tr>
                <td>
                    <?php echo $row->id ?>
                </td>
                <td>
                    <?php echo $row->nombre ?>
                </td>



                <td>
                    <?php echo $row->created_at ?>
                </td>
                <td>
                    <?php echo $row->updated_at ?>
                </td>


                <td>
                    <?php echo $row->deleted_at ?>
                </td>

                <td>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>

                </td>


            </tr>
        <?php endforeach; ?>
    </table>
    <button type="button" class="btn btn-success" ><a href="web/index.php/usuario/insert">Nuevo</a></button>
</center>

