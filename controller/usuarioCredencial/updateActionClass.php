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
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true));
        $usuarioId = request::getInstance()->getPost(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true));
        $credencialId = request::getInstance()->getPost(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::CREDENCIAL_ID, true));

        $ids = array(
            usuarioCredencialTableClass::ID => $id
        );

        $data = array(
            usuarioCredencialTableClass::USUARIO_ID => $usuarioId,
            usuarioCredencialTableClass::CREDENCIAL_ID=> $credencialId
        );

        usuarioCredencialTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('usuarioCredencial', 'index');
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
