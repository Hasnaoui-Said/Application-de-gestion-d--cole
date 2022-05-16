<?php
class ControllerParent{
    public function __construct($url){
        redirection_login();
        $parent = new Parents();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($url[1] == "add"){
                $parent->addParent([...$_POST]);
                header("Location: ".URL."Parent");
                die();
            }else{
                $parent->updateParent($url[2],$_POST);
                header("Location: ".URL."Parent");
                die();
            }
        }
        if(isset($url[1]))
            if($url[1] == "delete"){
                $parent->deleteParent($url[2]);
                header("Location: ".URL."Parent");
                die();
            }
        $liste = $parent->getParents();
        $_SESSION['link'] = 'Parents';
        require_once(ROOT.'views/liste_parent.php');
    }
}