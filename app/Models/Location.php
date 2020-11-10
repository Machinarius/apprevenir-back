<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Http\Request;

class Location extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['areas'];

    protected $table = 'locations';

    protected $fillable = [
        'user_id',
        'location', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $user_id = trim($request['user_id']) != "" ? trim($request['user_id']) : NULL;
        
        if ($user_id) {

            $query->where('user_id', $user_id);
        }
    }
}
