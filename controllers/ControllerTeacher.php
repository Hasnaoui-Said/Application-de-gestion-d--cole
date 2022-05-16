<?php
class ControllerTeacher{
    public function __construct($url){
        redirection_login();
        $teacher = new Teacher();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($url[1] == "add"){
                $teacher->addTeacher([...$_POST]);
                header("Location: ".URL."teacher");
                die();
            }else{
                $teacher->updateTeacher($url[2],$_POST);
                header("Location: ".URL."teacher");
                die();
            }
        }
        if(isset($url[1]))
            if($url[1] == "delete"){
                $teacher->deleteTeacher($url[2]);
                header("Location: ".URL."teacher");
                die();
            }
        $liste = $teacher->getTeachers();
        
        $_SESSION['link'] = 'Teachers';
        require_once(ROOT.'views/liste_Teacher.php');
    }
}