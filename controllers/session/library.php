<?php
    function is_authenticate(){
        return isset($_SESSION['user']);
    }

    function redirection_login(){
        if(!is_authenticate()){
            header("Location: ".URL."login");
            die();
        }
    }

    function redirection_admin(){
        if(is_authenticate()){
            header("Location: ".URL."dashboard");
            die();
        }
    }
?>