<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use SoftDeletes;
    
    public $table = 'delivery';

    protected $fillable = [
        'id_producto', 'cantidad', 'email', 'precio',
    ];
    
    protected $dates = ['deleted_at'];

    public function delivery()
	{

		return $this->belongsTo('App\Inventory','id_producto','id');
		
	}

}
