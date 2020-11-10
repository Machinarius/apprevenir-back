<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class InformationLevel extends Model
{
    protected $table = 'information_levels';

    protected $fillable = [
        'name',
        'information_level_id',
        'lang'
    ];

    public function testInformation()
    {
        return $this->hasOne(TestInformation::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $information_level_id = trim($request['information_level_id']) != "" ? trim($request['information_level_id']) : NULL;
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        
        if ($name) {
            
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($information_level_id) {
            
            $query->where('information_level_id', $information_level_id);
        }

        if ($lang) {
            
            $query->where('lang', $lang);
        }
    }
}
