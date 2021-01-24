<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'last_online',
        'created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function exams()
    {
        return $this->hasMany(exam::class); 
    }

    public function workplace()
    {
        return $this->belongsTo(workplace::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Get the direction for the user.
     */
    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    /* authorization */
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3


}
