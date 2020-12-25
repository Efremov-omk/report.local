<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'academic_year',
        'semester',
        'discipline',
        'number_of_students',
        'students_five',
        'students_four',
        'students_three',
        'students_two',
        'percent_five',
        'percent_four',
        'percent_three',
        'percent_two',
        'KPU',
        'PU',
        'SA',
    ];
}
