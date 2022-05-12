<?php
class Student extends Model{
    public function getStudents(){
        return $this->getAll("etudiant");
    }

    public function addStudent($valeurs){
        $this->add('etudiant',['nom','genre','adresse','naissance','email','tuteur'], $valeurs);
    }
}