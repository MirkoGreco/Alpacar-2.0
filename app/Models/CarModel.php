<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'carmodels';
    use HasFactory;
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
