<?php
class ControllerAccueil{

    public function __construct($url){
        redirection_admin();
        require_once(ROOT.'views/viewAccueil.php');
    }
}