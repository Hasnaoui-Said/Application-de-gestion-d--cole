<?php
class Student extends Model{
    public function getStudents(){
        return $this->getAllJoin("etudiant");
        // return $this->getAll("etudiant");
    }
    public function getAllJoin($table){
        $db = self::getBdd();
        $query = $db->query('SELECT 
                                etudiant.genre as `genreEtu`,
                                tuteur.genre as `genreTu`,
                                etudiant.nom as `nomEtu`,
                                tuteur.nom as `nomTu`,
                                tuteur.matricule as `tuteur_matr`,
                                etudiant.matricule as `etudiant_matr`,
                                etudiant.*, tuteur.*,
                                niveau.* FROM etudiant
                                INNER JOIN niveau ON etudiant.idNiveau = niveau.matricule 
                                INNER JOIN tuteur ON etudiant.tuteur = tuteur.matricule
                                WHERE etudiant.status = 1');
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        // print_r($data[0]);
        // die();
        return $data;
    }

    /*
    SELECT etudiant.nom as 'nomEtu', tuteur.nom as 'nomTu', etudiant.*, tuteur.*, niveau.* FROM etudiant INNER JOIN niveau ON etudiant.idNieau = niveau.matricule INNER JOIN tuteur ON etudiant.tuteur = tuteur.matricule; 
    */

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