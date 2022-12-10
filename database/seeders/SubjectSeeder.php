<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'CC101',
            'subject_desc' => 'Introduction to Computing',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'CC102',
            'subject_desc' => 'Computer Programming 1',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'GEC1',
            'subject_desc' => 'Understanding the Self',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'GEC2',
            'subject_desc' => 'Reading in the Philippine History with Indigenous People Education',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'GEC4',
            'subject_desc' => 'Mathematics in the Modern World',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'GEC E6',
            'subject_desc' => 'The Entrepreneurial Mind',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'PE1',
            'subject_desc' => 'Wellness and Fitness',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 1,
            'program' => 'BSIT',
            'subject_code' => 'NSTP1',
            'subject_desc' => 'National Service Training Program 1',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        // 1st sem second year

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'CC104',
            'subject_desc' => 'Data Structures and Algorithms',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKA1',
            'subject_desc' => 'Platform Technologies: Advanced Operating Systems',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKB1',
            'subject_desc' => 'Web Systems and Technologies: Web Design',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'ITP322',
            'subject_desc' => 'Integrative Programming and Technologies 1',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'GEC9',
            'subject_desc' => 'The Life and Works of Rizal',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'GEC8',
            'subject_desc' => 'Ethics',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'GEC E9',
            'subject_desc' => 'Foreign Language',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 2,
            'program' => 'BSIT',
            'subject_code' => 'PE4',
            'subject_desc' => 'Sports',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        // 1st sem third year

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITP731',
            'subject_desc' => 'Advance Database Systems',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITP831',
            'subject_desc' => 'Networking 2',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITP931',
            'subject_desc' => 'Seminar on Special Topics in Information Technology',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITP1031',
            'subject_desc' => 'Research Methods',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKA2',
            'subject_desc' => 'Platform Technologies: Mobile Application Development',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKB2',
            'subject_desc' => 'Web Systems and Technologies: E-Commerce',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 3,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKC2',
            'subject_desc' => 'Integrative Programming and Technologies 2: Events-Driven Programming',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        // 1st sem fourth year

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 4,
            'program' => 'BSIT',
            'subject_code' => 'ITP1333',
            'subject_desc' => 'Infromation Assurance and Security 2',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 4,
            'program' => 'BSIT',
            'subject_code' => 'ITP1441',
            'subject_desc' => 'Systems Administration and Maintenance',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 3;
        $lab_units = 0;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 4,
            'program' => 'BSIT',
            'subject_code' => 'CAP102',
            'subject_desc' => 'Capstone Project 2',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 4,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKA4',
            'subject_desc' => 'Platform Technologies: Emerging Trends in Mobile TEchnology',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        $lec_units = 2;
        $lab_units = 1;
        $total_units = $lec_units + $lab_units;
        Subject::create([
            'year_level_id' => 4,
            'program' => 'BSIT',
            'subject_code' => 'ITRACKB4',
            'subject_desc' => 'Web Systems and Technologies: Web Programming 2',
            'lec_units' => $lec_units,
            'lab_units' => $lab_units,
            'total_units' => $total_units
        ]);

        // $lec_units = 2;
        // $lab_units = 1;
        // $total_units = $lec_units + $lab_units;
        // Subject::create([
        //     'year_level_id' => 1,
        //     'subject_code' => '',
        //     'subject_desc' => '',
        //     'lec_units' => $lec_units,
        //     'lab_units' => $lab_units,
        //     'total_units' => $total_units
        // ]);
    }
}
