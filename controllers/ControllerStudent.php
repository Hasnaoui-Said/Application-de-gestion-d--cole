<?php
class ControllerStudent{
    public function __construct($url){
        redirection_login();
        $student = new Student();
        $parent = new Parents();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $student->addStudent([...$_POST]);
        }
        $parents = $parent->getParents();
        $liste = $student->getStudents();
        require_once(ROOT.'views/liste_student.php');
    }
}