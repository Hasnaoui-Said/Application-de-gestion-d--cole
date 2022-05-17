<?php
class ControllerDetails extends Model
{
    public function __construct($url)
    {
        redirection_login();
        $details = new Classe();
        if (isset($url[1])) {
            $liste = $details->getStuByNiveau($url[1]);
            $_SESSION['link'] = 'Classes';
            require_once(ROOT.'views/liste_detals.php');
        } else {
            header("Location: " . URL . "Classe");
            die();
        }


    }
}
