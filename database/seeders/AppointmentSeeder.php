<?php

namespace Database\Seeders;

use App\Models\Website\Appointment;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::create([
            'id'=>1,
            'user_id'=>1,
            'clinic_id'=>1,
            'doctor_id'=>1,
            'status_id'=>1,
            'number'=>224,
            'date'=>new DateTime(),
        ]);

        Appointment::create([
            'id'=>2,
            'user_id'=>1,
            'clinic_id'=>2,
            'doctor_id'=>2,
            'status_id'=>1,
            'number'=>301,
            'date'=>new DateTime,
        ]);

        Appointment::create([
            'id'=>3,
            'user_id'=>2,
            'clinic_id'=>2,
            'doctor_id'=>1,
            'status_id'=>1,
            'number'=>301,
            'date'=>new DateTime(),
        ]);

        Appointment::create([
            'id'=>4,
            'user_id'=>2,
            'clinic_id'=>2,
            'doctor_id'=>2,
            'status_id'=>1,
            'number'=>301,
            'date'=>new DateTime(),
        ]);
    }
}
