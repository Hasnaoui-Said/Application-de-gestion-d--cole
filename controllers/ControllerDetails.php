<?php
class ControllerDetails extends Model
{
    public function __construct($url)
    {
        redirection_login();
        $details = new Classe();
        if (count($url) == 2 && $url[1] != "") {
            $listeStudents = $details->getStuByNiveau($url[1]);
            $listeTeachers = $details->getTeachersByNiveau($url[1]);
            $_SESSION['link'] = 'Classes';
            require_once(ROOT.'views/liste_detals.php');
        }else{
            throw new Exception("Page introuvable");
        }
    }
}