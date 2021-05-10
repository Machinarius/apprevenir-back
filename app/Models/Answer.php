<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;

    protected $table = 'answers';

    protected $fillable = [
        'question_id',
        'answer_id',
        'lang',
        'answer',
        'value'
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'question_answer')->withPivot('value');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_answer');
    }

    public function scopeFilter($query, Request $request)
    {
        $question_id = trim($request['question_id']) != "" ? trim($request['question_id']) : NULL;
        $lang = trim($request['lang']) != "" ? trim($request['lang']) : NULL;
        
        if ($question_id) {
            
            $query->where('test_id', $test_id);
        }

        if ($lang) {
            
            $query->where('lang', $lang);
        }
    }
}
