<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Addiction extends Model
{
    protected $table = 'addictions';

    protected $fillable = [
        'name',
        'addiction_id',
        'lang',
        'description'
    ];

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'test_addiction');
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $addiction_id = trim($request['addiction_id']) != "" ? trim($request['addiction_id']) : NULL;
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        
        if ($name) {
            
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($addiction_id) {
            
            $query->where('addiction_id', $addiction_id);
        }

        if ($lang) {
            
            $query->where('lang', $lang);
        }
    }
}
