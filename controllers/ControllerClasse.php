<?php
class ControllerClasse{
    public function __construct($url){
        redirection_login();
        $Classe = new Classe();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($url[1] == "add"){
                $Classe->addNiveau([...$_POST]);
                header("Location: ".URL."Classe");
                die();
            }else{
                $Classe->updateNiveau($url[2],$_POST);
                header("Location: ".URL."Classe");
                die();
            }
        }
        if(isset($url[1]))
            if($url[1] == "delete"){
                $Classe->deleteNiveau($url[2]);
                header("Location: ".URL."Classe");
                die();
            }
        $liste = $Classe->getClasses();
        
        $_SESSION['link'] = 'Classes';
        require_once(ROOT.'views/liste_Classe.php');
    }
}