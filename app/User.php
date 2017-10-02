<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


        const USUARIO_VERIFICADO = '1';
        const USUARIO_NO_VERIFICADO = '2';

        const USUARIO_ADMINISTRADOR = 'true';
        const USUARIO_REGULAR = 'false';

        protected $table = 'users';

    protected $fillable = [
        'name', 
        'email',
        'password',
        'verified',
        'verification_token',
        'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'verification_token',

    ];
    public function verificacion()
    {
        return $this->verified == User::USUARIO_VERIFICADO;
    }

    public function UsAdmin()
    {
        return $this->admin == User::USUARIO_ADMINISTRADOR;
    }

    public static function generarVerifToken()
    {
       return str_random(40);
    }
}
