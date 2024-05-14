<?php 
class Movie{
public $name;
public $director;
public $actor;
public $genre;
public $date;
public static $type = "FILM";

public function __construct($_name,$_director, Array $_actor, Array $_genre,$_date){
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
  $fullMovie = $name . ' - ' . $director . ' - ' . implode($actor) . ' - ' . implode($genre) . ' - ' . $date . ' - '. self::$type  ;
  return $fullMovie;
}


}



$movie_id_1 = new Movie('Il Cavaliere Oscuro','Christopher Nolan','Christian Bale',['action','thriller','avventur'],'23 luglio 2008');
echo $movie_id_1->getFullMovie();
$movie_id_2 = new Movie('Ritorno Al Futuro ', 'Robert Zemeckis','Bob Gale',['fantasy','thriller','suspense'],'1985');
echo $movie_id_2 ->getFullMovie();
// var_dump($il_cavaliere_oscuro);
?>