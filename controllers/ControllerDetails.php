<?php
class ControllerDetails extends Model
{
    public function __construct($url)
    {
        redirection_login();
        $details = new Classe();
        $teacher = new Teacher();
        if (count($url) == 2 && $url[1] != "") {
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $details->addTeacherInClass([$url[1],$_POST["proff"]]);
            }
            $listeStudents = $details->getStuByNiveau($url[1]);
            $listeTeachers = $details->getTeachersByNiveau($url[1]);
            $proff = $teacher->getTeachers();
            $_SESSION['link'] = 'Classes';
            require_once(ROOT.'views/liste_detals.php');
        }else{
            throw new Exception("Page introuvable");
        }
    }
}