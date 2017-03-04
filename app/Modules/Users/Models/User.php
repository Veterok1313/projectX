<?php

namespace App\Modules\Users\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable, Sortable;

    public $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        if ($password){
            $this->attributes['password'] = bcrypt($password);
        }

    }

    public function scopeAdmin($query)
    {
        return $query->filtered()->order();
    }

    public function scopeFiltered($query)
    {
        return $query;
    }

    public function scopeList($query)
    {
        return $query->filtered()->order();
    }

    public function scopeOrder($query)
    {
        return $query;
    }

}
