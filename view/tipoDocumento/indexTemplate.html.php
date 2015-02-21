<?php use mvc\i18n\i18nClass as i18n?>
<?php use mvc\routing\routingClass as routing ?>
<?php $usu = usuarioTableClass::USER ?>
<?php $id = recordarMeTableClass::ID ?>

<div class="container container-fluid">
  <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'deleteSelect') ?>" method="POST">

    <table class="table">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th><?php echo i18n::__('id')?></th>
          <th><?php echo i18n::__('user_id')?></th>
          <th>Direccion IP(IPv4/IPv6)</th>
          <th>Cookie Hash</th>
          <th><?php echo i18n::__('creationDate')?></th>
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
            <td><?php echo $RecordarMe->created_at ?></td>
            <td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </form>
  <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'delete') ?>" method="POST">
    <input type="hidden" id="idDelete" name="<?php echo recordarMeTableClass::getNameField(recordarMeTableClass::ID, true) ?>">
  </form>
  <div style="margin-bottom: 10px; margin-top: 30px" align="center">
    <a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"  class="btn btn-info" data-toggle="popover" title="<?php echo i18n::__('homePage') ?>" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a>  
    <a href="#" class="btn btn-danger " onclick="borrarSeleccion()" data-toggle="popover" title="Borrar seleccion" data-content="borrar seleccion"><i class="glyphicon glyphicon-check"></i><i class="glyphicon glyphicon-trash"></i></a>
  </div>


</div>