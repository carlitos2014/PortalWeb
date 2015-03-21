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
 * @author Leonardo Betancourt <leobetacai@gmail.com>
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {

      $fields = array(
          eventoTableClass::ID,
          eventoTableClass::NOMBRE,
          eventoTableClass::FECHA_INICIAL_EVENTO,
          eventoTableClass::FECHA_FINAL_EVENTO,
          eventoTableClass::COSTO,
          eventoTableClass::CATEGORIA_ID,
          eventoTableClass::USUARIO_ID,
          
          );
      $orderBy = array(
          eventoTableClass::NOMBRE
      );
      $this->objEvento = eventoTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'evento', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}