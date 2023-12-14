<?php

namespace Database\Seeders;

use App\Models\Website\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        Eyes Doctor
        Doctor::create([
           'id'=>1,
           'clinic_id'=> 1,
           'major_id'=>1,
           'name'=>'mustafa',
            'about'=>'About : Im an Eyes doctor and im not a good one',
            'phone'=>'012345',
            'email'=>'mustafa@doc.com',
            'password'=>Hash::make('rootroot')
        ]);
        Doctor::create([
            'id'=>5,
            'clinic_id'=> 1,
            'major_id'=>1,
            'name'=>'aziz',
            'about'=>' Im an Eyes doctor and im not a good one',
            'phone'=>'012345678',
            'email'=>'aziz@doc.com',
            'password'=>Hash::make('rootroot')
        ]);
        //        dermatology Doctor
        Doctor::create([
            'id'=>2,
            'clinic_id'=> 2,
            'major_id'=>2,
            'name'=>'omar',
            'about'=>'About : Im an dermatology doctor and im not a good one',
            'phone'=>'01234',
            'email'=>'omar@doc.com',
            'password'=>Hash::make('rootroot')
        ]);
        Doctor::create([
            'id'=>6,
            'clinic_id'=> 2,
            'major_id'=>2,
            'name'=>'meshal',
            'about'=>' Im an dermatology doctor and im not a good one',
            'phone'=>'12341234',
            'email'=>'meshal@doc.com',
            'password'=>Hash::make('rootroot')
        ]);

        //        dentist Doctor
        Doctor::create([
            'id'=>3,
            'clinic_id'=> 3,
            'major_id'=>3,
            'name'=>'ali',
            'about'=>'About : Im an dentist doctor and im not a good one',
            'phone'=>'0123',
            'email'=>'ali@doc.com',
            'password'=>Hash::make('rootroot')
        ]);
        Doctor::create([
            'id'=>7,
            'clinic_id'=> 3,
            'major_id'=>3,
            'name'=>'naif',
            'about'=>'Im an dentist doctor and im not a good one',
            'phone'=>'123123',
            'email'=>'naif@doc.com',
            'password'=>Hash::make('rootroot')
        ]);

        //        beauty Doctor
        Doctor::create([
            'id'=>4,
            'clinic_id'=> 4,
            'major_id'=>4,
            'name'=>'melfy',
            'about'=>'About : Im an beauty doctor and im not a good one',
            'phone'=>'012',
            'email'=>'melfy@doc.com',
            'password'=>Hash::make('rootroot')
        ]);
        Doctor::create([
            'id'=>8,
            'clinic_id'=> 4,
            'major_id'=>4,
            'name'=>'abod',
            'about'=>'Im an beauty doctor and im not a good one',
            'phone'=>'012012',
            'email'=>'abod@doc.com',
            'password'=>Hash::make('rootroot')
        ]);
    }
}
