<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class TestInformation extends Model
{
    use SoftDeletes;

    protected $table = 'test_informations';

    protected $fillable = [
        'information_level_id',
        'difficulty_level_id',
        'url_video',
        'professional_help',
        'url_interest', 
        'min',
        'max',
    ];

    public function informationLevel()
    {
        return $this->belongsTo(InformationLevel::class);
    }

    public function difficultyLevel()
    {
        return $this->belongsTo(DifficultyLevel::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
