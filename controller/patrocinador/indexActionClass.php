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
 * @author  Leonardo Betancourt <leobetacai@gmail.com>
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {

      $fields = array(
          patrocinadorTableClass::ID,
          patrocinadorTableClass::NOMBRE,
          patrocinadorTableClass::DIRECCION,
          patrocinadorTableClass::TELEFONO,
          patrocinadorTableClass::CORREO,
      );
      $orderBy = array(
          patrocinadorTableClass::NOMBRE
      );
      $this->objPatrocinador = patrocinadorTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'patrocinador', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
