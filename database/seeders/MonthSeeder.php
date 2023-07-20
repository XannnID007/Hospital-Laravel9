<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Month;

class MonthSeeder extends Seeder
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
                'monthName' => "January",
                'year'      => 2022
            ],
            [
                'monthName' => "February",
                'year'      => 2022
            ],
            [
                'monthName' => "March",
                'year'      => 2022
            ],
            [
                'monthName' => "April",
                'year'      => 2022
            ],
            [
                'monthName' => "May",
                'year'      => 2022
            ],
            [
                'monthName' => "June",
                'year'      => 2022
            ],
            [
                'monthName' => "July",
                'year'      => 2022
            ],
            [
                'monthName' => "August",
                'year'      => 2022
            ],
            [
                'monthName' => "September",
                'year'      => 2022
            ],
            [
                'monthName' => "October",
                'year'      => 2022
            ],
            [
                'monthName' => "November",
                'year'      => 2022
            ],
            [
                'monthName' => "December",
                'year'      => 2022
            ],
        ];

        foreach ($data as $item) {
            Month::create([
                'monthName' => $item['monthName'],
                'year' => $item['year']
            ]);
        }
    }
}
