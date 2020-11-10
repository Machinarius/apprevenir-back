<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Grade extends Model
{
    use SoftDeletes;

    protected $table = 'grades';

    protected $fillable = [
        'educational_institution_id',
        'grade', 
    ];

    public function educationalInstitution()
    {
        return $this->belongsTo(EducationalInstitution::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $educational_institution_id = trim($request['educational_institution_id']) != "" ? trim($request['educational_institution_id']) : NULL;
        
        if ($educational_institution_id) {

            $query->where('educational_institution_id', $educational_institution_id);
        }
    }
}
