<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function index()
    {
        // BSIT
        $countBSIT_first = User::where('program', 'BSIT')
            ->where('year_level', 1)
            ->where('_status', 'approved')
            ->count();
        $countBSIT_second = User::where('program', 'BSIT')
            ->where('year_level', 2)
            ->where('_status', 'approved')
            ->count();
        $countBSIT_third = User::where('program', 'BSIT')
            ->where('year_level', 3)
            ->where('_status', 'approved')
            ->count();
        $countBSIT_fourth = User::where('program', 'BSIT')
            ->where('year_level', 4)
            ->where('_status', 'approved')
            ->count();

        // BSIS
        $countBSIS_first = User::where('program', 'BSIS')
            ->where('year_level', 1)
            ->where('_status', 'approved')
            ->count();
        $countBSIS_second = User::where('program', 'BSIS')
            ->where('year_level', 2)
            ->where('_status', 'approved')
            ->count();
        $countBSIS_third = User::where('program', 'BSIS')
            ->where('year_level', 3)
            ->where('_status', 'approved')
            ->count();
        $countBSIS_fourth = User::where('program', 'BSIS')
            ->where('year_level', 4)
            ->where('_status', 'approved')
            ->count();

        // BSCS
        $countBSCS_first = User::where('program', 'BSCS')
            ->where('year_level', 1)
            ->where('_status', 'approved')
            ->count();
        $countBSCS_second = User::where('program', 'BSCS')
            ->where('year_level', 2)
            ->where('_status', 'approved')
            ->count();
        $countBSCS_third = User::where('program', 'BSCS')
            ->where('year_level', 3)
            ->where('_status', 'approved')
            ->count();
        $countBSCS_fourth = User::where('program', 'BSCS')
            ->where('year_level', 4)
            ->where('_status', 'approved')
            ->count();
        return view('admin.overview', [
            'bsit_first' => $countBSIT_first,
            'bsit_second' => $countBSIT_second,
            'bsit_third' => $countBSIT_third,
            'bsit_fourth' => $countBSIT_fourth,

            'bsis_first' => $countBSIS_first,
            'bsis_second' => $countBSIS_second,
            'bsis_third' => $countBSIS_third,
            'bsis_fourth' => $countBSIS_fourth,

            'bscs_first' => $countBSCS_first,
            'bscs_second' => $countBSCS_second,
            'bscs_third' => $countBSCS_third,
            'bscs_fourth' => $countBSCS_fourth
        ]);
    }
}
