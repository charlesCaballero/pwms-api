<?php

namespace Database\Seeders;

use App\Models\Officers;
use Illuminate\Database\Seeder;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Officers::insert(
        [
            [
                'first_name'=> 'Maria Rhodella',
                'middle_initial'=> 'S',
                'last_name'=> 'Monsanto',
                // 'extension'=> ;
                'extension'=> null ,
                'title'=> 'Division Chief IV',
                'office_id'=> 3
            ],
            [
                'first_name'=> 'Anna Alia',
                'middle_initial'=> 'B',
                'last_name'=> 'Lucman',
                // 'extension'=> ;
                'extension'=> null ,
                'title'=> 'Administrative Officer IV',
                'office_id'=> 6
            ],
            [
                'first_name'=> 'Gladys',
                'middle_initial'=> 'A',
                'last_name'=> 'Eltanal',
                // 'extension'=> ;
                'extension'=> null ,
                'title'=> 'Administrative Officer III',
                'office_id'=> 22
            ],
            [
                'first_name'=> 'Anna Junaynah',
                'middle_initial'=> 'A',
                'last_name'=> 'Macalbe',
                // 'extension'=> ;
                'extension'=> null ,
                'title'=> 'Human Resource Management Officer III',
                'office_id'=> 23
            ],
            [
                'first_name'=> 'Mary Kay',
                'middle_initial'=> 'J',
                'last_name'=> 'Uy',
                // 'extension'=> ;
                'extension'=> null ,
                'title'=> 'Fiscal Controller IV',
                'office_id'=> 7
            ],
            [
                'first_name'=> 'Maria Teresa',
                'middle_initial'=> 'B',
                'last_name'=> 'Amahoy',
                'extension'=> null ,
                // 'extension'=> ;
                'title'=> 'Fiscal Controller III',
                'office_id'=> 24
            ],
            [
                'first_name'=> 'Dexter',
                'middle_initial'=> 'S',
                'last_name'=> 'Latosa',
                'extension'=> null ,
                'title'=> 'Fiscal Controller III',
                'office_id'=> 25
            ],
            [
                'first_name'=> 'Jonathan',
                'middle_initial'=> 'T',
                'last_name'=> 'Ortigoza',
                'extension'=> 'Dr',
                'title'=> 'Medical Officer VII',
                'office_id'=> 2
            ],
            [
                'first_name'=> 'Eznairah',
                'middle_initial'=> 'A',
                'last_name'=> 'Lao',
                'extension'=> 'Dr',
                'title'=> 'Medical Officer IV',
                'office_id'=> 9
            ],
            [
                'first_name'=> 'Mae Desiree',
                'middle_initial'=> 'L',
                'last_name'=> 'Yap',
                'extension'=> 'Dr',
                'title'=> 'Medical Officer IV',
                'office_id'=> 10
            ],
            [
                'first_name'=> 'Khalid',
                'middle_initial'=> 'M',
                'last_name'=> 'Asum',
                'extension'=> null ,
                'title'=> 'Chief Social Insurance Officer',
                'office_id'=> 14
            ],
            [
                'first_name'=> 'Romulo Jr',
                'middle_initial'=> 'M',
                'last_name'=> 'Lapuz',
                'extension'=> null ,
                'title'=> 'Chief Social Insurance Officer',
                'office_id'=> 15
            ],
            [
                'first_name'=> 'Christine Mae',
                'middle_initial'=> 'G',
                'last_name'=> 'Magno',
                'extension'=> null ,
                'title'=> 'Chief Social Insurance Officer',
                'office_id'=> 16
            ],
            [
                'first_name'=> 'Fetzi',
                'middle_initial'=> 'S',
                'last_name'=> 'Gomilla',
                'extension'=> null ,
                'title'=> 'Chief Social Insurance Officer',
                'office_id'=> 17
            ],
            [
                'first_name'=> 'Marlon Niño',
                'middle_initial'=> 'S',
                'last_name'=> 'Arrabaca',
                'extension'=> null ,
                'title'=> 'Chief Social Insurance Officer',
                'office_id'=> 18
            ],
            [
                'first_name'=> 'Antonio Jr',
                'middle_initial'=> 'A',
                'last_name'=> 'Arnaiz',
                'extension'=> null ,
                'title'=> 'Chief Social Insurance Officer',
                'office_id'=> 19
            ],
            [
                'first_name'=> 'Delio II',
                'middle_initial'=> 'A',
                'last_name'=> 'Aseron',
                'extension'=> null ,
                'title'=> 'Regional Vice President',
                'office_id'=> 4
            ],
            [
                'first_name'=> 'Ian Alfredo',
                'middle_initial'=> 'T',
                'last_name'=> 'Magno',
                'extension'=> 'Atty' ,
                'title'=> 'Attorney IV',
                'office_id'=> 20
            ],
            [
                'first_name'=> 'Reynaldo Dennis',
                'middle_initial'=> 'P',
                'last_name'=> 'Rimando',
                'extension'=> null ,
                'title'=> 'Information Technology Officer II',
                'office_id'=> 21
            ],
            [
                'first_name'=> 'Merlyn',
                'middle_initial'=> 'H',
                'last_name'=> 'Ybañez',
                'extension'=> null ,
                'title'=> 'Public Relations Officer III',
                'office_id'=> 34
            ],
            [
                'first_name'=> 'Anshari',
                'middle_initial'=> 'M',
                'last_name'=> 'Mangondato',
                'extension'=> null ,
                'title'=> 'Planning Officer III',
                'office_id'=> 35
            ],
        ]);
    }
}
