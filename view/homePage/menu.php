<?php use mvc\i18n\i18nClass as i18n?>
<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\session\sessionClass as session?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>"><i class="glyphicon glyphicon-globe"><?php echo i18n::__('portalCultural') ?></i></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <a type="submit" class="btn btn-success " href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'insert') ?>" class="btn btn-info"> <?php echo i18n::__('register') ?></a>
          <a type="submit" class="btn btn-success " href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'index') ?>" class="btn btn-success"> <?php echo i18n::__('login') ?></a>
          
           <ul class="nav navbar-nav navbar-right">

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span><?php echo session::getInstance()->getUserName()?> <i class="caret"></i></span>
          </a>
          <ul class="dropdown-menu">
            <!--User image--> 
            <li class="user-header bg-light-blue">
              <img src="<?php echo routing::getInstance()->getUrlImg('admin.jpg')  ?>" class="img-circle" alt="User Image" />
              <p>
                Leonardo Betancourt
                <small>Analista y desarrollador web </small>
                
              </p>
            </li>
            <!--Menu Body--> 
            <li class="user-body">

            </li>
            <!--Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Perfil</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>" class="btn btn-default btn-flat"><?php echo i18n::__('logout')?></a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
          
          
        </div>
      </form>
    </div>
  </div>
</nav>