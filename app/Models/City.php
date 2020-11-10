<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class City extends Model
{
    protected $table = 'cities';

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $state = trim($request['state']) != "" ? trim($request['state']) : NULL;
        
        if ($name) {

            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($state) {

            $query->where('state_id', $country);
        }
    }
}
