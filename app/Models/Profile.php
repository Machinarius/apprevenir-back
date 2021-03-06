<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $table = 'profiles';

    protected $fillable = [
        'first_names', 
        'last_names',
        'phone',
        'birthday',
        'education_level_id',
        'is_student',
        'gender_id',
        'civil_status_id',
        'country_id',
        'state_id',
        'city_id',
        'client_config'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
