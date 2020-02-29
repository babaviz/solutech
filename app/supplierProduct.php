<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplierProduct extends Model
{
    protected $fillable=['supplier_id','product_id'];

    public function supplier(){
       return $this->belongsTo(Supplier::class);
    }

    public function product(){
        return $this->belongsTo(product::class);
    }
}
