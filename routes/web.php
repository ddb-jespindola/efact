<?php

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

Route::get('/registros', [FacturasController::class, 'index'])->name('/registros');

//Route::redirect('/facturas/{anio}/{serie}/{factura}', '/verfactura', ['anio'=>$anio,'serie'=>$serie,'factura'=>$factura ]);

Route::get('/aprobar', [FacturasController::class, 'store']);

// Route::get('/facturas', function(){
//     return view('aceptaFactura',['id'=>request('familia')]);
// })->name('/facturas');

//Route::get('/confirmacion/{id}', [FacturasController::class, 'show'])->name('/confirmacion');

// Route::get('/facturas', function(){
//     return view('aceptaFactura',['anio'=>$anio,'serie'=>$serie,'factura'=>$factura]);
// });

Route::post('/actualizar', [FacturasController::class, 'update'])->name('/actualizar');

// Route::get('/grabar', function(){
//     $grabar = Facturas::create(['SERIE'=>'FE','EJERCICIO'=>'2021','FACTURA'=>'3333','CLIENTE'=>'4229','STATUS'=>'0', 'FECHA'=>'2021-02-20 00:00:00']);
// });

