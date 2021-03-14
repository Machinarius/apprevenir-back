<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Http\Request;

class Commune extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $table = 'communes';
    protected $softCascade = ['neighborhoods'];

    protected $fillable = [
        'user_id',
        'commune', 
        'zone_type'
    ];

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }

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
