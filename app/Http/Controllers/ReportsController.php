<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Citizen;
use App\Models\CitizenI;
use App\Models\citizenII;
use App\Models\CitizenIII;
use App\Models\citizenBck;

class ReportsController extends Controller
{
    public function reportsRead() {
        $citizen = Citizen::join('citizen_i_s', 'citizens.id', '=', 'citizen_i_s.cid')
                        ->select('citizens.*', 'citizen_i_s.*')
                        ->get();
        return view ('reports.datalist', compact('citizen'));
    }
}
