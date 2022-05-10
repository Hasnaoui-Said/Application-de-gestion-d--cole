<?php
class ControllerDashboard{

    public function __construct($url){
        require('controllers/session/library.php');
        redirection_login();
        require_once(ROOT.'views/viewDashboard.php');
    }
}