<?php 

include_once __DIR__ . './classes/movie.php';

?>

<!-- html's form -->

<h1>
    insert your fovourite movie !!!
</h1>

<form method="GET">
    <input type="text" name="title" placeholder="write the title">
    <input type="number" name="year" placeholder="movie's year">
    <input type="text" name="genre" placeholder="write the genre">
    <button>send</button>
</form>

<?php 

if( !empty($_GET) && !empty( $_GET['title']) && !empty( $_GET['year']) && !empty( $_GET['genre'])){
    $title = $_GET['title'];
    $year = $_GET['year'];
    $genre = $_GET['genre'];

    $Movie = new Movie( $title, $year, $genre);
    var_dump( $Movie );
}

$istancesArray = [];

echo $Movie-> isMust();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>