<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_orders', 'order_id', 'company_id');
    }
}
