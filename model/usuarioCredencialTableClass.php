<?php

use mvc\model\modelClass as model;
use mvc\config\configClass as config;

/**
 * Description of usuarioCredencialTableClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class usuarioCredencialTableClass extends usuarioCredencialBaseTableClass {

    public static function findById($id) {
        try {
            $sql = "select usuario_credencial.id,usuario.user_name from usuario_credencial natural join usuario,credencial where usuario_credencial.credencial_id=credencial.id and usuario_credencial.usuario_id=usuario.id and usuario_credencial.id='$id'";
            
            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
      } catch (\PDOException $exc) {
        throw $exc;
      }
    }
    

public static function findUserId() {
        try {
            $sql = 'select credencial.id,credencial.nombre from credencial;';
            
            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
      } catch (\PDOException $exc) {
        throw $exc;
      }
    }
    
    
    
    
    
    
    
    
    
      }
