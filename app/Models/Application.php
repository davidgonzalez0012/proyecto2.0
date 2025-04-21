<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['trabajador_id', 'oferta_id', 'estado'];

    public function trabajador()
    {
        return $this->belongsTo(Worker::class);
    }

    public function oferta()
    {
        return $this->belongsTo(Offer::class);
    }
}
