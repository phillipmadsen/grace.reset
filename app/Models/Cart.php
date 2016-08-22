<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['product_id', 'amount'];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    public function product()
    {
        return $this->belongsTo(App\Models\Product::class);
    }
}
