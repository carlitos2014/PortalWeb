<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bitacoraBaseTableClass
 *
 * @author leonardo
 */
class bitacoraBaseTableClass {

    const ID = 'id';
    const CREATED_AT = 'created_at';
    const USUARIO_ID = 'usuario_id';
    const ACCION = 'accion';
    const ACCION_LENGTH = 20;
    const TABLA = 'tabla';
    const TABLA_LENGTH = 64;
     const REGISTRO = 'registro';
    const OBSERVACION = 'observacion';
    const OBSERVACION_LENGTH = 500;
    
   

    static public function getNameTable() {


        return 'bitacora';
    }

    public static function getNameField($field, $html = false, $table = null) {

        return parent::getNameField($field, self::getNameTable(), $html);
    }

    public static function delete($ids, $deletedLogical = false, $table = NULL) {
        return parent::delete(self::getNameTable(), $ids, $deletedLogical);
    }

    public static function insert($data, $table = NULL) {
        return parent::insert(self::getNameTable(), $data);
    }

    public static function getAll($fields, $deletedLogical = true, $orderBy = NULL, $order = null, $limit = NULL, $offset = null) {
        return parent::delete(self::getNameTable(), $fields, $deletedLogical, $orderBy, $order, $limit, $offset);
    }

    public static function update($ids, $data, $table = NULL) {

        return parent::update(self::getNameTable(), $ids, $data);
    }

}