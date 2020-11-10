<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'category_id',
        'lang'
    ];

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'category_test');
    }

    public function scopeFilter($query, Request $request)
    {
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $category_id = trim($request['category_id']) != "" ? trim($request['category_id']) : NULL;
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        
        if ($name) {
            
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($category_id) {
            
            $query->where('category_id', $category_id);
        }

        if ($lang) {
            
            $query->where('lang', $lang);
        }
    }
}
