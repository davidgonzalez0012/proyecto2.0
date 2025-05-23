<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'tipo_usuario'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
