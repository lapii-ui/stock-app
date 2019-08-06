<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    protected $fillable = [
        'id',
        'warehouse_name', 
        'stock',
        'address',
        'remark',
        'is_default',
        'is_delete',
    ];
}
