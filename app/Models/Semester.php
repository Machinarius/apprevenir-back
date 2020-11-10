<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Semester extends Model
{
    use SoftDeletes;

    protected $table = 'semesters';

    protected $fillable = [
        'modality_id',
        'semester', 
    ];

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $modality_id = trim($request['modality_id']) != "" ? trim($request['modality_id']) : NULL;
        
        if ($modality_id) {

            $query->where('modality_id', $modality_id);
        }
    }
}
