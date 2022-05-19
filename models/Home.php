<?php
require_once './Model.php';
class Home extends Model
{
    public function getStu()
    {
        $db = self::getBdd();
        $query = $db->query('SELECT * FROM etudiant WHERE status = 1');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = null;
        $db = null;
        return $data;
    }
    public function getTeach()
    {
        $db = self::getBdd();
        $query = $db->query('SELECT * FROM professeur WHERE status = 1');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = null;
        $db = null;
        return $data;
    }
}
$obj = new Home;
$list1 = $obj->getStu();
$list2 = $obj->getTeach();
echo json_encode([
    'students'=>$list1,
    'tech'=>$list2,
    ]);


