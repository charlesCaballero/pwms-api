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
        Office::insert(
        [
            
            [
                'name' => 'Management Services Division',
                'acronym' => 'MSD',
                'code' => '001',
            ],
            [
                'name' => 'Health Care Delivery Management Division',
                'acronym' => 'HCDMD',
                'code' => '002',
            ],
            [
                'name' => 'Field Operations Division',
                'acronym' => 'FOD',
                'code' => '003',
            ],
            [
                'name' => 'Office of the Regional Vice President',
                'acronym' => 'ORVP',
                'code' => '004',
            ],
            [
                'name' => 'Office of the MSD Chief',
                'acronym' => 'OMSD',
                'code' => '005',
            ],
            [
                'name' => 'Administrative Services Section',
                'acronym' => 'ASS',
                'code' => '006',
            ],
            [
                'name' => 'Funds Management Section',
                'acronym' => 'FMS',
                'code' => '007',
            ],
            [
                'name' => 'Office of the HCDMD Chief',
                'acronym' => 'OHCDMD',
                'code' => '008',
            ],
            [
                'name' => 'Benefit Administration Section',
                'acronym' => 'BAS',
                'code' => '009',
            ],
            [
                'name' => 'Accreditation and Quality Assurance Section',
                'acronym' => 'AQAS',
                'code' => '010',
            ],
            [
                'name' => 'PhilHealth Customer Assistanca, Relations and Empowerment Staff',
                'acronym' => 'PCARES',
                'code' => '011',
            ],
            [
                'name' => 'Office of the FOD Division Chief',
                'acronym' => 'OFOD',
                'code' => '012',
            ],
            [
                'name' => 'Membership and Marketing Section',
                'acronym' => 'MMS',
                'code' => '013',
            ],
            [
                'name' => 'Collection and Premium Accounts Management Section',
                'acronym' => 'CPAMS',
                'code' => '014',
            ],
            [
                'name' => 'Local Health Insurance Office - Bukidnon',
                'acronym' => 'LHIO-BUKIDNON',
                'code' => '015',
            ],
            [
                'name' => 'Local Health Insurance Office - Iligan',
                'acronym' => 'LHIO-ILIGAN',
                'code' => '016',
            ],
            [
                'name' => 'Local Health Insurance Office - Ozamiz',
                'acronym' => 'LHIO-OZAMIZ',
                'code' => '017',
            ],
            [
                'name' => 'Local Health Insurance Office - Cagayan de Oro',
                'acronym' => 'LHIO-CDO',
                'code' => '018',
            ],
            [
                'name' => 'Local Health Insurance Office - Gingoog',
                'acronym' => 'LHIO-GINGOOG',
                'code' => '019',
            ],
            [
                'name' => 'Legal Office',
                'acronym' => 'LEGAL',
                'code' => '020',
            ],
            [
                'name' => 'Information Technology Management Section',
                'acronym' => 'ITMS',
                'code' => '021',
            ],
            [
                'name' => 'General Services Unit',
                'acronym' => 'GSU',
                'code' => '022',
            ],
            [
                'name' => 'Human Resouce Unit',
                'acronym' => 'HRU',
                'code' => '023',
            ],
            [
                'name' => 'Comptrollership Unit',
                'acronym' => 'CU',
                'code' => '024',
            ],
            [
                'name' => 'Cash Management Unit',
                'acronym' => 'CMU',
                'code' => '025',
            ],
            [
                'name' => 'PhilHealth Business Center - Maramag',
                'acronym' => 'PBC-MARAMAG',
                'code' => '026',
            ],
            [
                'name' => 'PhilHealth Business Center - Malaybalay',
                'acronym' => 'PBC-MALAYBALAY',
                'code' => '027',
            ],
            [
                'name' => 'PhilHealth Business Center - Tubod',
                'acronym' => 'PBC-TUBOD',
                'code' => '028',
            ],
            [
                'name' => 'PhilHealth Business Center - Maranding',
                'acronym' => 'PBC-MARANDING',
                'code' => '029',
            ],
            [
                'name' => 'PhilHealth Business Center - Oroquieta',
                'acronym' => 'PBC-OROQUIETA',
                'code' => '030',
            ],
            [
                'name' => 'PhilHealth Business Center - Tangub',
                'acronym' => 'PBC-TANGUB',
                'code' => '031',
            ],
            [
                'name' => 'PhilHealth Business Center - Carmen',
                'acronym' => 'PBC-CARMEN',
                'code' => '032',
            ],
            [
                'name' => 'PhilHealth Business Center - Camiguin',
                'acronym' => 'PBC-CAMIGUIN',
                'code' => '033',
            ],
            [
                'name' => 'Public Affairs Unit',
                'acronym' => 'PAU',
                'code' => '034',
            ],
            [
                'name' => 'Planning and Research Unit',
                'acronym' => 'PRU',
                'code' => '035',
            ],
        ]);
    }
}
