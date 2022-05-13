<?php
class ControllerDashboard{

    public function __construct($url){
        redirection_login();
        require_once(ROOT.'views/viewDashboard.php');
    }
}