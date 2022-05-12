<?php
class ControllerStudent{

    public function __construct($url){
        redirection_login();
        $student = new Student();
        $liste = $student->getStudents();
        require_once(ROOT.'views/liste_student.php');
    }
}