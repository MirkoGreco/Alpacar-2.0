<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    protected $table = 'cardetails';
    protected $fillable = [
        'proprietari', 'cambio', 'rivestimenti', 'vernice', 'posti', 'porte', 'consumi', 'emissioni', 'equipaggiamento',
    ];
    use HasFactory;
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
