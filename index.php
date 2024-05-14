<?php 
class Movie{
public $name;
public $director;
public $actor;
public $genre;
public $date;

public function __construct($_name,$_director,$_actor,$_genre,$_date){
    $this->name = $_name;
    $this->director = $_director;
    $this->actor = $_actor;
    $this->genre = $_genre;
    $this->date = $_date;
}
}

$il_cavaliere_oscuro = new Movie('Il Cavaliere Oscuro','Christopher Nolan','Christian Bale','action','23 luglio 2008');
// $il_cavaliere_oscuro ->director =" Christopher Nolan";
// $il_cavaliere_oscuro ->actor =" Christian Bale";
// $il_cavaliere_oscuro ->genre = "action";
// $il_cavaliere_oscuro ->date ="23 luglio 2008";


var_dump($il_cavaliere_oscuro);
?>