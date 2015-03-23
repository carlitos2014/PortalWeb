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
            if (request::getInstance()->hasRequest(categoriaTableClass::ID)) {
               
                $fields = array(
                    categoriaTableClass::ID,
                    categoriaTableClass::NOMBRE,
                );
                $where = array(
                    categoriaTableClass::ID => request::getInstance()->getRequest(categoriaTableClass::ID)
                );
                $this->objCategoria = categoriaTableClass::getAll($fields, true, null, null, null, null, $where);
                $this->defineView('edit', 'categoria', session::getInstance()->getFormatOutput());
            } else {
                routing::getInstance()->redirect('categoria', 'index');
            }
//      if (request::getInstance()->isMethod('POST')) {
//
//        $usuario = request::getInstance()->getPost(categoriaTableClass::getNameField(categoriaTableClass::USUARIO, true));
//        $password = request::getInstance()->getPost(categoriaTableClass::getNameField(categoriaTableClass::PASSWORD, true));
//
//        if (strlen($usuario) > categoriaTableClass::USUARIO_LENGTH) {
//          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => categoriaTableClass::USUARIO_LENGTH)), 00001);
//        }
//
//        $data = array(
//            categoriaTableClass::USUARIO => $usuario,
//            categoriaTableClass::PASSWORD => md5($password)
//        );
//        categoriaTableClass::insert($data);
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
