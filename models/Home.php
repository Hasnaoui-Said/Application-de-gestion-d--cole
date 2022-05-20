<?php
require_once './Model.php';
class Home extends Model
{
    public function getStu()
    {
        return $this->getAll('etudiant');
    }
    public function getTeach()
    {
        return $this->getAll('professeur');
    }
    public function getNiv()
    {
        return $this->getAll('niveau');
    }
    public function getPar()
    {
        return $this->getAll('tuteur');
    }
    public function getAdmin()
    {
        return $this->getAll('administrateur');
    }
}
$obj = new Home;
$list1 = $obj->getStu();
$list2 = $obj->getTeach();
$list3 = $obj->getNiv();
$list4 = $obj->getPar();
$list5 = $obj->getAdmin();
$genre = array('Stu' => [0, 0], 'Teach' => [0, 0], 'Par' => [0, 0], 'Admin' => [0, 0]);
function done($list, $arr, $in){
    foreach ($list as $li) {
        if (strtolower($li->genre) == strtolower('homme')) $arr[$in][0] += 1;
        if (strtolower($li->genre) == strtolower('femme'))  $arr[$in][1] += 1;
    }
    return $arr;
}

$genre = done($list1, $genre, 'Stu');
$genre = done($list2, $genre, 'Teach');
$genre = done($list4, $genre, 'Par');
$genre = done($list5, $genre, 'Admin');

echo json_encode([
    'count' => [count($list1), count($list2), count($list3), count($list4)],
    'genre' => $genre,
]);
