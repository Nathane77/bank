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

$denilsonD = new Titulaire("Denilson","DELMAS","07/02/1998","Mulhouse");

$c1 = new Compte("Courant","40","€",$denilsonD);
$c2 = new Compte("Courant","20","€",$denilsonD);

echo $c1->getSolde()."<br>";
$c1->transfer(40,$c1,$c2);
echo $c1->getSolde()."<br>";
echo $c2->getSolde()."<br>";

