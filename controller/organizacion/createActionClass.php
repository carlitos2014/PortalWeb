<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;
use hook\log\logHookClass as log;

/**
 * Description of ejemploClass
 *
 * @authorLeonardo Betancourt <leobetacai@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $nombre = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true));
        $direccion = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true));
        $telefono = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true));
        $correo = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::CORREO, true));
        $fax = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::FAX, true));
        $webpage = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true));

        $this->validate($webpage, $fax, $correo, $telefono, $direccion, $nombre);


        $data = array(
            organizacionTableClass::NOMBRE => $nombre,
            organizacionTableClass::DIRECCION => $direccion,
            organizacionTableClass::TELEFONO => $telefono,
            organizacionTableClass::CORREO => $correo,
            organizacionTableClass::FAX => $fax,
            organizacionTableClass::PAGINA_WEB => $webpage
        );
        organizacionTableClass::insert($data);
        log::register('crear','organizacion');
        routing::getInstance()->redirect('organizacion', 'index');
      } else {
        routing::getInstance()->redirect('organizacion', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

  private function validate($webpage, $fax, $correo, $telefono, $direccion, $nombre) {
    $flag = false;


    if (empty($nombre)) {

      session::getInstance()->setError(i18n::__(00027, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true), true);
    }

    
    if (empty($telefono)) {

      session::getInstance()->setError(i18n::__(00027, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true), true);
    }
    
    if (empty($direccion)) {

      session::getInstance()->setError(i18n::__(00027, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true), true);
    }
    
    if (empty($correo)) {

      session::getInstance()->setError(i18n::__(00027, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::CORREO, true), true);
    }
    
    if (empty($webpage)) {

      session::getInstance()->setError(i18n::__(00027, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true), true);
    }
    
    
    
    
    
    
    
    
    
    
//    if (strlen($usuario) > organizacionTableClass::USER_LENGTH) {
//      session::getInstance()->setError(i18n::__(00004, NULL, 'errors', array('%user%' => $usuario, '%caracteres%' => organizacionTableClass::USER_LENGTH)));
//
//      $flag = true;
//      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::USER, true), true);
//    }
//
//    if ($password !== $password2) {
//
//      session::getInstance()->setError(i18n::__(00005, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::PASSWORD, true), true);
//    }
//
//    if (empty($password)) {
//
//      session::getInstance()->setError(i18n::__(00007, NULL, 'errors'));
//      $flag = true;
//
//      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::USER, true), true);
//    }
//
//
//    if (empty($password2)) {
//
//      session::getInstance()->setError(i18n::__(00009, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::PASSWORD, true), true);
//      session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::USER, true), true);
//    }

    $fields = array(
        organizacionTableClass::NOMBRE
    );
    $objOrganizacion = organizacionTableClass::getAll($fields);

    foreach ($objOrganizacion as $key) {
      if ($key->nombre === $nombre) {
        session::getInstance()->setError(i18n::__(00028, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true), true);
      }
    }


    if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('organizacion', 'insert');
    }
  }

}
