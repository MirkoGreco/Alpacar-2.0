<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'stato', 'titolo', 'prezzo', 'chilometraggio', 'immatricolazione', 'potenza', 'cilindrata', 'colore', 'alimentazione', 'carrozzeria', 'descrizione', 'indirizzo',
        'model_id', 'city_id'
    ];

    public function posts()
    {
        return $this->belongsTo(User::class);
    }
    public function cities()
    {
        return $this->belongsTo(City::class);
    }
    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
    public function details()
    {
        return $this->hasOne(CarDetails::class);
    }
}
