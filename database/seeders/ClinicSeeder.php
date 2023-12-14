<?php

namespace Database\Seeders;

use App\Models\Website\Clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //        eyes
        Clinic::create([
            'id'=>1,
            'major_id'=>'1',
            'name'=>'eyes',
            'number'=>01
        ]);

        //        dermatology
        Clinic::create([
            'id'=>2,
            'major_id'=>'2',
            'name'=>'dermatology',
            'number'=>02
        ]);
        //        dentist
        Clinic::create([
            'id'=>3,
            'major_id'=>'3',
            'name'=>'dentist',
            'number'=>03
        ]);
        //        beauty
        Clinic::create([
            'id'=>4,
            'major_id'=>'4',
            'name'=>'beauty',
            'number'=>04
        ]);
    }
}
