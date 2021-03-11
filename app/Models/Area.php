<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Http\Request;

class Area extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $table = 'areas';

    protected $fillable = [
        'user_id',
        'area', 
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
