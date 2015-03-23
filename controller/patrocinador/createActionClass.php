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
 * @author Leonardo Betancourt <leobetacai@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {


        $nombre = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true));
        $correo = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true));
        $telefono = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true));
        $direccion = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true));

        $this->validate($nombre,$correo, $telefono, $direccion);


        $data = array(
            patrocinadorTableClass::NOMBRE => $nombre,
            patrocinadorTableClass::CORREO => $correo,
            patrocinadorTableClass::TELEFONO => $telefono,
            
            patrocinadorTableClass::DIRECCION => $direccion
        );
        patrocinadorTableClass::insert($data);
       log::register('crear','patrocinador');
        routing::getInstance()->redirect('patrocinador', 'index');
      } else {
        routing::getInstance()->redirect('patrocinador', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

  private function validate($nombre, $correo,$telefono, $direccion) {
    $flag = false;




    if (empty($nombre)) {

      session::getInstance()->setError(i18n::__(00050, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true), true);
    }

    if (strlen($nombre) > patrocinadorTableClass::NOMBRE_LENGTH) {
      session::getInstance()->setError(i18n::__(00051, NULL, 'errors', array('%nombre%' => $nombre, '%letras%' => patrocinadorTableClass::NOMBRE_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true), true);
    }

    if (empty($telefono)) {

      session::getInstance()->setError(i18n::__(00052, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true), true);
    }

    if (strlen($telefono) > patrocinadorTableClass::TELEFONO_LENGTH) {
      session::getInstance()->setError(i18n::__(00049, NULL, 'errors', array('%tel%' => $telefono, '%numeros%' => patrocinadorTableClass::TELEFONO_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true), true);
    }

    if (empty($correo)) {

      session::getInstance()->setError(i18n::__(00053, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true), true);
    }

    if (strlen($correo) > patrocinadorTableClass::CORREO_LENGTH) {
      session::getInstance()->setError(i18n::__(00054, NULL, 'errors', array('%nom%' => $correo, '%let%' => patrocinadorTableClass::CORREO_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true), true);
    }

    if (empty($direccion)) {

      session::getInstance()->setError(i18n::__(00055, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true), true);
    }





    $fields = array(
        patrocinadorTableClass::NOMBRE
    );
    $objPatrocinador = patrocinadorTableClass::getAll($fields);

    foreach ($objPatrocinador as $key) {
      if ($key->nombre === $nombre) {
        session::getInstance()->setError(i18n::__(00056, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true), true);
      }
    }


    if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('patrocinador', 'insert');
    }
  }

}
