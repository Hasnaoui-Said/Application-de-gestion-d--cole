<?php
class Teacher extends Model{
    public function getTeachers(){
        return $this->getAll("professeur");
    }

    public function addTeacher($valeurs){
        $this->add('professeur',['nom','genre','status','matiere','phone'], $valeurs);
    }

    public function updateTeacher($matricule, $tableau){
        $this->update('professeur', $tableau, $matricule);
    }

    public function deleteTeacher($matricule){
        $this->delete('professeur', $matricule);
    }
}