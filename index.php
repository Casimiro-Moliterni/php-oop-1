<?php 
class Movie{
public $name;
public $director;
public $actor;
public $genre;
public $date;



}

$il_cavaliere_oscuro = new Movie();
$il_cavaliere_oscuro ->name = "Il Cavaliere Oscuro";
$il_cavaliere_oscuro ->director =" Christopher Nolan";
$il_cavaliere_oscuro ->actor =" Christian Bale";
$il_cavaliere_oscuro ->genre = "action";
$il_cavaliere_oscuro ->date ="23 luglio 2008";

var_dump(new Movie());
var_dump($il_cavaliere_oscuro);
?>