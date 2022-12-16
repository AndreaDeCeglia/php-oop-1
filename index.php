<?php 

include_once __DIR__ . './classes/movie.php';

?>


<?php 

if( !empty($_GET) && !empty( $_GET['title']) && !empty( $_GET['year']) && !empty( $_GET['genre'])){
    $title = $_GET['title'];
    $year = $_GET['year'];
    $genre = $_GET['genre'];

    $Movie = new Movie( $title, $year, $genre);
    var_dump( $Movie );
}

$istancesArray = [];

for( $i=0; $i<2; $i++){
    $istancesArray = $Movie;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- my utility.scss -->
    <link rel="stylesheet" href="./assets/scss/utility.scss">
</head>
<body>

    <!-- html's form -->
    <header class="container-80 txt-center">
        <h1 class="txt-white margin20-0">
            insert your fovourite movie !!!
        </h1>

        <form method="GET" class="margin20-0">
            <input type="text" name="title" placeholder="write the title">
            <input type="number" name="year" placeholder="movie's year">
            <input type="text" name="genre" placeholder="write the genre">
            <button>send</button>
        </form>
    </header>

    <body>
        <div id="cardContainer" class="padding-2 txt-white txt-center flex-row justify-center align-center">
            <div id="card" class="basis-20 padding-2 acid-button">
                <!-- <img src="" alt=""> -->
                <h1 class="margin10-0">
                    <?php echo $Movie->title?>
                </h1>
                <h2 class="margin10-0">
                    <?php echo $Movie->year ?>
                </h2>
                <h3 class="margin10-0">
                    <?php echo $Movie->genre ?>
                </h3>
                <h4 class="margin10-0">
                    <?php echo $Movie->vote ?>
                </h4>
                <h5>
                    <?php echo $Movie-> isMust() ?>
                </h5>
            </div>
        </div>
    </body>
    
</body>
</html>

<style>
    body{
        background-color: #1E2D3B;
        height: 100vh;
        width: 100vw;
    }
</style>