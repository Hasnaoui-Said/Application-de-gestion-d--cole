<?php
class Administrateur extends Model{
    public function getAdminByUsernameAndPassword($username, $password){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM administrateur WHERE username = :username && password = :password && status = 1";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":username" => $username,
            ":password" => $password
        ]);
        $data = $smt->fetch(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }
}