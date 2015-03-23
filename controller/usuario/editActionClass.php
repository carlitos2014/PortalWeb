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
class editActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->hasRequest(usuarioTableClass::ID)) {
        $fields = array(
            usuarioTableClass::ID,
            usuarioTableClass::USER,
            usuarioTableClass::PASSWORD,
        );
        $fields1 = array(datoUsuarioTableClass::NOMBRE,
            datoUsuarioTableClass::APELLIDO,
            datoUsuarioTableClass::CORREO,
            datoUsuarioTableClass::GENERO,
            //$usuid =  request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true));
            datoUsuarioTableClass::FECHA_NACIMIENTO,
            datoUsuarioTableClass::LOCALIDAD_ID,
            datoUsuarioTableClass::TIPO_DOCUMENTO_ID,
            datoUsuarioTableClass::ORGANIZACION_ID
        );
        $where = array(
            usuarioTableClass::ID => request::getInstance()->getRequest(usuarioTableClass::ID)
        );

        $where1 = array(
            datoUsuarioTableClass::USUARIO_ID => request::getInstance()->getRequest(usuarioTableClass::ID)
        );

        
       // ---------------------- select en la accion de editar
        
        $fields2 = array(localidadTableClass::ID, localidadTableClass::NOMBRE);
        $this->objLocalidad = localidadTableClass::getAll($fields2);

        $fields3 = array(tipoDocumentoTableClass::ID, tipoDocumentoBaseTableClass::NOMBRE);
        $this->objTipoDocumento = tipoDocumentoTableClass::getAll($fields3);

        $fields4 = array(organizacionTableClass::ID, organizacionTableClass::NOMBRE);
        $this->objOrganizacion = organizacionTableClass::getAll($fields4);



        $this->datos = datoUsuarioBaseTableClass::getAll($fields1, true, null, null, null, null, $where1);
        $this->objUsuarios = usuarioTableClass::getAll($fields, true, null, null, null, null, $where);
        $this->defineView('edit', 'usuario', session::getInstance()->getFormatOutput());
      } else {
        routing::getInstance()->redirect('usuario', 'index');
      }
//      if (request::getInstance()->isMethod('POST')) {
//
//        $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USUARIO, true));
//        $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
//
//        if (strlen($usuario) > usuarioTableClass::USUARIO_LENGTH) {
//          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => usuarioTableClass::USUARIO_LENGTH)), 00001);
//        }
//
//        $data = array(
//            usuarioTableClass::USUARIO => $usuario,
//            usuarioTableClass::PASSWORD => md5($password)
//        );
//        usuarioTableClass::insert($data);
//        routing::getInstance()->redirect('default', 'index');
//      } else {
//        routing::getInstance()->redirect('default', 'index');
//      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
