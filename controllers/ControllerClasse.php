<?php
class ControllerClasse{
    public function __construct($url){
        redirection_login();
        $Classe = new Classe();
        $liste = $Classe->getClasses();
        if(count($url) > 1){
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
            }else if($url[1] == ""){
                header("Location: ".URL."classe");
                die();
            }else{
                throw new Exception("page not found");
            }
        }
        
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])){
            echo '1';
            $content = $_POST['text'];
            $liste = $Classe->searchNiveau($_POST['text']);
        }
        
        $_SESSION['link'] = 'Classes';
        require_once(ROOT.'views/liste_Classe.php');
    }
}