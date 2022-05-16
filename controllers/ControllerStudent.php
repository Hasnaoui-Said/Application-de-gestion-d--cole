<?php
class ControllerStudent{
    public function __construct($url){
        redirection_login();
        $student = new Student();
        $parent = new Parents();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($url[1] == "add"){
                $student->addStudent([...$_POST]);
                header("Location: ".URL."student");
                die();
            }else{
                $student->updateStudent($url[2],$_POST);
                header("Location: ".URL."student");
                die();
            }
        }
        if(isset($url[1]))
            if($url[1] == "delete"){
                $student->deleteStudent($url[2]);
                header("Location: ".URL."student");
                die();
            }
        $liste = $student->getStudents();
        
        $_SESSION['link'] = 'Students';
        require_once(ROOT.'views/liste_student.php');
    }
}