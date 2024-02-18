<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Hyn\Tenancy\Traits\UsesTenantConnection;

class SocialMedia extends Model
{
    use HasFactory, UsesTenantConnection;

    protected $guarded = [];

    protected $casts = [
        'show' => 'boolean',
        'is_rounded' => 'boolean',
        'has_labels' => 'boolean'
    ];

    public function getNetworksAttribute($value)
    {
        return json_decode($value);
    }
}
