<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Schedul extends Model
{
    use SoftDeletes;

    protected $table = 'schedules';

    protected $fillable = [
        'area_id',
        'schedul', 
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $area_id = trim($request['area_id']) != "" ? trim($request['area_id']) : NULL;
        
        if ($area_id) {

            $query->where('area_id', $area_id);
        }
    }
}
