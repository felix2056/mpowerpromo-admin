<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreUrl extends Model
{
    use HasFactory;

    protected $fillable = [
        "store_id",
        "url"
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
