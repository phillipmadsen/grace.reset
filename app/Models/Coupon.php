<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $guarded = ['id'];

    public function orders()
    {
        return $this->belongsToMany(App\Models\Order::class);
    }
}
