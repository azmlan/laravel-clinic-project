<?php

namespace Database\Seeders;

use App\Models\Website\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        reservations_management

        Permission::create([
            'id'=>1,
            'name'=>'reservations_management'
        ]);
//        clinics_management

        Permission::create([
            'id'=>2,
            'name'=>'clinics_management'
        ]);

//        users_management

        Permission::create([
            'id'=>3,
            'name'=>'users_management'
        ]);
    }
}
