<?php

namespace Database\Seeders;

// use App\Models\Craft;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CraftsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('crafts')->delete();

        $crafts = [
            [
                'name' => 'Babysitter',
                'icon' => '',
                'synonyms' => 'Au pair, nanny',
            ],
            [
                'name' => 'Barber',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Beautician',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Carpenter',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Carpet cleaner',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Electrician',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Gardener',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Glass repair technician',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Glazier',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Hairdresser',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Handyman',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'HVAC technician',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Ironworker',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Jewelry maker',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Landscaper',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Locksmith',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Maid',
                'icon' => '',
                'synonyms' => 'cleaner, housekeeper',
            ],
            [
                'name' => 'Makeup artist',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Massage therapist',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Mechanic',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Painter',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Pest control specialist',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Plasterer',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Plumber',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Pool cleaner',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Potter',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Roofer',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Sheet metal worker',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Skin care specialist',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Speech therapist',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Textile artist',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Tile installer',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Upholsterer',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Welder',
                'icon' => '',
                'synonyms' => '',
            ],
            [
                'name' => 'Window cleaner',
                'icon' => '',
                'synonyms' => '',
            ],
            
        ];

        DB::table('crafts')->insert($crafts);
    }
}
