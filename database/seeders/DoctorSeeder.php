<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = [
            [
                'name'          => 'drg.Anis Witaniasih',
                'phone'         => '089777888999',
                'speciality_id' => 1,
                'room'          => '111',
                'doctor_id'     => 1,
            ],
            [
                'name'          => 'dr. Dina Mulia, Sp.JP(K)',
                'phone'         => '085600900800',
                'speciality_id' => 2,
                'room'          => '112',
                'doctor_id'     => 2,
            ],
            [
                'name'          => 'dr. Bagus Sidiq, Sp.M',
                'phone'         => '086645896543',
                'speciality_id' => 3,
                'room'          => '113',
                'doctor_id'     => 3,
            ],
            [
                'name'          => 'dr. Djoko Srijo',
                'phone'         => '083267549266',
                'speciality_id' => 4,
                'room'          => '114',
                'doctor_id'     => 4,
            ],
        ];
        foreach ($doctor as $item) {
            Doctor::create([
                'name'          => $item['name'],
                'phone'         => $item['phone'],
                'speciality_id' => $item['speciality_id'],
                'room'          => $item['room'],
            ]);
        }
    }
}
