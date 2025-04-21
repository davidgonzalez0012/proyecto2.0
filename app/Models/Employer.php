<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'empresa', 'descripcion', 'reputacion'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function ofertas()
    {
        return $this->hasMany(Offer::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Assessment::class);
    }
}
