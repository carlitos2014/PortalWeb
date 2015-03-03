<?php use mvc\i18n\i18nClass as i18n?>
<?php use mvc\routing\routingClass as routing ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"><i class="glyphicon glyphicon-globe"><?php echo i18n::__('portalCultural') ?></i></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" placeholder="<?php echo i18n::__('email') ?>" class="form-control">
          <input type="password" placeholder="<?php echo i18n::__('pass') ?>" class="form-control">
          <button type="submit" class="btn btn-success "><?php echo i18n::__('login') ?></button>
          <button type="submit" class="btn btn-info"><?php echo i18n::__('register') ?></button>
        </div>
      </form>
    </div>
  </div>
</nav>