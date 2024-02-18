<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Hyn\Tenancy\Traits\UsesTenantConnection;

class Robot extends Model
{
    use HasFactory, UsesTenantConnection;

    protected $guarded = [];
}
