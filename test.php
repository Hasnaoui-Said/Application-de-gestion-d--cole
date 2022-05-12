<?php
$a = ['nom','genre','adresse','naissance','email','tuteur'];
$a = array_map(function ($item){
    return "'".$item."'";
}, $a);
echo($a[0]);