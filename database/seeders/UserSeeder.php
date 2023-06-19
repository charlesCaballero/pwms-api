<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([[
            'company_id_number' => '30734319',
            'first_name' => 'Charles',
            'last_name' => 'Caballero',
            'office_id' => 1,
            'role_id' => 1,
            'modules' =>  json_encode(['*']),
            'email' => 'charles.g.caballero@gmail.com',
            // 'permissions'=> 'rwud',
            'password' => bcrypt('456Knight'),
            'status' => true,
            'email_verified_at' => now(),
        ],[
            'company_id_number' => '30734318',
            'first_name' => 'Cherry Mae',
            'last_name' => 'Seriña',
            'office_id' => 1,
            'role_id' => 3,
            'modules' =>  json_encode(json_decode('[{"moduleId": 1, "permissions": "rwud"}, {"moduleId": 2, "permissions": "rwud"}, {"moduleId": 8, "permissions": "r---"}, {"moduleId": 9, "permissions": "r---"}, {"moduleId": 10, "permissions": "r---"}, {"moduleId": 11, "permissions": "r---"}, {"moduleId": 12, "permissions": "r---"}, {"moduleId": 13, "permissions": "r---"}]')),
            'email' => 'cherrymserina@gmail.com',
            // 'permissions'=> 'rwud',
            'password' => bcrypt('admin123'),
            'status' => true,
            'email_verified_at' => now(),
        ]]);
    }
}
