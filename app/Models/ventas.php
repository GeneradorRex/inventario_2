<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'id_client',
        'cantidad',
        'prize_ventas',
        'valor_uni',
        'soporte_compras',
    ];

}
