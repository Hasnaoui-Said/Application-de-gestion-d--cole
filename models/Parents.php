<?php
class Parents extends Model{
    public function getParents(){
        return $this->getAll("tuteur");
    }
}