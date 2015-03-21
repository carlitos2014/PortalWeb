<?php $cont = count($objUs) ?>
<?php $cont1 = count($objCre) ?>
<?php $cont2 = count($objBit) ?>
<?php $cont3 = count($objRec) ?>
<?php $cont4 = count($objCat) ?>
<?php $cont5 = count($objEve) ?>
<?php $cont6 = count($objOrg) ?>
<?php $cont7 = count($objPat) ?>
<?php $cont8 = count($objPq) ?>
<?php $cont9 = count($objTar) ?>
<?php $cont10 = count($objTip) ?>
<?php $cont11 = count($objEc) ?>
<?php $cont12 = count($objlo) ?>
<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img alt="Brand" src="<?php echo mvc\routing\routingClass::getInstance()->getUrlImg('favicon.ico') ?>"></a>


    </div>

    <!--         Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo routing::getInstance()->getUrlWeb('homePage', 'index') ?>">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Portal Socio-Cultural de Santiago de Cali (Administracion)</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>Leonardo Betancourt (admin) <i class="caret"></i></span>
          </a>
          <ul class="dropdown-menu">
            <!--User image--> 
            <li class="user-header bg-light-blue">
              <img src="<?php echo routing::getInstance()->getUrlImg('admin.jpg') ?>" class="img-circle" alt="User Image" />
              <p>
                Leonardo Betancourt
                <small>Analista y desarrollador web</small>
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
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div> <!-- /.navbar-collapse -->
  </div> <!--/.container-fluid--> 
</nav>


<div class="container container-fluid"

     <div class="page-header">
    <h1><i class="glyphicon glyphicon-screenshot"></i><i class="glyphicon glyphicon-user"></i>&nbsp;Administracion</h1>
  </div>



  <div class="container container-fluid">

    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
              <?php echo $cont ?>
            </h3>
            <p>
<?php echo i18n::__('user') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('userManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php echo $cont1 ?>
            </h3>
            <p>
<?php echo i18n::__('credential') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-android-star"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('credentialManagement') ?><i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php echo $cont2 ?>
            </h3>
            <p>
<?php echo i18n::__('logBook') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('bitacora', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('showLogBook') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>
              <?php echo $cont3 ?>
            </h3>
            <p>
<?php echo i18n::__('rememberMe') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-bookmark"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('rememberMeManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->


    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>
              <?php echo $cont4 . ' ' ?><i class="ion ion-clipboard"></i>
            </h3>
            <p>
<?php echo i18n::__('category') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-grid"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('categoria', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('categoryManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>
              <?php echo $cont5 ?>
            </h3>
            <p>
<?php echo i18n::__('events') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-film-marker"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('eventManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">
          <div class="inner">
            <h3>
              <?php echo $cont6 ?>
            </h3>
            <p>
<?php echo i18n::__('organizations') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('organizationManagement') ?><i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
          <div class="inner">
            <h3>
              <?php echo $cont7 ?>
            </h3>
            <p>
<?php echo i18n::__('partner') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-social-bitcoin-outline"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('partnerManagement') ?><i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
    </div>


    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
              <?php echo $cont8 ?>
            </h3>
            <p>
<?php echo i18n::__('feedbackType') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-speakerphone"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('tipoPqrsf', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('feedbackManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php echo $cont9 ?>
            </h3>
            <p>
<?php echo i18n::__('rates') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-connection-bars"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('tarifa', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('ratesManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php echo $cont10 ?>
            </h3>
            <p>
<?php echo i18n::__('IdType') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('IdTypeManagement') ?><i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>
              <?php echo $cont11 ?>
            </h3>
            <p>
<?php echo i18n::__('EconomicManagement') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('recaudoEconomico', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('EconomicManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->




    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
              <?php echo $cont12 ?>
            </h3>
            <p>
<?php echo i18n::__('place') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-earth"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('localidad', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('eventPlaceManagement') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->



      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              0  <?php //echo $cont12 ?>
            </h3>
            <p>
<?php echo i18n::__('feedbackSpecs') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-earth"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('detallePqrsf', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('feedbackSpecs') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->


      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>
              0 <?php //echo $cont12 ?>
            
            </h3>
            <p>
<?php echo i18n::__('feedbackState') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-earth"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('estadoPqrsf', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('feedbackState') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div><!-- ./col -->
      
      
      
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>
              0 <?php //echo $cont12 ?>
            
            </h3>
            <p>
<?php echo i18n::__('feedback') ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-earth"></i>
          </div>
          <a href="<?php echo routing::getInstance()->getUrlWeb('pqrsf', 'index') ?>" class="small-box-footer">
<?php echo i18n::__('feedback') ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      
      
      
      
      
    </div>








  </div>





