<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DifficultyLevel extends Model
{
    protected $table = 'difficulty_levels';

    protected $fillable = [
        'name',
        'difficulty_level_id',
        'lang'
    ];

    public function testInformation()
    {
        return $this->hasOne(TestInformation::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $difficulty_level_id = trim($request['difficulty_level_id']) != "" ? trim($request['difficulty_level_id']) : NULL;
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        
        if ($name) {
            
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($difficulty_level_id) {
            
            $query->where('difficulty_level_id', $difficulty_level_id);
        }

        if ($lang) {
            
            $query->where('lang', $lang);
        }
    }
}
