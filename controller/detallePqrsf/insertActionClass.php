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
 * @author Leonardo Betancourt <leobetacai@gmail.com>
 */
class insertActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      //$this->mensaje = 'HOLA MUNDO';
     
//       $fields = array(
//       detallePqrsTableClass::ID,
//           detallePqrsTableClass::PQRS_ID,
//       detallePqrsTableClass::RESPUESTA,
//       detallePqrsTableClass::USUARIO_ID);
       $fields=array(usuarioTableClass::ID,
       usuarioTableClass::USER);
       $this->objIdUsuario = usuarioTableClass::getAll($fields);
       
       $fields1=array(tipoPqrsfTableClass::ID,
       tipoPqrsfTableClass::NOMBRE);
       
      $this->objtipoPqrsf= tipoPqrsfTableClass::getAll($fields1);
          
      
      $this->defineView('insert', 'detallePqrsf', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
