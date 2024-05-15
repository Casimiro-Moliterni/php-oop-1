<?php 
require_once __DIR__ . '/Models/Movie.php';

$movie_id_1 = new Movie('Il Cavaliere Oscuro','Christopher Nolan',['Christian Bale'],['action','thriller','avventur'],'23 luglio 2008');

$movie_id_2 = new Movie('Ritorno Al Futuro ', 'Robert Zemeckis',['Bob Gale'],['fantasy','thriller','suspense'],'1985');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <ul>
      <li><?php echo $movie_id_1->getFullMovie()?></li>
      <li><?php echo $movie_id_2->getFullMovie()?></li>
    </ul>
  </div>
</body>
</html>