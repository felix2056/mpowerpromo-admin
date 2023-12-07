<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorePage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function getUrlAttribute()
    {
        return asset('stores/' . $this->store->host . '/' . $this->attributes['url']);
    }

    public function getFileAttribute()
    {
        return asset('stores/' . $this->store->host . '/' . $this->attributes['file']);
    }
}
