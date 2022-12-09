<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateOfBirth = '1990-01-01';
        $years = Carbon::parse($dateOfBirth)->age;
        User::create([
            'student_id' => 'none',
            'name' => 'CICT Administrator',
            'program' => 'CICT',
            'year_level' => 0,
            'dob' => $dateOfBirth,
            'age' => $years,
            'gender' => 'Male',
            'address' => 'CatSU',
            '_status' => 'administration',
            'email' => 'fjbagadiong@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('administrator');
    }
}
