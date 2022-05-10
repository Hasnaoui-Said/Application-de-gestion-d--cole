<?php
class ControllerAccueil{

    public function __construct($url){
        require('controllers/session/library.php');
        redirection_admin();
        require_once(ROOT.'views/viewAccueil.php');
    }
}