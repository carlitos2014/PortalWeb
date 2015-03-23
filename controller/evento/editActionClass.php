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
class editActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->hasRequest(eventoTableClass::ID)) {
        $fields = array(
            eventoTableClass::ID,
            eventoTableClass::IMAGEN,
            eventoTableClass::NOMBRE,
            eventoTableClass::DESCRIPCION,
            eventoTableClass::FECHA_INICIAL_EVENTO,
            eventoTableClass::FECHA_FINAL_EVENTO,
            eventoTableClass::LUGAR_LATITUD,
            eventoTableClass::LUGAR_LONGITUD,
            eventoTableClass::DIRECCION,
            eventoTableClass::COSTO,
            eventoTableClass::USUARIO_ID,
            eventoTableClass::CATEGORIA_ID,
        eventoTableClass::FECHA_INICIAL_PUBLICACION,
            eventoTableClass::FECHA_FINAL_PUBLICACION,
            
            
            );
        $where = array(
            eventoTableClass::ID => request::getInstance()->getRequest(eventoTableClass::ID)
        );
        
            $fields3= array(categoriaTableClass::ID, categoriaTableClass::NOMBRE);
            $this-> objCategoria=  categoriaTableClass::getAll($fields3);
            
            $fields4= array(usuarioTableClass::ID, usuarioTableClass::USER);
            $this-> objUsuario= usuarioTableClass::getAll($fields4);
        $this->objEvento = eventoTableClass::getAll($fields, true, null, null, null, null, $where);
        $this->defineView('edit', 'evento', session::getInstance()->getFormatOutput());
      } else {
        routing::getInstance()->redirect('evento', 'index');
      }
//      if (request::getInstance()->isMethod('POST')) {
//
//        $evento = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::USUARIO, true));
//        $password = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::PASSWORD, true));
//
//        if (strlen($evento) > eventoTableClass::USUARIO_LENGTH) {
//          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => eventoTableClass::USUARIO_LENGTH)), 00001);
//        }
//
//        $data = array(
//            eventoTableClass::USUARIO => $evento,
//            eventoTableClass::PASSWORD => md5($password)
//        );
//        eventoTableClass::insert($data);
//        routing::getInstance()->redirect('default', 'index');
//      } else {
//        routing::getInstance()->redirect('default', 'index');
//      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
