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
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {
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

        $this->validate($img, $nombre, $descripcion, $fecha_ini, $fecha_final, $latitud, $longitud, $direccion, $usuid, $categoria, $fechainipub, $fechafinpub);


        $data = array(
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
         eventoTableClass::insert($data);
        routing::getInstance()->redirect('evento', 'index');
      } else {
        routing::getInstance()->redirect(' evento', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

  private function validate($img, $nombre,$fecha_ini, $fecha_final, $latitud, $longitud, $direccion, $usuid, $categoria, $fechainipub, $fechafinpub) {
    $flag = false;


    if (empty($img)) {

      session::getInstance()->setError(i18n::__(00015, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::IMAGEN, true), true);
    }

    if (strlen($img) > eventoTableClass::IMAGEN_LENGTH) {
      session::getInstance()->setError(i18n::__(00016, NULL, 'errors', array('%user%' => $img, '%caracteres%' => eventoTableClass::IMAGEN_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::IMAGEN, true), true);
    }

    
///-----------------------validaciones de nombre---------------------------------
    if (empty($nombre)) {

      session::getInstance()->setError(i18n::__(00017, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::NOMBRE, true), true);
    }


    if (strlen($nombre) > eventoTableClass::NOMBRE_LENGTH) {
      session::getInstance()->setError(i18n::__(00018, NULL, 'errors'));

      $flag = true;
      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::USER, true), true);
    }
    
    
    $fields = array(
        eventoTableClass::NOMBRE
    );
    $objEvento = eventoTableClass::getAll($fields);

    foreach ($objEvento as $key) {
      if ($key->nombre === $nombre) {
        session::getInstance()->setError(i18n::__(00019, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::USER, true), true);
      }
    }
    
    
    
    //--------------------------validaciones de fecha inicial-----------------------
    
     if (empty($fecha_ini)) {

      session::getInstance()->setError(i18n::__(00020, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true), true);
    }
    
    //--------------------------validaciones de fecha final del evento-----------------------
    
    if (empty($fecha_final)) {

      session::getInstance()->setError(i18n::__(00021, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true), true);
    }
    
    if ($fecha_final<$fecha_ini) {

      session::getInstance()->setError(i18n::__(00036, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true), true);
    }
    
    
    
    
    

    //--------------------------validaciones de latitud-----------------------
    
    if (empty($latitud)) {

      session::getInstance()->setError(i18n::__(00022, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true), true);
    }
    
    //--------------------------validaciones de longitud-----------------------
    
    if (empty($longitud)) {

      session::getInstance()->setError(i18n::__(00023, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true), true);
    }
    
     //--------------------------validaciones de direccion-----------------------
    
    if (empty($direccion)) {

      session::getInstance()->setError(i18n::__(00024, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::DIRECCION, true), true);
    }
    
     //--------------------------validaciones de usuario id-----------------------
    
    if (empty($usuid)) {

      session::getInstance()->setError(i18n::__(00025, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, true), true);
    }
    
    //--------------------------validaciones de usuario id-----------------------
    
    if (empty($categoria)) {

      session::getInstance()->setError(i18n::__(00026, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, true), true);
    }
    
    //--------------------------validaciones de fecha inicial-----------------------
    
     if (empty($fechainipub)) {

      session::getInstance()->setError(i18n::__(00020, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true), true);
    }
    
    //--------------------------validaciones de fecha final del evento-----------------------
    
    if (empty($fechafinpub)) {

      session::getInstance()->setError(i18n::__(00021, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true), true);
    }
    if (empty($fechafinpub<$fechainipub)) {

      session::getInstance()->setError(i18n::__(00037, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true), true);
    }
    
    


    if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('evento', 'insert');
    }
  }

}
