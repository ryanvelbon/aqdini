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
                'priority' => 2,
            ],
            [
                'name' => 'Barber',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Beautician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Carpenter',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Carpet cleaner',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Electrician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
            ],
            [
                'name' => 'Gardener',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
            ],
            [
                'name' => 'Glass repair technician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Glazier',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Hairdresser',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Handyman',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'HVAC technician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Ironworker',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Jewelry maker',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Landscaper',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Locksmith',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Maid',
                'icon' => '',
                'synonyms' => 'cleaner, housekeeper',
                'priority' => 3,
            ],
            [
                'name' => 'Makeup artist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Massage therapist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Mechanic',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
            ],
            [
                'name' => 'Painter',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
            ],
            [
                'name' => 'Pest control specialist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Plasterer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Plumber',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
            ],
            [
                'name' => 'Pool cleaner',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Potter',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Roofer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Sheet metal worker',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Skin care specialist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Speech therapist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Textile artist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            [
                'name' => 'Tile installer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Upholsterer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Welder',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
            ],
            [
                'name' => 'Window cleaner',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
            ],
            
        ];

        DB::table('crafts')->insert($crafts);
    }
}
