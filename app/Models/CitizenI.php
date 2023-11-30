<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitizenI extends Model
{
    protected $table = 'citizen_i_s';

    protected $fillable = [
        'cid',
        'bday',
        'age',
        'p_birth',
        'm_status',
        'gender',
        'contact',
        'email',
        'religion',
        'ethic_org',
        'ph',
        'sc_ass',
        'other_gov',
        'camp_travel',
        'region',
        'province',
        'city_mun',
        'brgy',
        'house_purok',
        'street',
        'lang_spoke',
        'osca_idnum',
        'gsis_sss',
        'tin',
        'sbe',
        'curr_pension',
    ];
    
}
