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
 * @author Gallego Daniel <gallego9351@gmail.com>
 */
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $name = request::getInstance()->getPost(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true));
       

        $ids = array(
            tipoDocumentoTableClass::NOMBRE => $ids
        );

        $data = array(
            tipoDocumentoTableClass::NOMBRE => $name
        );

        tipoDocumentoTableClass::update($ids, $data);
        log::register('modificar','tipo_documento');
      }

      routing::getInstance()->redirect('tipoDocumento', 'index');
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
