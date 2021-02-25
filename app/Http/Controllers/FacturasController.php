<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Facturas;
use App\Clientes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FacturasController extends Controller
{
/**
 * /////////////////////////////////////////////////////////////////////
 */

    public function index()
    {
        $facturas = DB::table('facturas')
        ->join('clientes', 'clientes.CLIENTE_ID', '=', 'facturas.CLIENTE')
        ->select('facturas.*', 'clientes.CLIENTE_NOMBRE')
        ->paginate(15);

        return view('registros', ['facturas'=>$facturas]);
    }
/**
 * /////////////////////////////////////////////////////////////////////
 */
    public function store(Request $request)
    {
        //date_default_timezone_set('America/Bogota');
        //$fechaActual = date('Y-m-d'). " 00:00:00";
        //$fact = Facturas::where('CLIENTE', '=', Request('dat1'))->where('EJERCICIO', '=', Request('dat2'))->where('SERIE', '=', Request('dat3'))->where('FACTURA', '=', Request('dat4'))->first();
        $fact = Facturas::where('CONCAT', '=', Request('dat'))->first();
        $now = Carbon::now('America/Bogota');
        
        if ($fact === null) {
            // Return to No existe factura
            return view('error');

        }else{
            $cliente = Clientes::where('CLIENTE_ID', '=',  $fact->CLIENTE)->first() ;

            if ($fact->STATUS == 0) {
                $facturaUpdateState = $fact->update(['STATUS' => '1']); 
                return view('aceptaFactura', ['data' => $fact, 'cliente' => $cliente]);
            }

            if ( $fact->STATUS == 1) {
                // Si el status es ACUSADO (1) y han pasado 3 dias, se actualiza automaticamente a ACEPTADO TACITAMENTE (2)
                if($now->gt($fact->updated_at->addHours(72)) && $fact->STATUS == '1'){
                    $facturaUpdateState = $fact->update(['STATUS' => '2']); 
                    $fact = Facturas::where('CONCAT', '=', Request('dat'))->first();
                    return view('accepted', ['data' => $fact, 'cliente' => $cliente]);  
                }
                return view('aceptaFactura', ['data' => $fact, 'cliente' => $cliente]);   
            }

            if( $fact->STATUS == 2 ){
                return view('accepted', ['data' => $fact, 'cliente' => $cliente]);   
            }

            if( $fact->STATUS == 3 || $fact->STATUS == 4 ){
                return view('accepted', ['data' => $fact, 'cliente' => $cliente]);   
            }

            else{
                return view('error');
            }
         }
    }

/**
 * /////////////////////////////////////////////////////////////////////
 */

    public function show($estado)
    {
            //return view('aceptaFactura', ['id'=>$estado]);
        
    }

/**
 * /////////////////////////////////////////////////////////////////////
 */

    public function edit(Facturas $facturas)
    {
        //
    }

/**
 * /////////////////////////////////////////////////////////////////////
 */

     public function update(Request $request, Facturas $facturas)
    {
        $fact = Facturas::where('CLIENTE', '=', Request('dat1'))->where('EJERCICIO', '=', Request('dat2'))->where('SERIE', '=', Request('dat3'))->where('FACTURA', '=', Request('dat4'))->first();
        $status = Request('status');
        if ($fact === null) {
            return 'error';
        }
        else{
            if ($status == '3' || $status == '4' ) {
                $facturaUpdateState = $fact->update(['STATUS' => $status]);
                return 'ok';
            }else{
                return 'error';
            }
        }


    }

/**
* /////////////////////////////////////////////////////////////////////
*/

    public function search(Request $request)
    {
        // $facturas = DB::table('facturas')
        // ->join('clientes', 'clientes.CLIENTE_ID', '=', 'facturas.CLIENTE')
        // ->select('facturas.*', 'clientes.CLIENTE_NOMBRE')
        // ->paginate(15);


        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');
        $other    = $request->input('other');

        $facturas = DB::table('facturas')->select()
            ->where('FECHA', '>=', $fromDate)
            ->where('FECHA', '<=', $toDate)
            ->join('clientes', 'clientes.CLIENTE_ID', '=', 'facturas.CLIENTE')
            ->select('facturas.*', 'clientes.CLIENTE_NOMBRE')
            ->paginate(15);
        
        return view('registros', ['facturas'=>$facturas]);
    }

/**
* /////////////////////////////////////////////////////////////////////
*/

    public function generarVista(Request $request){
        $familia = 'asdasd';
        return redirect()->route('/facturas', ['familia'=>$familia]);
    }
}