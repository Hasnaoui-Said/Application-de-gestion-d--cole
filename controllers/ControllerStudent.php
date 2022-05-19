<?php
class ControllerStudent{
    public function __construct($url){
        redirection_login();
        $student = new Student();
        $parent = new Parents();
        $niveaux = new Classe();
        $parents = $parent->getParents();
        $niveaux = $niveaux->getClasses();
        $liste = $student->getStudents();
        if(count($url) > 1){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                if($url[1] == "add"){
                    $student->addStudent([...$_POST]);
                    header("Location: ".URL."student");
                    die();
                }else if($url[1] == "update"){
                    $student->updateStudent($url[2],$_POST);
                    header("Location: ".URL."student");
                    die();
                }else if($url[1] == "search"){
                    $liste = $student->searchStudent($_POST['text']);
                    print_r($liste);
                    die();
                }
            }else{
                if($url[1] == "delete"){
                    $student->deleteStudent($url[2]);
                    header("Location: ".URL."student");
                    die();
                }else if($url[1] == ""){
                    header("Location: ".URL."student");
                    die();
                }else{
                    throw new Exception("page not found");
                }
            }
        }
        $_SESSION['link'] = 'Students';
        require_once(ROOT.'views/liste_student.php');
    }
}