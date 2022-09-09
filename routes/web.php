<?php

use Illuminate\Support\Facades\Route;
use App\Tablero;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$tablero = new Tablero();

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/jugar')->group(function (){
  
  Route::get('/', function(){
    $tablero = new Tablero();
    return $tablero->getTablero();
  });

  Route::get('/{numero}', function ($numero) {
    return $tablero->tirarFicha($numero);
  });
  
});



//Route::get('/jugar/{secuencia}/tirarficha/{numero}', $tablero->tirarFicha($numero));



/*
Route::get('/jugar/{secuencia}', function ($secuencia) {
  $secuencia_anterior = $secuencia;
  $secuencia = str_split($secuencia);
  $tablero = [
    array_fill(0, 6, 'gray-200'),
    array_fill(0, 6, 'gray-200'),
    array_fill(0, 6, 'gray-200'),
    array_fill(0, 6, 'gray-200'),
    array_fill(0, 6, 'gray-200'),
    array_fill(0, 6, 'gray-200'),
    array_fill(0, 6, 'gray-200'),
  ];

  $color = 'sky-500';
  foreach ($secuencia as $columna) {
    $color_siguiente = $color;
    $color = $color == 'sky-500' ? 'red-500' : 'sky-500';
    foreach ($tablero[$columna - 1] as $fila => $celda) {
      if ($celda == 'gray-200') {
        $tablero[$columna - 1][$fila] = $color;
        continue 2;
      }
    }
  }
  foreach ($tablero as $columna => $fila) {
    $tablero[$columna] = array_reverse($fila);
  }

  return view('tablero', [
    'tablero' => $tablero,
    'secuencia_anterior' => $secuencia_anterior,
    'color_siguiente' => $color_siguiente,
  ]);
});
*/