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

        $nombre = trim(request::getInstance()->getPost(categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true)));
       
        $this->validate($nombre);
        
        $data = array(
            categoriaTableClass::NOMBRE => $nombre,
        );
        categoriaTableClass::insert($data);
        log::register('crear','categoria');
        routing::getInstance()->redirect('nombre', 'index');
      } else {
        routing::getInstance()->redirect('categoria', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
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
