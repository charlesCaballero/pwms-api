<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::insert([
            'name'=>'Information Technology Management Section',
            'acronym'=>'ITMS',
            'code'=>'001',
        ]);
    }
}
