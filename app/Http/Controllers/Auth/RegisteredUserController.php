<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'program' => ['required', 'string', 'max:10'],
            'year_level' => ['required', 'integer', 'max:5'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $dateOfBirth = $request->dob;
        $years = Carbon::parse($dateOfBirth)->age;

        $user = User::create([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'program' => $request->program,
            'year_level' => $request->year_level,
            'dob' => $dateOfBirth,
            'age' => $years,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('student');;

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
