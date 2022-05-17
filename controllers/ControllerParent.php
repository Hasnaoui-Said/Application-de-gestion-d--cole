<?php
class ControllerParent{
    public function __construct($url){
        redirection_login();
        $parent = new Parents();

        if(count($url) > 1){
            if($url[1] == "add"){
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $parent->addParent([...$_POST]);
                    header("Location: ".URL."Parent");
                }
            }else if($url[1] == "update"){
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $parent->updateParent($url[2],$_POST);
                    header("Location: ".URL."Parent");
                }
            }else if($url[1] == "delete"){
                $parent->deleteParent($url[2]);
                header("Location: ".URL."Parent");
                die();
            }
            else{
                if($url[1] != ''){
                    throw new Exception('page not found');
                }else{
                    header("Location: ".URL."Parent");
                    die();
                }
            }
        }
        $liste = $parent->getParents();
        
        $_SESSION['link'] = 'Parents';
        require_once(ROOT.'views/liste_parent.php');
    }
}