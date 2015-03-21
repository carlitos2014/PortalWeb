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

      if (session::getInstance()->isUserAuthenticated() and session::getInstance()->hasCredential('admin')) {
        routing::getInstance()->redirect('admin', 'index');
      } else {
        $this->defineView('index', 'homePage', session::getInstance()->getFormatOutput());
      } //profe volvamos a gmail 
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    
    }
  }

}
