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
 * @author Carlos Quintero <carlitos.quintero0519@gmail.com>
 */
class deleteSelectActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {
        
        $idsToDelete = request::getInstance()->getPost('chk');
        
        foreach ($idsToDelete as $id) {
          $ids = array(
              recaudoEconomicoTableClass::ID => $id
          );
          recaudoEconomicoTableClass::delete($ids, true);
          log::register('borrarSeleccion','recaudo');
        }
        
        routing::getInstance()->redirect('recaudoEconomico', 'index');
      } else {
        routing::getInstance()->redirect('recaudoEconomico', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
