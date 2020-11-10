<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Http\Request;

class Area extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['schedules'];

    protected $table = 'areas';

    protected $fillable = [
        'location_id',
        'area', 
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedul::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $location_id = trim($request['location_id']) != "" ? trim($request['location_id']) : NULL;
        
        if ($location_id) {

            $query->where('location_id', $location_id);
        }
    }
}
