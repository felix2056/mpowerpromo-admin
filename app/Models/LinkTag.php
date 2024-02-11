<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Hyn\Tenancy\Traits\UsesTenantConnection;

class LinkTag extends Model
{
    use HasFactory, UsesTenantConnection;

    protected $guarded = [];

    public $appends = [
        'tag_type'
    ];

    public function headTag()
    {
        return $this->belongsTo(HeadTag::class);
    }

    public function getIsExternalAttribute()
    {
        return $this->attributes['is_external'] === 1;
    }

    public function getIsInlineAttribute()
    {
        return $this->attributes['is_inline'] === 1;
    }

    public function getTagTypeAttribute()
    {
        return 'Link';
    }
}
