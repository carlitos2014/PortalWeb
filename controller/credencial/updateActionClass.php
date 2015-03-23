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
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(credencialTableClass::getNameField(credencialTableClass::ID, true));
        $nombre = request::getInstance()->getPost(credencialTableClass::getNameField(credencialTableClass::NOMBRE, true));
        

        $ids = array(
            credencialTableClass::ID => $id
        );

        $data = array(
            credencialTableClass::NOMBRE=> $nombre
            
        );

        credencialTableClass::update($ids, $data);
        log::register('modificar','credencial');
      }

      routing::getInstance()->redirect('credencial', 'index');
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
