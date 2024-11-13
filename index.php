<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bank POO</h1>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
//force automatically the link of the classes' pages
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$denilsonD = new Titulaire("Denilson","DElMAS","07/02/1998","Mulhouse");

$c1 = new Compte("Courant","0","€",$denilsonD);

var_dump($denilsonD);
var_dump($c1);

// $today = new DateTime('today');
// echo $today->format("d.m,Y");
echo $denilsonD->getDate()->format("d.m.Y");
// echo $denilsonD->getInfos();