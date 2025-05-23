<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

     /**
      * The attributes that are mass assignable.
     *
      * @var list<string>
     */
    //  protected $fillable = [
    //      'name',
    //      'email',
    //     'password',
    // ];

     /**
     * The attributes that should be hidden for serialization.
      *
    * @var list<string>
     */
    //  protected $hidden = [
    //     'password',
    //     'remember_token',
    //  ];

    // /**
    //  * Get the attributes that should be cast.
    //  *
    //  * @return array<string, string>
    //  */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    use HasFactory;

    protected $table = 'Users';

    protected $fillable = ['tipo_usuario' ,'nombre', 'email', 'password' ];

    protected $hidden = ['password'];

    public function empleador()
    {
        return $this->hasOne(Employer::class);
    }

    public function trabajador()
    {
        return $this->hasOne(Worker::class);
    }

    public function admin()
    {
        return $this->hasOne(Administrator::class);
    }

    public function mensajesEnviados()
    {
        return $this->hasMany(Message::class, 'remitente_id');
    }
    public function mensajesRecibidos()
    {
        return $this->hasMany(Message::class, 'destinatario_id');
    }




}


