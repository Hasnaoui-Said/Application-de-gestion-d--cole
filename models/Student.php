<?php
class Student extends Model{
    public function getStudents(){
        return $this->getAll("etudiant");
    }
}