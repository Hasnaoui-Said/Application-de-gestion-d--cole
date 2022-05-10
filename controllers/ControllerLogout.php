<?php
class ControllerLogout{

    public function __construct($url){
        session_destroy();
        session_unset();
        header("Location: ".URL);
    }
}