<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of ejemploClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {

      //constantes a contar
      $fu = array(usuarioTableClass::ID);
      $fcre = array(credencialTableClass::ID);
      $fb = array(bitacoraTableClass::ID);
      $fr = array(recordarmeTableClass::ID);
      $fcat = array(categoriaTableClass::ID);
      $fev = array(eventoTableClass::ID);
      $for = array(organizacionTableClass::ID);
      $fpat = array(patrocinadorTableClass::ID);
      $fpq = array(tipoPqrsfTableClass::ID);
      $ftar = array(tarifaTableClass::ID);
      $ftip = array(tipoDocumentoTableClass::ID);
      $fec = array(recaudoEconomicoTableClass::ID);
      $lo =array(localidadTableClass::ID);
      
      $this->defineView('index', 'homePage', session::getInstance()->getFormatOutput());

      $this->objUs = usuarioTableClass::getAll($fu, FALSE);
      $this->objCre = credencialTableClass::getAll($fcre, FALSE);
      $this->objBit = bitacoraTableClass::getAll($fb, FALSE);
      $this->objRec = recordarmeTableClass::getAll($fr, FALSE);
      $this->objCat = categoriaTableClass::getAll($fcat, FALSE);
      $this->objEve = eventoTableClass::getAll($fev, FALSE);
      $this->objOrg = organizacionTableClass::getAll($for, FALSE);
      $this->objPat = patrocinadorTableClass::getAll($fpat, FALSE);
      $this->objPq = tipoPqrsfTableClass::getAll($fpq, FALSE);
      $this->objTar = tarifaTableClass::getAll($ftar, FALSE);
      $this->objTip = tipoDocumentoTableClass::getAll($ftip, FALSE);
      $this->objEc = recaudoEconomicoTableClass::getAll($fec, FALSE);
      $this->objlo = localidadTableClass::getAll($lo, FALSE);
      
      
      
    }catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo $exc->getTraceAsString();
    }
  }

}
