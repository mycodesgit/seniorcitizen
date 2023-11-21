<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $table = 'citizens';

    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'ext',
    ];
}
