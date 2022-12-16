<?php 

class Movie{

    $title;
    $year;
    $genre;

    function __construct( $_x, $_y, $_z ){
        $this->title = $_x;
        $this->year = $_y;
        $this->genre = $_z;
    }
}

?>