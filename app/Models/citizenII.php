<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citizenII extends Model
{
    protected $table = 'citizen_i_i_s';

    protected $fillable = [
        'cid',
        'spouse_lname',
        'spouse_fname',
        'spouse_mname',
        'spouse_ext',
        'father_lname',
        'father_fname',
        'father_mname',
        'father_ext',
        'mother_lname',
        'mother_fname',
        'mother_mname',
        'mother_ext',
        'child_fname',
        'child_occup',
        'child_income',
        'child_age',
        'child_working',
        'depend_fname',
        'depend_occup',
        'depend_income',
        'depend_age',
        'depend_working',
    ];

}
