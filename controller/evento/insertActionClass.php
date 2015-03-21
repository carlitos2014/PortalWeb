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
            //CREACCION DE OBJETOSs
            $fields=array(patrocinadorTableClass::ID, patrocinadorTableClass::NOMBRE);
            $this->objPatrocinador = patrocinadorTableClass::getAll($fields);
            
            $fields1=array(tipoDocumentoTableClass::ID, tipoDocumentoBaseTableClass::NOMBRE);
            $this->objTipoDocumento=  tipoDocumentoTableClass::getAll($fields1);
            
            $fields2=  array( organizacionTableClass::ID, organizacionTableClass::NOMBRE);
            $this-> objOrganizacion=  organizacionTableClass::getAll($fields2);
            
            $fields3= array(categoriaTableClass::ID, categoriaTableClass::NOMBRE);
            $this-> objCategoria=  categoriaTableClass::getAll($fields3);
            
            $fields4= array(usuarioTableClass::ID, usuarioTableClass::USER);
            $this-> objUsuario= usuarioTableClass::getAll($fields4);
            
            
            $this->defineView('insert', 'evento', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
    }

}
