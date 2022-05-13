<?php
abstract class Model{

    protected static function getBdd(){
        return new PDO('mysql:dbname=db_ecole;host=localhost;port=3306','root','');
    }

    protected function getAll($table){
        $db = self::getBdd();
        $query = $db->query('SELECT * FROM ' .$table." WHERE status = 1");
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        return $data;
    }

    protected function add($table, $attributs, $valeurs){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $valeurs = array_map(function ($valeur){
            return "'".$valeur."'";
        },$valeurs);
        $attributs = implode(',', $attributs);
        $valeurs = implode(',', $valeurs);
        $sql = "INSERT INTO ".$table. '('. $attributs .')'. 'VALUES'. '('. $valeurs .')';
        echo $sql;
        $smt = $db->prepare($sql);
        $smt->execute();
        $smt = null;
        $db = null;
    }

    protected function update(){
        
    }
}