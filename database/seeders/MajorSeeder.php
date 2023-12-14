<?php

namespace Database\Seeders;

use App\Models\Website\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Major::create([
           'id'=>1,
           'name'=>'eyes'
        ]);

        Major::create([
           'id'=>2,
           'name'=>'dermatology'
        ]);

        Major::create([
           'id'=>3,
           'name'=>'dentist'
        ]);
        Major::create([
           'id'=>4,
           'name'=>'beauty'
        ]);
    }
}
