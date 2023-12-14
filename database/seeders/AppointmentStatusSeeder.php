<?php

namespace Database\Seeders;

use App\Models\Website\AppointmentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppointmentStatus::create([
            'id'=>1,
            'name'=>'pending'
        ]);

        AppointmentStatus::create([
            'id'=>2,
            'name'=>'confirmed'
        ]);

        AppointmentStatus::create([
            'id'=>3,
            'name'=>'attended'
        ]);
        AppointmentStatus::create([
            'id'=>4,
            'name'=>'canceled'
        ]);
        AppointmentStatus::create([
            'id'=>5,
            'name'=>'absent'
        ]);
    }
}
