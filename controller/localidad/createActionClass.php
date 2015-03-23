<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;
use hook\log\logHookClass as log;
use hook\log\logHookClass as log;

/**
 * Description of ejemploClass
 *
 * @author Leonardo Betancourt <leobetacai@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $localidad = trim(request::getInstance()->getPost(localidadTableClass::getNameField(localidadTableClass::NOMBRE, true)));
        $localidad_id = request::getInstance()->getPost(localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true));
        

        $this->validate($localidad, $localidad_id);


        $data = array(
            localidadTableClass::NOMBRE => $localidad,
            localidadTableClass::LOCALIDAD_ID => $localidad_id
        );
        localidadTableClass::insert($data);
        log::register('crear','localidad');
        routing::getInstance()->redirect('localidad', 'index');
      } else {
        routing::getInstance()->redirect('localidad', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

  private function validate($localidad, $localidad_id) {
    $flag = false;


    if (empty($localidad)) {

      session::getInstance()->setError(i18n::__(00045, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(localidadTableClass::getNameField(localidadTableClass::NOMBRE, true), true);
    }

    if (strlen($localidad) > localidadTableClass::NOMBRE_LENGTH) {
      session::getInstance()->setError(i18n::__(00046, NULL, 'errors', array('%user%' => $localidad, '%caracteres%' => localidadTableClass::NOMBRE_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(localidadTableClass::getNameField(localidadTableClass::NOMBRE, true), true);
    }

    
    $fields = array(
        localidadTableClass::NOMBRE
    );
    $objlocalidad = localidadTableClass::getAll($fields);

    foreach ($objlocalidad as $key) {
      if ($key->nombre === $localidad) {
        session::getInstance()->setError(i18n::__(00047, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(localidadTableClass::getNameField(localidadTableClass::NOMBRE, true), true);
      }
    }
    
    
   if (empty($localidad_id)) {

      session::getInstance()->setError(i18n::__(00048, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true), true);
    }
    
    if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('localidad', 'insert');
    }
  }

}
