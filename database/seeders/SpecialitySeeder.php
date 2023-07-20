<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Speciality;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Speciality = [
            [
                'specialityName' => 'tooth',
                'specialityCode' => 10
            ],
            [
                'specialityName' => 'eye',
                'specialityCode' => 12
            ],
            [
                'specialityName' => 'nose',
                'specialityCode' => 11
            ],
            [
                'specialityName' => 'heart',
                'specialityCode' => 12
            ],
        ];
        foreach ($Speciality as $item) {
            Speciality::create([
                'specialityName'   => $item['specialityName'],
                'specialityCode'   => $item['specialityCode'],
            ]);
        }
    }
}
