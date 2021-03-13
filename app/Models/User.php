<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Hash;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes, SoftCascadeTrait, HasRoles;

    protected $softCascade = [
        'profile', 
        'areas',
        'loccations',
        'schedules',
        'educationalGrades',
        'educationalInstitutions',
        'grades',
        'communes',
        'neighborhoods',
        'modalities',
        'programs',
        'semesters',
        'results'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'password',
        'reference',
        'client',
        'status',
        'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedul::class);
    }

    public function educationalGrades()
    {
        return $this->hasMany(EducationalGrade::class);
    }

    public function educationalInstitutions()
    {
        return $this->hasMany(EducationalInstitution::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }

    public function modalities()
    {
        return $this->hasMany(Modality::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function answers()
    {
        return $this->belongsToMany(Answer::class, 'user_answer');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function scopeFilter($query, Request $request)
    {
        $email = trim($request['email']) != "" ? trim($request['email']) : NULL;
        $client = trim($request['client']) != "" ? trim($request['client']) : NULL;
        $code = trim($request['code']) != "" ? trim($request['code']) : NULL;
        $status = trim($request['status']) != "" ? $request['status']  === 'true' || $request['status']  === 1  ? true : false : NULL;

        if ($email) {
            
            $query->where('email', 'LIKE', '%' . $email . '%');
        }

        if ($client) {

            $query->where('client', $client);
        }
        
        if ($code) {

            $query->where('code', $code);
        }

        if (isset($status)) {

            $query->where('status', $status);
        }
    }
}
