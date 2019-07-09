<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use SoftDeletes;
    
    public $table = 'inventory';

    protected $fillable = [
        'nombre', 'cantidad', 'proveedor', 'numero_lote', 'fecha_vencimiento', 'precio',
    ];
    
    protected $dates = ['deleted_at'];

    public function inventory()
	{

		return $this->hasMany('App\Delivery','id_producto','id');
		
	}
}
