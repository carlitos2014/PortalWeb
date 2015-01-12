
<?php use mvc\routing\routingClass as routing ?>
<?php $usu = usuarioTableClass::USER ?>
<?php $id = recordarMeTableClass::ID ?>
<div class="container container-fluid">
  <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'deleteSelect') ?>" method="POST">
    
    <table class="table">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th>ID</th>
          <th>Usuario ID</th>
          <th>Direccion IP(IPv4/IPv6)</th>
          <th>Cookie Hash</th>
          <th>Fecha de Creacion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objRecordarMe as $RecordarMe): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $RecordarMe->$id ?>"></td>
            <td><?php echo $RecordarMe->$id ?></td>
            <td><?php echo $RecordarMe->usuario_id ?></td>
            <td><?php echo $RecordarMe->ip_address ?></td>
            <td><?php echo $RecordarMe->hash_cookie ?></td>
            <td><?php echo $RecordarMe->created_at?></td>
            <td>
                <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
<!--              <a href="<?php //echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(usuarioTableClass::ID => $usuario->$id)) ?>" class="btn btn-warning">Editar</a>-->
              <a href="#" onclick="confirmarEliminar(<?php echo $RecordarMe->$id ?>)" class="btn btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo recordarMeTableClass::getNameField(recordarMeTableClass::ID, true) ?>">
  </form>
<div style="margin-bottom: 10px; margin-top: 30px" align="center">
<!--      <a href="<?php //echo routing::getInstance()->getUrlWeb('usuario', 'insert') ?>" class="btn btn-success">Nuevo</a>-->
      <a href="#" class="btn btn-danger " onclick="borrarSeleccion()">Borrar Seleccion</a>
    </div>


</div>
