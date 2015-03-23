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
 * @author CARLOS QUINTERO
 */
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $nombre = request::getInstance()->getPost(credencialTableClass::getNameField(credencialTableClass::NOMBRE, true));


                if (strlen($nombre) > credencialTableClass::NOMBRE_LENGTH) {
                    throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => credencialTableClass::USER_LENGTH)), 00001);
                }

                $data = array(
                    credencialTableClass::NOMBRE => $nombre
                    
                );
                credencialTableClass::insert($data);
                
                log::register('crear','credencial');
                routing::getInstance()->redirect('credencial', 'index');
            } else {
                routing::getInstance()->redirect('credencial', 'index');
            }
        } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
    
    }

}
