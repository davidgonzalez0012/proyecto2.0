<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = ['trabajador_id', 'empleador_id', 'calificacion', 'comentario'];

    public function trabajador()
    {
        return $this->belongsTo(Worker::class);
    }

    public function empleador()
    {
        return $this->belongsTo(Employer::class);
    }
}
