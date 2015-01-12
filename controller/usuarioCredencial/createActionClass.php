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
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $usuarioId = request::getInstance()->getPost(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true));
        $credencialId = request::getInstance()->getPost(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::CREDENCIAL_ID, true));

//        if (strlen($usuarioId) > usuarioTableClass::USER_LENGTH) {
//          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => usuarioTableClass::USER_LENGTH)), 00001);
//        }

        $data = array(
            usuarioCredencialTableClass::USUARIO_ID=> $usuarioId,
            usuarioCredencialTableClass::CREDENCIAL_ID => $credencialId
        );
        usuarioCredencialTableClass::insert($data);
        routing::getInstance()->redirect('usuarioCredencial', 'index');
      } else {
        routing::getInstance()->redirect('usuarioCredencial', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
