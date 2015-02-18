<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use mvc\model\table\tableBaseClass;
/**
 * Description of localidadTableClass
 *
 * @author Leonardo
 */
class localidadBaseTableClass extends tableBaseClass{
    //put your code here

    const ID = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT= 'updated_at';
    const NOMBRE = 'nombre';
    const NOMBRE_LENGTH = 45;
    const LOCALIDAD_ID = 'localidad_id';
    

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

