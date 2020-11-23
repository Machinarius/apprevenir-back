<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;

class Test extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['testInformations', 'results'];

    protected $table = 'tests';

    protected $fillable = [
        'test_id',
        'lang', 
        'name',
        'image',
        'introduction',
        'description',
        'status'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function testInformations()
    {
        return $this->hasMany(TestInformation::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function addictions()
    {
        return $this->belongsToMany(Addiction::class, 'test_addiction');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_test');
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        $name = trim($request['name']) != "" ? trim($request['name']) : NULL;
        $categories = trim($request['categories']) != "" ? trim($request['categories']) : NULL;
        $status = trim($request['status']) != "" ? $request['status']  === 'true' || $request['status']  === 1  ? true : false : true;

        if ($status) {

            $query->where('status', $status);
        }

        if ($lang) {

            $query->where('lang', $lang);
        }

        if ($name) {

            $query->where('name', $name);
        }

        if ($categories) {

            if (is_array($categories)) {
                $query->whereHas('categories', function($category) use ($categories) {
                            $category->whereIn('categories.id', $categories);
                        });
            }
        }
    }
}
