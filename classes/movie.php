<?php 

class Movie{

    public $title;
    public $year;
    public $genre;
    public $vote; 

    function __construct( $_x, $_y, $_z){
        $this->title = $_x;
        $this->year = $_y;
        $this->genre = $_z;
        $this->vote =  rand(1, 10);
    }

    public function isMust(){
        if( $this->vote < 6){
            return "$this->title is not adviced!!";
        } elseif( $this->vote > 5 && $this->vote < 8 ) {
            return "$this->title is adviced";
        } else {
            return "$this->title is a Must .... wacth it now!!!";
        }
    }
}

?>