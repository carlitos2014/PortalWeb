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
 * @author Leonardo Betancourt <leobetacai@gmail.com>
 */
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        
        $id=request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::ID, true));
        $img = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::IMAGEN, true));
        $nombre = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::NOMBRE, true));
        $descripcion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true));
        $fecha_ini = trim(request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true)));
        $fecha_final = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true));
        $latitud = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true));
        $longitud = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true));
        $direccion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DIRECCION, true));
        $costo = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::COSTO, true));
        $usuid = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, true));
        //$usuName=  request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::))
        $categoria = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true));
        $fechainipub = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true));
        $fechafinpub = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true));

        //$this->validate($img, $nombre, $descripcion, $fecha_ini, $fecha_final, $latitud, $longitud, $direccion, $usuid, $categoria, $fechainipub, $fechafinpub);
        
        $ids = array(
           eventoTableClass::ID => $id
        );
        
        $data=array(
            
            eventoTableClass::IMAGEN => $img,
            eventoTableClass::NOMBRE => $nombre,
            eventoTableClass::DESCRIPCION => $descripcion,
            eventoTableClass::FECHA_INICIAL_EVENTO => $fecha_ini,
            eventoTableClass::FECHA_FINAL_EVENTO => $fecha_final,
            eventoTableClass::LUGAR_LATITUD => $latitud,
            eventoTableClass::LUGAR_LONGITUD => $longitud,
            eventoTableClass::DIRECCION => $direccion,
            eventoTableClass::COSTO => $costo,
            eventoTableClass::USUARIO_ID => $usuid,
            eventoTableClass::CATEGORIA_ID => $categoria,
            eventoTableClass::FECHA_INICIAL_PUBLICACION => $fechainipub,
            eventoTableClass::FECHA_FINAL_PUBLICACION => $fechafinpub,
               );
        eventoTableClass::update($ids, $data);
        
       log::register('modificar','evento');
      }

      routing::getInstance()->redirect('evento', 'index');
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
