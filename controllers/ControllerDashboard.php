<?php
class ControllerDashboard{

    public function __construct($url){
        redirection_login();
        $_SESSION['link'] = 'Dashboard';
        require_once(ROOT.'views/viewDashboard.php');
    }
}