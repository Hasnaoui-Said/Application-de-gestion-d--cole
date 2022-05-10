<?php
class ControllerLogin{

    public function __construct($url){
        $status = "";
        require('controllers/session/library.php');
        redirection_admin();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $item = new Administrateur();
            $data = $item->getAdminByUsernameAndPassword($username, hash("md5", $password));
            if(!$data){
                $status = "incorect username or password !!";
            }else{
                $_SESSION['user'] = $data;
                header("Location: ".URL."dashboard");
            }
        }
        require_once("./views/viewLogin.php");
    }
}