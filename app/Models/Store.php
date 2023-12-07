<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'host',
        'logo_url',
        'directory',
        'theme',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Product::class);
    }

    public function customers()
    {
        return $this->hasManyThrough(Customer::class, Order::class);
    }

    public function customerPhones()
    {
        return $this->hasManyThrough(CustomerPhone::class, Customer::class);
    }

    public function customerStates()
    {
        return $this->hasManyThrough(CustomerState::class, Customer::class);
    }

    public function customerAssignments()
    {
        return $this->hasManyThrough(CustomerAssignment::class, Customer::class);
    }

    public function redirectUrls()
    {
        return $this->hasMany(StoreUrl::class);
    }

    public function themes()
    {
        return $this->hasMany(StoreTheme::class);
    }

    public function pages()
    {
        return $this->hasMany(StorePage::class);
    }

    public function getHostAttribute()
    {
        return $this->subdomain . '.' . $this->domain;
    }

    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : null;
    }

    public function getDirectoryAttribute()
    {
        return asset('storage/stores/' . $this->host);
    }

    public function getThemeAttribute()
    {
        return $this->themes()->where('is_published', true)->first();
    }
}
