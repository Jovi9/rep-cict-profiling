<?php

namespace App\Http\Controllers\Student;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('student.profile.profile', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
        $user = User::where('id', $id)->first();
        return view('student.profile.profile_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
        $query = '';
        // dd($request);
        $request->validate([
            'student_id' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'program' => ['required', 'string', 'max:10'],
            'year_level' => ['required', 'integer', 'max:5'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string'],
        ]);

        $dateOfBirth = $request->dob;
        $years = Carbon::parse($dateOfBirth)->age;

        $query = User::where('id', $id)
            ->update([
                'student_id' => $request->student_id,
                'name' => $request->name,
                'program' => $request->program,
                'year_level' => $request->year_level,
                'dob' => $dateOfBirth,
                'age' => $years,
                'gender' => $request->gender,
                'address' => $request->address,
            ]);

        if ($query) {
            return redirect()->route('student.profile.index');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
