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
class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {

            $fields = array(
                credencialTableClass::ID,
                credencialTableClass::NOMBRE,
                credencialTableClass::CREATED_AT,
                credencialTableClass::UPDATED_AT,
                credencialTableClass::DELETED_AT
            );
            $orderBy = array(
                credencialTableClass::ID
            );
            $this->objCredencial = credencialTableClass::getAll($fields, FALSE, $orderBy, 'ASC');
            $this->defineView('index', 'credencial', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            echo '<br>';
            echo '<pre>';
            print_r($exc->getTrace());
            echo '</pre>';
        }
    }

}
