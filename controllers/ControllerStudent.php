<?php
class ControllerStudent{

    private function add(){
        require_once(ROOT.'views/addStudent.php');
    }

    public function __construct($url){
        redirection_login();
        $student = new Student();
        if(count($url) == 2){
            if(method_exists('ControllerStudent', $url[1])){
                $fonction = $url[1];
                $this->$fonction();
            }else{
                throw new Exception('Page introuvable');
            }
        }else{
            $liste = $student->getStudents();
            require_once(ROOT.'views/liste_student.php');
        }
    }
}