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
class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            $fields = array(
                bitacoraTableClass::ID,
                bitacoraTableClass::FECHA,
                bitacoraTableClass::USUARIO_ID,
                bitacoraTableClass::ACCION,
                bitacoraTableClass::TABLA,
                bitacoraTableClass::REGISTRO,
                bitacoraTableClass::OBSERVACION
            );
            
            $orderBy = array(
          bitacoraTableClass::FECHA
      );
            $this->objBitacora = bitacoraTableClass::getAll($fields, FALSE,$orderBy,'DESC');
            $this->defineView('index', 'bitacora', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }


        //$this->defineView('ejemplo', 'default', session::getInstance()->getFormatOutput());
    }

}
