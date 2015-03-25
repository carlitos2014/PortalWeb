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
class reportActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      
    //  $this->mensaje = 'Hola a todos';
        
        $fields= array(
            
        pqrsfTableClass::ID,
        pqrsfTableClass::TIPO_PQRS_ID,
        pqrsfTableClass::TITULO,
        pqrsfTableClass::USUARIO_ID
            
        );
        
      $this->objPqrsfReport=  pqrsfTableClass::getAll($fields);
      $this->defineView('index', 'pqrsf', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
