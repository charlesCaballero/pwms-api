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
        User::insert([
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
        ]);
    }
}
