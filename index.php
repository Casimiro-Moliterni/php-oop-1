<?php 
class Movie{
public $name;
public $director;
public $actor;
public $genre;
public $date;
public static $type = "FILM";

public function __construct($_name,$_director,$_actor,$_genre,$_date){
    $this->name = $_name;
    $this->director = $_director;
    $this->actor = $_actor;
    $this->genre = $_genre;
    $this->date = $_date;
}
// funzione che genere intero movie 

public function getFullMovie(){
  $name = $this->name;
  $director = $this->director;
  $actor = $this->actor;
  $genre=$this->genre;
  $date=$this->date;
  $fullMovie = $name . ' - ' . $director . ' - ' . $actor . ' - ' . $genre . ' - ' . $date . ' - '. self::$type;
  return $fullMovie;
}

}

$il_cavaliere_oscuro = new Movie('Il Cavaliere Oscuro','Christopher Nolan','Christian Bale','action','23 luglio 2008');
echo $il_cavaliere_oscuro->getFullMovie();
$ritorno_al_futuro = new Movie('Ritorno Al Futuro ', 'Robert Zemeckis','Bob Gale','fantasy','1985');
echo $ritorno_al_futuro ->getFullMovie();
// var_dump($il_cavaliere_oscuro);
?>