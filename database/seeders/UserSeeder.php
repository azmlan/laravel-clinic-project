<?php

namespace Database\Seeders;

use App\Models\Website\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'id'=>1,
           'name'=>'Abdulaziz',
            'email'=>'az@az.com',
            'username'=>'azmlan',
            'password'=>Hash::make('rootroot'),
        ]);
        User::create([
            'id'=>2,
           'name'=>'Faisal',
            'email'=>'fofo@fofo.com',
            'username'=>'fofo',
            'password'=>Hash::make('rootroot'),
        ]);
    }
}
