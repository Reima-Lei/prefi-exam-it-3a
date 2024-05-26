<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_code',
        'name',
        'description',
        'instructor',
        'schedule',
        'grades',
        'prelim',
        'midterm',
        'pre_final',
        'final',
        'date_taken'
    ];
}
