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
class insertActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            //$this->mensaje = 'HOLA MUNDO';
            //CREACCION DE OBJETOS
            $fields=array(patrocinadorTableClass::ID, patrocinadorTableClass::NOMBRE);
            $this->objPatrocinador = patrocinadorTableClass::getAll($fields);
            $fields1=array(categoriaTableClass::ID, categoriaTableClass::NOMBRE);
            $this->objCategoria=  categoriaTableClass::getAll($fields1);
            $fields2=  array( usuarioTableClass::ID, usuarioTableClass::USER);
            $this-> objUsuario=  usuarioTableClass::getAll($fields2);
            
            
            $this->defineView('insert', 'evento', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            echo '<br>';
            echo '<pre>';
            print_r($exc->getTrace());
            echo '</pre>';
        }
    }

}
