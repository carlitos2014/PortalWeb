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

      $fields = array(
          detallePqrsTableClass::ID,
          
          detallePqrsTableClass::PQRS_ID,
          detallePqrsTableClass::RESPUESTA,
          detallePqrsTableClass::USUARIO_ID   
          );
      $orderBy = array(
          detallePqrsTableClass::ID
      );
      $this->objDetallePqrsf = detallePqrsTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'detallePqrsf', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}