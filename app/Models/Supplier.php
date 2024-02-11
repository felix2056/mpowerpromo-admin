<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contacts()
    {
        return $this->hasMany(SupplierContact::class);
    }

    public function endpoints()
    {
        return $this->hasMany(SupplierEndpoint::class);
    }

    public function dist_supplier()
    {
        return $this->hasOne(SupplierDistributor::class);
    }
}
