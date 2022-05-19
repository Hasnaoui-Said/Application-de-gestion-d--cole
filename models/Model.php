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

    protected function update($table, $tableau, $matricule){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $attributs = "";
        foreach ($tableau as $key => $value) {
            $attributs = $attributs.$key."="."'".$value."',";
        }
        $attributs = substr($attributs, 0, -1); 
        $sql = "UPDATE ".$table. " SET ".$attributs." WHERE matricule = ".$matricule;
        $smt = $db->prepare($sql);
        $smt->execute();
        $smt = null;
        $db = null;
    }

    protected function delete($table, $matricule){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "UPDATE ".$table. " SET status = 0 WHERE matricule = :matricule";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":matricule" => $matricule
        ]);
        $smt = null;
        $db = null;
    }

    protected function search($table, $text){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $query = "SELECT 
                    etudiant.genre as `genreEtu`,
                    tuteur.genre as `genreTu`,
                    etudiant.nom as `nomEtu`,
                    tuteur.nom as `nomTu`,
                    tuteur.matricule as `tuteur_matr`,
                    etudiant.matricule as `etudiant_matr`,
                    etudiant.*, tuteur.*,
                    niveau.* FROM etudiant
                    INNER JOIN niveau ON etudiant.idNiveau = niveau.matricule 
                    INNER JOIN tuteur ON etudiant.tuteur = tuteur.matricule
                    WHERE etudiant.status = 1 and (etudiant.nom like('%$text%') OR etudiant.email like('%$text%'))
                    ";
        $smt = $db->prepare($query);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        return $data;
    }
}