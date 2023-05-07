<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFactura extends Model
{
    use HasFactory;

    protected $table = 'items_factura';

    protected $fillable = ['factura_id', 'producto', 'cantidad', 'precio_unitario', 'total'];

    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }
}
