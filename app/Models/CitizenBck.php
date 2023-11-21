<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitizenBck extends Model
{
    
    protected $table = 'citizen_bcks';

    protected $fillable = [
        'cid',
        'living_reside',
        'house_cond',
        'source_inass',
        'assreal_immov',
        'assr_permov',
        'month_inc',
        'prob_needs',
        'med_concern',
        'den_conern',
        'optical',
        'hearing',
        'soc_emo',
        'hearing',
        'area_diff',
        'med_main',
        'med_sched',
        'med_schedyes',
    ];

}
