<?php

namespace App;

use Illuminate\Http\Request;
use App\Ficha;

interface TableroInterface{
    public function getTablero();
    public function clear();
    public function tirarFicha($numero);
}

class Tablero implements TableroInterface{

    protected $ancho, $alto;
    protected $secuencia = [];
    protected $color_momentaneo;
    protected $colores = []; // [('gray-200',1),('red-500',2),('gray-200',3)] Cada 6 numeros cambia la fila
    

    public function __construct () {
        $this->ancho = 7;
        $this->alto = 6;
        $this->clear();
        
    }

    public function getTablero() {

        return view('tablero2', [
            'tablero' => $this->colores,
            'secuencia' => $this->secuencia
            ]);
    }

    public function tirarFicha($numero) {
        $this->secuencia.push($numero);
        $this->colores[length($this->secuencia)]=$this->color_momentaneo;
        $this->getTablero();

    }

    public function clear() {
        $this->secuencia = [];
        for ($i = 0; $i < ($this->alto * $this->ancho); $i++) {
            $this->colores[$i] = 'gray-200';
        }
        
    }

    public function setCurrentColor(){
        if (length($this->secuencia) % 2 == 0) {
            return $this->color_momentaneo = 'red-500';
        } else {
           return $this->color_momentaneo = 'sky-500';
        }
    }

}

?>