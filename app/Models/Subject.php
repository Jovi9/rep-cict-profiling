<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_level_id',
        'program',
        'subject_code',
        'subject_desc',
        'lec_units',
        'lab_units',
        'total_units'
    ];
}
