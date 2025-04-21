<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //
    use HasFactory;

    protected $fillable = ['usuario_id', 'habilidades', 'experiencia', 'calificacion'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function postulaciones()
    {
        return $this->hasMany(Application::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Assessment::class);
    }   
}
