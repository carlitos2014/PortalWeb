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
class insertActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      //$this->mensaje = 'HOLA MUNDO';
            $fields=array(localidadTableClass::ID, localidadTableClass::NOMBRE);
            $this->objLocalidad = localidadTableClass::getAll($fields);
            
            $fields1=array(tipoDocumentoTableClass::ID, tipoDocumentoBaseTableClass::NOMBRE);
            $this->objTipoDocumento =  tipoDocumentoTableClass::getAll($fields1);
            
            $fields2= array( organizacionTableClass::ID, organizacionTableClass::NOMBRE);
            $this-> objOrganizacion =  organizacionTableClass::getAll($fields2);

      $this->defineView('insert', 'usuario', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
