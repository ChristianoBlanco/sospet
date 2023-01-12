<?php

use Illuminate\Support\Facades\Route;

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
    return view('index-principal');
});
/*Route::get('/index', function () {
    return view('index-principal');
}); */
Route::get('/index', 'App\Http\Controllers\ControladorPrincipal@index');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

Route::get('/painel','App\Http\Controllers\ControladorPainel@index')->middleware(['auth']);
Route::get('/json','App\Http\Controllers\ControladorPainel@indexjson')->middleware(['auth']);
Route::get('/painel-cad-anuncio','App\Http\Controllers\ControladorAnuncio@index')->middleware(['auth']);
//Route::get('/painel-cad-usuario','App\Http\Controllers\ControladorUsuario@index')->middleware(['auth']);
Route::get('/painel-edit-usuario/{id}','App\Http\Controllers\ControladorUsuario@edit')->middleware(['auth']);
Route::get('/painel-edit-usuario-senha/{id}','App\Http\Controllers\ControladorUsuario@editSenha')->middleware(['auth']);
Route::get('/painel-edit-usuario-email/{id}','App\Http\Controllers\ControladorUsuario@editEmail')->middleware(['auth']);

//Route::post('usuarios','App\Http\Controllers\ControladorUsuario@store')->middleware(['auth']);
Route::post('/usuarios/{id}','App\Http\Controllers\ControladorUsuario@update')->middleware(['auth']);
Route::get('/usuarios-softdelete/{id}','App\Http\Controllers\ControladorUsuario@softDelete')->middleware(['auth']);
Route::post('/usuarios-senha/{id}','App\Http\Controllers\ControladorUsuario@updateSenha')->middleware(['auth']);
Route::post('/usuarios-email/{id}','App\Http\Controllers\ControladorUsuario@updateEmail')->middleware(['auth']);

Route::post('/anuncios', 'App\Http\Controllers\ControladorAnuncio@store')->middleware(['auth']);


require __DIR__.'/auth.php';
