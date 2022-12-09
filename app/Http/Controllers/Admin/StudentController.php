<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->whereNot('_status', 'administration')
            ->orderBy('_status', 'desc')
            ->orderBy('program')
            ->orderBy('name')
            ->get();
        return view('admin.students.manage_students', ['users' => $users]);
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
        $user = User::where('id', $id)->first();
        return view('admin.students.view_student_details', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $query = "";
        if ($request->action === 'approve') {
            $query = User::where('id', $id)
                ->update(['_status' => 'approved']);
            if ($query) {
                return redirect()->route('admin.student_lists.index');
            }
        } elseif ($request->action === 'decline') {
            $query = User::where('id', $id)
                ->update(['_status' => 'declined']);
            if ($query) {
                return redirect()->route('admin.student_lists.index');
            }
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

    // public function search(Request $request)
    // {
    //     $output = '';
    //     if ($request->ajax()) {
    //         $users = User::where('name', 'like', '%' . $request->txtsearch . '%')
    //             ->orwhere('student_id', 'like', '%' . $request->txtsearch . '%')
    //             ->orderBy('_status', 'desc')
    //             ->orderBy('program')
    //             ->orderBy('name')
    //             ->get();
    //         if ($users) {
    //             foreach ($users as $user) {
    //                 $program = '';
    //                 if ($user->program === 'BSIT') {
    //                     $program = 'BS in Information Technology';
    //                 } elseif ($user->program === 'BSIS') {
    //                     $program = 'BS in Information System';
    //                 } elseif ($user->program === 'BSCS') {
    //                     $program = 'BS in Computer Science';
    //                 }
    //                 $output .= '<tr class="text-center border-t-2 border-gray-500">
    //                                 <td class="lg:py-3">' . $user->student_id . '</td>
    //                                 <td class="">' . $user->name . '</td>
    //                                 <td class="">' . $program . '</td>
    //                                 <td class="">' . $user->year_level . '</td>
    //                             </tr>';
    //             }
    //             return response()->json($output);
    //         }
    //     }
    //     return view('admin.manage_students');
    // }
}
