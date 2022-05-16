<?php
class Parents extends Model{
    public function getParents(){
        return $this->getAll("tuteur");
    }

    public function addParent($valeurs){
        $this->add('tuteur',['nom','genre','job','adresse','phone','situation'], $valeurs);
    }

    public function updateParent($matricule, $tableau){
        $this->update('tuteur', $tableau, $matricule);
    }

    public function deleteParent($matricule){
        $this->delete('tuteur', $matricule);
    }
}