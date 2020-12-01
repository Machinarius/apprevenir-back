<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Result extends Model
{
    use SoftDeletes;

    protected $table = 'results';

    protected $fillable = [
        'user_id',
        'test_id', 
        'information_level_id',
        'addiction_id',
        'date',
        'time',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function informationLevel()
    {
        return $this->belongsTo(InformationLevel::class);
    }

    public function addiction()
    {
        return $this->belongsTo(Addiction::class);
    }

    public function answers()
    {
        return $this->belongsToMany(Answer::class, 'user_answer');
    }
}
