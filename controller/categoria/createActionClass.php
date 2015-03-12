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

        $nombre = trim(request::getInstance()->getPost(categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true)));
       
        $this->validate($nombre);
        
        $data = array(
            categoriaTableClass::NOMBRE => $nombre,
        );
        categoriaTableClass::insert($data);
        routing::getInstance()->redirect('nombre', 'index');
      } else {
        routing::getInstance()->redirect('categoria', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

  private function validate($nombre) {
    $flag = false;


    if (empty($nombre)) {

      session::getInstance()->setError(i18n::__(00014, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(categoriaTableClass::getNameField(categoriaTableClass::USER, true), true);
    }

    if (strlen($nombre) > categoriaTableClass::NOMBRE_LENGTH) {
      session::getInstance()->setError(i18n::__(00013, NULL, 'errors', array('%cat%' => $nombre, '%caracteres%' => categoriaTableClass::NOMBRE_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true), true);
    }

   $fields = array(
        categoriaTableClass::NOMBRE
    );
    $objCategoria = categoriaTableClass::getAll($fields);

    foreach ($objCategoria as $key) {
      if ($key->nombre === $nombre) {
        session::getInstance()->setError(i18n::__(00012, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true), true);
      }
    }

if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('categoria', 'insert');
    }
  }

}
