<?php

namespace App\Http\Controllers\Student;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $user_subjects = Subject::where('year_level_id', Auth::user()->year_level)
            ->where('program', Auth::user()->program)
            ->orderBy('subject_code')
            ->get();
        $user = User::where('id', Auth::user()->id)->first();
        return view('student.subjects', [
            'subjects' => $user_subjects,
            'user' => $user
        ]);
    }
}
