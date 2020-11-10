<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Country extends Model
{
    protected $table = 'countries';

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        
        if ($name) {

            $query->where('name', 'LIKE', '%' . $name . '%');
        }
    }
}
