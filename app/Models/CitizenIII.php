<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitizenIII extends Model
{
    protected $table = 'citizen_i_i_i_s';

    protected $fillable = [
        'cid',
        'educ_attain',
        'share_skill',
        'area_techskill',
        'comm_serveinv',
    ];
}
