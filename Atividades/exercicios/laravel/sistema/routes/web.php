<?php

use Illuminate\Support\Facades\Route;
use App\Models\Estado;
use App\Models\Produto;
use App\Http\Controllers\EstadoController;
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

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/estados', EstadoController::class);








// Route::get('/ola', function () {
//     return 'Olá Mundo';
// });




// Route::get('/estados/todos  ', function () {
//     $estados = Estado::all();
//     return view('lista', ['dados' => $estados]);
// });

// Route::get('/estados/{id}', function ($id) {
//     $estado = Estado::findOrfail($id);
//     if ($estado == null) {
//         return 'ID inválido';
//     }
//     return view('lista', ['dados' => $estado]);
// });

// Route::get('/produtos/todos  ', function () {
//     $produtos = Produto::all();
//     return view('lista', ['dados' => $produtos]);
// });

// Route::get('/produtos/{id}', function ($id) {
//     $produto = Produto::findOrfail($id);
//     if ($produto == null) {
//         return 'ID inválido';
//     }
//     return view('lista', ['dados' => $produto]);
// });
