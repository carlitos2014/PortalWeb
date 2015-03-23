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
class deleteActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(recordarMeTableClass::getNameField(recordarmeTableClass::ID, true));
        
        $ids = array(
            recordarMeTableClass::ID => $id
        );
        recordarMeTableClass::delete($ids, false);
        log::register('borrar','recordarMe');
        routing::getInstance()->redirect('recordarMe', 'index');
      } else {
        routing::getInstance()->redirect('recordarMe', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
