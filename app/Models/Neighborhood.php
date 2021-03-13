<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Neighborhood extends Model
{
    use SoftDeletes;

    protected $table = 'neighborhoods';

    protected $fillable = [
        'commune_id',
        'neighborhood', 
    ];

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $commune_id = trim($request['commune_id']) != "" ? trim($request['commune_id']) : NULL;
        
        if ($commune_id) {

            $query->where('commune_id', $commune_id);
        }
    }
}
