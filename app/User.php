<?php

namespace App;

use App\Models\Review;
use App\Models\UserPhoto;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Integer;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    const ROLES = [
        1 => 'Стюардесса бизнес-авиации',
        2 => 'Стюардесса Freelance',
        3 => 'Кандидат на обучение',
        4 => 'Работодатель',
        5 => 'Admin',
        6 => 'SuperAdmin',
    ];
    const SEX = [
        0 => 'Не указан',
        1 => 'Жен',
        2 => 'Муж'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
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
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        if ($password) {
            $this->attributes['password'] = bcrypt($password);
            $this->attributes['remember_token'] = null;
        }
    }

    public function getRoleAttribute()
    {
        return $this::ROLES[$this->role_id];
    }

    public function getSexAttribute()
    {
        return $this::SEX[$this->sex_id];
    }

    public function getFioAttribute()
    {
        return $this->attributes['name'] . ' ' .
            $this->attributes['patronymic'] . ' ' .
            $this->attributes['surname'];
    }

    public function getAgeAttribute()
    {
        return Carbon::now()->diffInYears($this->asDateTime($this->attributes['birth']));
    }

    public function isAdmin()
    {
        return $this->role_id > 4 ? true : false;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }

    public function photos()
    {
        return $this->hasMany(UserPhoto::class, 'user_id');
    }


    public function pay(Integer $days)
    {
        $this->attributes['password'] = Carbon::now(+$days);
        $this->save();
    }

    public function getPayedAttribute()
    {
        return $this->role_id > 4 ? true : false;
    }
}