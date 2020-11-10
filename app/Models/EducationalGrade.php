<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class EducationalGrade extends Model
{
    use SoftDeletes;

    protected $table = 'educational_grades';

    protected $fillable = [
        'user_id',
        'grade', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $user_id = trim($request['user_id']) != "" ? trim($request['user_id']) : NULL;
        
        if ($user_id) {

            $query->where('user_id', $user_id);
        }
    }
}
