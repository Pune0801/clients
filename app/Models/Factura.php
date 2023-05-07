<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'fecha', 'subtotal', 'impuestos', 'total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function itemsFactura()
    {
        return $this->hasMany(ItemFactura::class);
    }
}
