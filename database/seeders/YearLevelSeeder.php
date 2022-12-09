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
                'numeric_yl' => 1,
                'year_level' => 'First Year'
            ]
        );
        YearLevel::create(
            [
                'numeric_yl' => 2,
                'year_level' => 'Second Year'
            ]
        );
        YearLevel::create(
            [
                'numeric_yl' => 3,
                'year_level' => 'Third Year'
            ]
        );
        YearLevel::create(
            [
                'numeric_yl' => 4,
                'year_level' => 'Fourth Year'
            ]
        );
    }
}
