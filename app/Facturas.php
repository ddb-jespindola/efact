<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    protected $fillable = ['SERIE','EJERCICIO','FACTURA','CLIENTE','STATUS', 'FECHA', 'CONCAT'];
}
