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
class reportActionClass extends controllerClass implements controllerActionInterface {
    
    

  public function execute() {
    try {
      
//      $this->mensaje = 'EL GRUPO DE LUZBELL APRENDIENDO FPDF EN PHP';
//      $this->msj='Otro mensaje con salto de linea';
        
        
        $fields=array(
            
        eventoTableClass::ID,
        eventoTableClass::NOMBRE,
        eventoTableClass::CATEGORIA_ID,
        eventoTableClass::COSTO,
        eventoTableClass::FECHA_INICIAL_EVENTO
            
        );
        
      $this->objEvento=  eventoTableClass::getAll($fields);
      $this->defineView('index', 'evento', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
