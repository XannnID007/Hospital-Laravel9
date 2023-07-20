<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'month'         => "January",
                'allPatient'    => 50,
                'patient_id'    => 1
            ],
            [
                'month'         => "February",
                'allPatient'    => 70,
                'patient_id'    => 2
            ],
        ];

        foreach ($data as $item) {
            Patient::create([
                'month'      => $item['month'],
                'allPatient' => $item['allPatient'],
                'patient_id' => $item['patient_id'],
            ]);
        }
    }
}
