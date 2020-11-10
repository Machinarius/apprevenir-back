<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class State extends Model
{
    protected $table = 'states';

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $country = trim($request['country']) != "" ? trim($request['country']) : NULL;
        
        if ($name) {

            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($country) {

            $query->where('country_id', $country);
        }
    }
}
