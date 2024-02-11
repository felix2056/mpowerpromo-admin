<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierContact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $appends = ['firstPhone'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function phones()
    {
        return $this->hasMany(SupplierContactPhone::class);
    }

    public function getFirstPhoneAttribute()
    {
        return $this->phones->first();
    }
}
