<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registar rotas web para a sua aplicação. Estas
| rotas são carregadas pelo RouteServiceProvider e todas receberão o
| grupo de middleware "web".
|
*/

// Esta rota irá retornar a view `index.blade.php`, que é o ponto de entrada
// da sua aplicação React.
Route::get('/', function (Request $request) {
    return view('index');
})->where('any', '.*');
