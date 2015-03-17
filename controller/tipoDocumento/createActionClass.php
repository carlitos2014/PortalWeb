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

        $name = trim(request::getInstance()->getPost(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true)));
        

        $this->validate($name);


        $data = array(
            tipoDocumentoTableClass::NOMBRE => $name,
            
        );
        tipoDocumentoTableClass::insert($data);
        routing::getInstance()->redirect('tipoDocumento', 'index');
      } else {
        routing::getInstance()->redirect('tipoDocumento', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

  private function validate($name) {
    $flag = false;


    if (empty($name)) {

      session::getInstance()->setError(i18n::__(00029, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true), true);
    }

    if (strlen($name) > tipoDocumentoTableClass::NOMBRE_LENGTH) {
      session::getInstance()->setError(i18n::__(00030, NULL, 'errors', array('%name%' => $name, '%caracteres%' => tipoDocumentoTableClass::NOMBRE_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE_LENGTH, true), true);
    }

    
    $fields = array(
        tipoDocumentoTableClass::NOMBRE
    );
    $objDocumento = tipoDocumentoTableClass::getAll($fields);

 //validador de existencia de documento

    $fields = array(
        tipoDocumentoTableClass::NOMBRE
    );
    $objDocumento = tipoDocumentoTableClass::getAll($fields);

    foreach ($objDocumento as $key) {
      if ($key->nombre === $name) {
        session::getInstance()->setError(i18n::__(00036, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true), true);
      }
    }
    
    
     if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('tipoDocumento', 'insert');
    }
  }

}
