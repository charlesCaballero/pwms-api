<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name'=>'Developer',
                'abbreviation'=>'dev',
            ]
            ,[
                'name'=>'User',
                'abbreviation'=>'user',
            ]
            ,[
                'name'=>'Supervisor',
                'abbreviation'=>'sup',
            ]
            ,[
                'name'=>'Staff',
                'abbreviation'=>'staff',
            ]
            ,[
                'name'=>'Guest',
                'abbreviation'=>'guest',
            ]
        ]);
    }
}
