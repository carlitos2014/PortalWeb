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
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                // $id=  request::getInstance()->getPost(pqrsfTableClass::getNameField(pqrsfTableClass::ID, TRUE));
                $tipo = request::getInstance()->getPost(pqrsfTableClass::getNameField(pqrsfTableClass::TIPO_PQRS_ID, TRUE));
                $titulo = request::getInstance()->getPost(pqrsfTableClass::getNameField(pqrsfTableClass::TITULO, TRUE));
                $contenido = request::getInstance()->getPost(pqrsfTableClass::getNameField(pqrsfTableClass::CONTENIDO, TRUE));
                $estado=1;
                $usuario_id =  session::getInstance()->getUserId();
//        $this->validate($id, $tipo, $titulo, $usuario_id);


                $data = array(
                    //pqrsfTableClass::ID =>$id,
                    pqrsfTableClass::TIPO_PQRS_ID => $tipo,
                    pqrsfTableClass::TITULO => $titulo,
                    pqrsfTableClass::CONTENIDO => $contenido,
                    pqrsfTableClass::ESTADO_PQRS_ID=>$estado,
                    pqrsfTableClass::USUARIO_ID => $usuario_id
                );

                //$usuario_id = usuarioTableClass::insert($data);
                pqrsfTableClass::insert($data);
                log::register('crear', 'pqrsf');

                routing::getInstance()->redirect('pqrsf', 'index');
            } else {
                routing::getInstance()->redirect('pqrsf', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

//  private function validate($id, $tipo, $titulo, $usuario_id) {
//    $flag = false;
//
//
//    if (empty($usuario)) {
//
//      session::getInstance()->setError(i18n::__(00006, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
//      session::getInstance()->setError(i18n::__(00004, NULL, 'errors', array('%user%' => $usuario, '%caracteres%' => usuarioTableClass::USER_LENGTH)));
//
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if ($password !== $password2) {
//
//      session::getInstance()->setError(i18n::__(00005, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
//    }
//
//    if (empty($password)) {
//
//      session::getInstance()->setError(i18n::__(00007, NULL, 'errors'));
//      $flag = true;
//
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//
//    if (empty($password2)) {
//
//      session::getInstance()->setError(i18n::__(00009, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    $fields = array(
//        usuarioTableClass::USER
//    );
//    $objUsuario = usuarioTableClass::getAll($fields);
//
//    foreach ($objUsuario as $key) {
//      if ($key->user_name === $usuario) {
//        session::getInstance()->setError(i18n::__(00010, NULL, 'errors'));
//        $flag = true;
//        session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//      }
//    }
//
//
//    if ($flag === true) {
//
//      request::getInstance()->setMethod('GET');
//      routing::getInstance()->forward('usuario', 'insert');
//    }
//  }
}
