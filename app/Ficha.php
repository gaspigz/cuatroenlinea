<?php

namespace App;

interface FichaInterface{
    public function getColor();
    public function setPieceColor(string $color);
}

class Tablero implements TableroInterface{

    protected string $color;

    public function __construct ($color) {
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    public function setPieceColor(string $color){
        $this->color = $color;
    }


}

?>