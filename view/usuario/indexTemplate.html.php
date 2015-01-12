
<?php use mvc\routing\routingClass as routing ?>
<?php $usu = usuarioTableClass::USER ?>
<?php $id = usuarioTableClass::ID ?>
<div class="container container-fluid">
  <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteSelect') ?>" method="POST">
    
    <table class="table">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th>ID</th>
          <th>Usuario</th>
          <th>Ultimo Ingreso</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objUsuarios as $usuario): ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
            <td><?php echo $usuario->$id ?></td>
            <td><?php echo $usuario->$usu ?></td>
            <td><?php echo $usuario->last_login_at ?></td>
            
            <td>
                <!--              <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
              <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(usuarioTableClass::ID => $usuario->$id)) ?>" class="btn btn-warning">Editar</a>
              <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
  </form>
<div style="margin-bottom: 10px; margin-top: 30px" align="center">
      <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'insert') ?>" class="btn btn-success">Nuevo</a>
      <a href="#" class="btn btn-danger " onclick="borrarSeleccion()">Borrar Seleccion</a>
    </div>


</div>