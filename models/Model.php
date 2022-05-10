<?php
abstract class Model{

    protected static function getBdd(){
        return new PDO('mysql:dbname=db_ecole;host=localhost;port=3306','root','');
    }

    protected function getAll($table){
        $db = self::getBdd();
        $query = $db->query('SELECT * FROM ' .$table);
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        return $data;
    }
}