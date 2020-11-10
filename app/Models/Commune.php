<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Http\Request;

class Commune extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['neighborhoods'];

    protected $table = 'communes';

    protected $fillable = [
        'zone_id',
        'commune', 
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $zone_id = trim($request['zone_id']) != "" ? trim($request['zone_id']) : NULL;
        
        if ($zone_id) {

            $query->where('zone_id', $zone_id);
        }
    }
}
