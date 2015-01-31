




<pre><?php 



print_r($objUsuarios); ?></pre>





<?php foreach ($objUsuarios as $row): ?>
    <tr>                                 
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['created_at'] ?></td>
        <td><?php echo $row['usuario'] ?></td>
        <td><?php echo $row['deleted_at'] ?></td>
        <td><?php echo $row['updated_at'] ?></td>
        <td><?php echo $row['estado'] ?></td>
        
        <td><a href="index.php?action=update&amp;id=<?php echo $row['ID'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['ID'] ?>">Eliminar</a></td>
    </tr>
<?php endforeach ?>