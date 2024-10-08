<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    use HasFactory;

    protected $fillable = [ 'id_product', 'id_proveedors', 'cantidad', 'precio_de_compra', 'valor_uni', 'soporte_compras', ];

}
