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
 * @author  Leonardo Betancourt <leobetacai@gmail.com>
 */
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));
        $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));
        $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1');

        $nombre = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true));
        $apellido = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true));
        $correo = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true));
        $genero = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true));
        //$usuid =  request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true));
        $fecha = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true));
        $idevent = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true));
        $tipoid = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true));
        $orgid = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true));

         //$this->validate($usuario, $password, $password2,$fecha);
        $ids = array(
            usuarioTableClass::ID => $id
        );

        
        $ids2=array(
        datoUsuarioTableClass::USUARIO_ID=>$id
        );
        
        
        
        $data = array(
            usuarioTableClass::USER => $usuario,
            usuarioTableClass::PASSWORD => md5($password)
        );
        
        
        $data2=array(
            datoUsuarioTableClass::NOMBRE => $nombre,
            datoUsuarioTableClass::APELLIDO => $apellido,
            datoUsuarioTableClass::CORREO => $correo,
            datoUsuarioTableClass::GENERO => $genero,
           // datoUsuarioTableClass::USUARIO_ID => $usuid,
            datoUsuarioTableClass::FECHA_NACIMIENTO => $fecha,
            datoUsuarioTableClass::LOCALIDAD_ID => $idevent,
            datoUsuarioTableClass::TIPO_DOCUMENTO_ID => $tipoid,
            datoUsuarioTableClass::ORGANIZACION_ID => $orgid,
        );
        

        usuarioTableClass::update($ids, $data);
        datoUsuarioTableClass::update($ids2, $data2);
        log::register('modificar','usuario');
        
        
      }

      routing::getInstance()->redirect('usuario', 'index');
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
