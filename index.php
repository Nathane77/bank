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

//crée un objet Titulaire
$denilsonD = new Titulaire("Denilson","DELMAS","24-09-1998","Mulhouse");

//calcule l'age du Titulaire
$denilsonD->calcAge();

//cration des different comptes
$c1 = new Compte("Compte 1","Courant","40","€",$denilsonD);
$c2 = new Compte("Compte 2","Courant","20","€",$denilsonD);

//affiche les infos d'un des comptes
$c1->getInfos();

