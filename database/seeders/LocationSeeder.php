<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'country'      => 'Saudi Arabia',
                'city'         => 'Riyadh',
                'building'     => 'Abraj Tawyniya, North Tower',
                'floor_office' => 'Ground Floor - Office 4',
                'district'     => 'Al Olaya Dist',
                'street'       => 'King Fahad Road',
                'postal_code'  => '12211',
                'state_region' => null,
                'email'        => 'info@amanfec.com',
                'phone'        => '+966 126 555 488',
                'is_hq'        => false,
                'address_note' => "Abraj Tawyniya, North Tower\nGround Floor - Office 4\nAl Olaya Dist,\nKing Fahad Road,\nRiyadh 12211\nKingdom of Saudi Arabia",
            ],
            [
                'country'      => 'Sultanate of Oman',
                'city'         => 'Muscat',
                'building'     => 'Al Muzn Mall',
                'floor_office' => '3rd Floor - Office 301',
                'district'     => 'Al Mawaleh, North A’Seeb',
                'street'       => null,
                'postal_code'  => '101',
                'state_region' => null,
                'email'        => 'info@amanfec.com',
                'phone'        => '+968 2407 4744',
                'is_hq'        => false,
                'address_note' => "Al Muzn Mall\n3rd Floor - Office 301\nAl Mawaleh, North A’Seeb\nMuscat 101\nSultanate of Oman",
            ],
            [
                'country'      => 'Saudi Arabia',
                'city'         => 'Jeddah',
                'building'     => 'King Road Tower',
                'floor_office' => '18th Floor - Office 1801',
                'district'     => 'Ash Shati Dist',
                'street'       => 'King Abdul Aziz Road',
                'postal_code'  => '23412',
                'state_region' => null,
                'email'        => 'info@amanfec.com',
                'phone'        => '+966 126 555 488',
                'is_hq'        => false,
                'address_note' => "King Road Tower\n18th Floor - Office 1801\nAsh Shati Dist,\nKing Abdul Aziz Road\nJeddah 23412\nKingdom of Saudi Arabia",
            ],
            [
                'country'      => 'Saudi Arabia',
                'city'         => 'Al Khobar',
                'building'     => 'Al Jarbou Tower',
                'floor_office' => 'Ground Floor - Office G01',
                'district'     => 'Al Aqrabiyah Dist',
                'street'       => 'Custodian of The Two Holy Mosques Rd',
                'postal_code'  => '3580',
                'state_region' => null,
                'email'        => 'info@amanfec.com',
                'phone'        => '+966 13 66 333 06',
                'is_hq'        => false,
                'address_note' => "Al Jarbou Tower\nGround Floor - Office G01\nAl Aqrabiyah Dist,\nCustodian of The Two Holy Mosques Rd,\nAl Khobar 3580\nKingdom of Saudi Arabia",
            ],
            [
                'country'      => 'United Arab Emirates',
                'city'         => 'Abu Dhabi',
                'building'     => 'Al Wahda City Tower',
                'floor_office' => '20th Floor - Office 09',
                'district'     => null,
                'street'       => 'Hazaa Bin Zayed the First Street',
                'postal_code'  => '25200',
                'state_region' => null,
                'email'        => 'info@amanfec.com',
                'phone'        => '+971 28 18 6717',
                'is_hq'        => false,
                'address_note' => "Al Wahda City Tower\n20th Floor - Office 09\nHazaa Bin Zayed the First Street\nAbu Dhabi 25200\nUnited Arab Emirates",
            ],
        ];

        foreach ($locations as $loc) {
            Location::updateOrCreate(
                [
                    'country'  => $loc['country'],
                    'city'     => $loc['city'],
                    'building' => $loc['building'],
                ],
                $loc
            );
        }
    }
}
