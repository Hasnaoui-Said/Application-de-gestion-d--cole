<?php
class Classe extends Model
{
    public function getClasses()
    {
        return $this->getAll("niveau");
    }

    public function addNiveau($valeurs)
    {
        $this->add('niveau', ['title', 'description'], $valeurs);
    }

    public function updateNiveau($id, $tableau)
    {
        $this->update('niveau', $tableau, $id);
    }

    public function deleteNiveau($id)
    {
        $this->delete('niveau', $id);
    }
    public function getStuByNiveau($id)
    {
        $db = self::getBdd();
        $query = $db->query('SELECT 
                                etudiant.matricule as `matriculeEtu`,
                                niveau.*,
                                etudiant.*
                                FROM etudiant
                                INNER JOIN niveau ON etudiant.idNiveau = niveau.matricule
                                WHERE etudiant.status = 1 AND idNiveau = ' . $id);
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        // print_r($data);
        // die();
        return $data;
    }
    public function getTeachersByNiveau($id)
    {
        $db = self::getBdd();
        $query = $db->query('SELECT 
                                etudiant.matricule as `matriculeEtu`,
                                niveau.*,
                                etudiant.*
                                FROM professeur
                                INNER JOIN niveau ON etudiant.idNiveau = niveau.matricule
                                WHERE etudiant.status = 1 AND idNiveau = ' . $id);
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        // print_r($data);
        // die();
        return $data;
    }
}
