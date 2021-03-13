<?php

use Illuminate\Support\Facades\Auth;

use App\Facturas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturasController;
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

Route::get('/registros', [FacturasController::class, 'index'])->name('/registros')->middleware('auth');

//Route::redirect('/facturas/{anio}/{serie}/{factura}', '/verfactura', ['anio'=>$anio,'serie'=>$serie,'factura'=>$factura ]);

Route::get('/aprobar', [FacturasController::class, 'store']);

Route::post('/actualizar', [FacturasController::class, 'update'])->name('/actualizar');

Route::get('/search/{search?}', [FacturasController::class, 'search'])->name('/search');

Route::get('/stateupdater', [FacturasController::class, 'efactActualizador'])->name('/stateupdater');

Auth::routes();

Route::get('/', function(){
    return redirect('/registros');
});


