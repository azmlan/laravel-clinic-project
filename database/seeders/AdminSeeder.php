<?php

namespace Database\Seeders;

use App\Models\Website\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        Manager
        Admin::create([
            'id'=>1,
            'role_id'=>2,
            'name'=>'Abdulaziz',
            'email'=>'az@admin.com',
            'username'=>'azmlan',
            'password'=>Hash::make('rootroot')
        ]);

//        Admin
        Admin::create([
            'id'=>2,
            'role_id'=>1,
            'name'=>'Omar',
            'email'=>'omar@admin.com',
            'username'=>'omar053',
            'password'=>Hash::make('rootroot')
        ]);
    }
}
