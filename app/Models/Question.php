<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;

class Question extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['answers'];

    protected $table = 'questions';

    protected $fillable = [
        'test_id',
        'question_id',
        'lang',
        'order',
        'question'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $order = trim($request['order']) != "" ? trim($request['order']) : NULL;
        $test_id = trim($request['test_id']) != "" ? trim($request['test_id']) : NULL;
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        
        if ($order) {
            
            $query->where('order', $order);
        }

        if ($test_id) {
            
            $query->where('test_id', $test_id);
        }

        if ($lang) {
            
            $query->where('lang', $lang);
        }
    }
}
