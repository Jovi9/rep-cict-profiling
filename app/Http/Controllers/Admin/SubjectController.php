<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = DB::table('subjects')
            ->orderBy('program')
            ->orderBy('year_level_id')
            ->orderBy('subject_code')
            ->get();
        return view('admin.subjects.subject_lists', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.subject_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'year_level_id' => ['required', 'integer', 'max:10'],
            'program' => ['required', 'string', 'max:10'],
            'subject_code' => ['required', 'string', 'max:100'],
            'subject_desc' => ['required', 'string', 'max:255'],
            'lec_units' => ['required', 'integer', 'max:5'],
            'lab_units' => ['required', 'integer', 'max:5']
        ]);

        $totalUnits = $request->lec_units + $request->lab_units;

        $query = Subject::create([
            'year_level_id' => $request->year_level_id,
            'program' => $request->program,
            'subject_code' => $request->subject_code,
            'subject_desc' => $request->subject_desc,
            'lec_units' => $request->lec_units,
            'lab_units' => $request->lab_units,
            'total_units' => $totalUnits,
        ]);

        if ($query) {
            return redirect()->route('admin.subject_lists.index');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::where('id', $id)->first();
        return view('admin.subjects.subject_edit', ['subject' => $subject]);
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
        // dd($request);
        $request->validate([
            'year_level_id' => ['required', 'integer', 'max:10'],
            'program' => ['required', 'string', 'max:10'],
            'subject_code' => ['required', 'string', 'max:100'],
            'subject_desc' => ['required', 'string', 'max:255'],
            'lec_units' => ['required', 'integer', 'max:5'],
            'lab_units' => ['required', 'integer', 'max:5']
        ]);

        $totalUnits = $request->lec_units + $request->lab_units;

        $query = Subject::where('id', $id)
            ->update([
                'year_level_id' => $request->year_level_id,
                'program' => $request->program,
                'subject_code' => $request->subject_code,
                'subject_desc' => $request->subject_desc,
                'lec_units' => $request->lec_units,
                'lab_units' => $request->lab_units,
                'total_units' => $totalUnits,
            ]);

        if ($query) {
            return redirect()->route('admin.subject_lists.index');
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
