<?php

namespace Database\Seeders;

use App\Models\YearLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class YearLevelSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YearLevel::create(
            [
                'year_level' => 'First Year'
            ]
        );
        YearLevel::create(
            [
                'year_level' => 'Second Year'
            ]
        );
        YearLevel::create(
            [
                'year_level' => 'Third Year'
            ]
        );
        YearLevel::create(
            [
                'year_level' => 'Fourth Year'
            ]
        );
    }
}
