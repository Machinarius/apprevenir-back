<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Http\Request;

class Modality extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['semesters'];

    protected $table = 'modalities';

    protected $fillable = [
        'program_id',
        'modality', 
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }

    public function scopeFilter($query, Request $request)
    {
        $program_id = trim($request['program_id']) != "" ? trim($request['program_id']) : NULL;
        
        if ($program_id) {

            $query->where('program_id', $program_id);
        }
    }
}
