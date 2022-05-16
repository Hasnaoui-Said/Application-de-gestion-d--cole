<?php
class Student extends Model{
    public function getStudents(){
        return $this->getAll("etudiant");
    }

    public function addStudent($valeurs){
        $this->add('etudiant',['nom','genre','adresse','naissance','email','tuteur'], $valeurs);
    }

    public function updateStudent($matricule, $tableau){
        $this->update('etudiant', $tableau, $matricule);
    }

    public function deleteStudent($matricule){
        $this->delete('etudiant', $matricule);
    }
}