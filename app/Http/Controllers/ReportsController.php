<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Citizen;

class ReportsController extends Controller
{
    public function reportsRead() {
        $citizen = Citizen::all();
        return view ('reports.datalist', compact('citizen'));
    }
}
