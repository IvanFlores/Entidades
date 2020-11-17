<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\EntidadesTipoController;
use App\Http\Controllers\PigeController;
use App\Http\Controllers\PisleaController;
use App\Http\Controllers\SoftwareController;


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
    return view('inicio');
});
Route::get('/entidades',function () {
    return view('entidades');
});
Route::get('/entidad_tipos',[EntidadesTipoController::class,'lista']);

Route::get('/entidades_lista',[EntidadesController::class,'lista']);
Route::get('/organigrama', [EntidadesController::class,'organigrama']);
Route::get('/entidad/{entidad}', [EntidadesController::class,'mostrar']);

Route::get('/estandares_categorias',[EntidadesTipoController::class,'lista_estandares']);
//Route::get('/estandares_categorias',[EstandarTipoController::class,'lista']);
Route::get('/catalogo',[EntidadesController::class,'catalogo']);
Route::get('/estandar/{estandar}',[EntidadesController::class,'mostrar_estandar']);

Route::get('/pige/{pige}', [PigeController::class,'mostrar']);

Route::get('/pislea/{pislea}', [PisleaController::class,'mostrar']);

Route::get('/software',[SoftwareController::class,'lista']);
Route::get('/software_recomendado',[SoftwareController::class,'lista_recomendada']);
Route::get('/software/{software}',[SoftwareController::class,'mostrar']);

Route::get('/google',[EntidadesController::class,'est_google']);
Route::get('/geo', function () {
    return view('geo');
});
Route::get('/acerca', function () {
    return view('acerca');
});
Route::get('/contacto', function () {
    return view('contacto');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
