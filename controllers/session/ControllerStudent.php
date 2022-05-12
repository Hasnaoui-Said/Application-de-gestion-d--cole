<?php
class ControllerStudent{

    public function __construct($url){
        redirection_login();
        require_once(ROOT.'views/list_student.php');
    }
}