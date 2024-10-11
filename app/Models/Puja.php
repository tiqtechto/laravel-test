<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puja extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'category_id', 'price_range_start', 'price_range_end'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
