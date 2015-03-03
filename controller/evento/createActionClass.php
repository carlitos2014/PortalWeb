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
        $descripcion = request::getInstance()->getPost(categoriaTableClass::getNameField(eventoTableClass::DESCRIPCION, true));
        $fecha_ini = trim(request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true)));
        $fecha_final = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true));
        $latitud = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true));
        $longitud = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true));
        $direccion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DIRECCION, true));
        $costo = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::COSTO, true));
        $usuid = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::USUARIO_ID, true));
        $categoria = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true));
        $fechainipub = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true));
        $fechafinpub = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true));

        $this->validate($img, $nombre, $descripcion, $fecha_ini, $fecha_final, $latitud, $longitud, $direccion, $costo, $usuid, $categoria, $fechainipub, $fechafinpub);


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
            eventoTableClass::FECHA_INICIAL_PUBLICACION => $fechafinpub,
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

  private function validate($img, $nombre, $descripcion, $fecha_ini, $fecha_final, $latitud, $longitud, $direccion, $costo, $usuid, $categoria, $fechainipub, $fechafinpub) {
    $flag = false;


    if (empty($usuario)) {

      session::getInstance()->setError(i18n::__(00006, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
    }

    if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
      session::getInstance()->setError(i18n::__(00004, NULL, 'errors', array('%user%' => $usuario, '%caracteres%' => usuarioTableClass::USER_LENGTH)));

      $flag = true;
      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
    }

    if ($password !== $password2) {

      session::getInstance()->setError(i18n::__(00005, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
    }

    if (empty($password)) {

      session::getInstance()->setError(i18n::__(00007, NULL, 'errors'));
      $flag = true;

      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
    }


    if (empty($password2)) {

      session::getInstance()->setError(i18n::__(00009, NULL, 'errors'));
      $flag = true;
      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
    }

    $fields = array(
        usuarioTableClass::USER
    );
    $objUsuario = usuarioTableClass::getAll($fields);

    foreach ($objUsuario as $key) {
      if ($key->user_name === $usuario) {
        session::getInstance()->setError(i18n::__(00010, NULL, 'errors'));
        $flag = true;
        session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
      }
    }


    if ($flag === true) {

      request::getInstance()->setMethod('GET');
      routing::getInstance()->forward('usuario', 'insert');
    }
  }

}
