<?php



use mvc\model\table\tableBaseClass;

/**
 * Description of eventoBaseClass
 *
 * @author Leonardo
 */
class eventoBaseTableClass extends tableBaseClass{

    //put your code here


    const ID = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    const IMAGEN = 'imagen';
    const IMAGEN_LENGTH = 37;
    const NOMBRE = 'nombre';
    const NOMBRE_LENGTH = 45;
    const DESCRIPCION = 'descripcion';
    const DESCRIPTION_LENGTH = 1024;
    const FECHA_INICIAL_EVENTO = 'fecha_inicial_evento';
    const FECHA_FINAL_EVENTO = 'fecha_final_evento';
    const LUGAR_LATITUD = 'lugar_latitud';
    const LUGAR_LATITUD_LENGTH = 100;
    const LUGAR_LONGITUD = 'lugar_longitud';
    const LUGAR_LONGITUD_LENGTH = 100;
    const DIRECCION = 'direccion';
    const DIRECCION_LENGTH = 150;
    const COSTO = 'costo';
    const USUARIO_ID = 'usuario_id';
    const CATEGORIA_ID = 'categoria_id';
    const FECHA_INICIAL_PUBLICACION = 'fecha_inicial_publicacion';
    const FECHA_FINAL_PUBLICACION = 'fecha_final_publicacion';

    static public function getNameTable() {


        return 'evento';
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
