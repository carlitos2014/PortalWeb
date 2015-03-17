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
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $des = request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true));
        $value = request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::VALOR, true));
       

        $this->validate($descripcion, $valor);
// esto mnmes un comentario
        

        $data = array(
            tarifaTableClass::DESCRIPCION => $des,
            tarifaTableClass::VALOR => ($value)
        );
        tarifaTableClass::insert($data);
        routing::getInstance()->redirect('tarifa', 'index');
      } else {
        routing::getInstance()->redirect('tarifa', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

  private function validate($des, $value) {
    $flag = false;


    if (empty($des)) {

      session::getInstance()->setError(i18n::__(00031, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true), true);
    }

    if (strlen($des) > tarifaTableClass::DESCRIPCION_LENGTH) {
      session::getInstance()->setError(i18n::__(00032, NULL, 'errors', array('%desc%' => $des, '%caracteres%' => tarifaTableClass::DESCRIPCION_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(usuarioTableClass::getNameField(tarifaTableClass::DESCRIPCION_LENGTH, true), true);
    }

    
    if (empty($value)) {

      session::getInstance()->setError(i18n::__(00033, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(tarifaTableClass::getNameField(tarifaTableClass::VALOR, true), true);
    }


    $fields = array(
        tarifaTableClass::DESCRIPCION
    );
    $objTarifa = tarifaTableClass::getAll($fields);
    
    
    //validador de existencia de tarifa

    $fields = array(
        tarifaTableClass::DESCRIPCION
    );
    $objTarifa = tarifaTableClass::getAll($fields);

    foreach ($objTarifa as $key) {
      if ($key->descripcion === $des) {
        session::getInstance()->setError(i18n::__(00034, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true), true);
      }
    }
    
 
     //condicion de caracteres invalidos $des
    
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for ($i = 0; $i < strlen($des); $i++) {
      if (strpos($caracteres, substr($des, $i, 1)) === false) {

        session::getInstance()->setError(i18n::__(00011, NULL, 'errors'),array('%char%' => $des));
        $flag = true;
        session::getInstance()->setFlash(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true), true);
      }
    }
    
    //condicion de caracteres invalidos $value
    
    $caracteres1 = "0123456789";

    for ($i = 0; $i < strlen($value); $i++) {
      if (strpos($caracteres1, substr($value, $i, 1)) === false) {

        session::getInstance()->setError(i18n::__(00011, NULL, 'errors'),array('%char%' => $value));
        $flag = true;
        session::getInstance()->setFlash(tarifaTableClass::getNameField(tarifaTableClass::VALOR, true), true);
      }
    }
    
    if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('tarifa', 'insert');
    }
  }

}
