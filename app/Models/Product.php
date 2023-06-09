<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the options for generating the slug.
     */
    public function categories()
    {
        return $this->belongsToMany(related:Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(related: Order::class);
    }
}
