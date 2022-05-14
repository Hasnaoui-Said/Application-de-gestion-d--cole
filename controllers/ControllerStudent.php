<?php
class ControllerStudent{
    public function __construct($url){
        redirection_login();
        $student = new Student();
        $parent = new Parents();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($url[1] == "add"){
                $student->addStudent([...$_POST]);
            }else{
                $student->updateStudent($url[2],$_POST);
                header("Location: ".URL."student");
                die();
            }
        }
        $parents = $parent->getParents();
        $liste = $student->getStudents();
        require_once(ROOT.'views/liste_student.php');
    }
}