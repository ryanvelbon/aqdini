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
                'img' => '',
            ],
            [
                'name' => 'Barber',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Beautician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Carpenter',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Carpet cleaner',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Electrician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Gardener',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Glass repair technician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Glazier',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Hairdresser',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Handyman',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'HVAC technician',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Ironworker',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Jewelry maker',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Landscaper',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Locksmith',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Maid',
                'icon' => '',
                'synonyms' => 'cleaner, housekeeper',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Makeup artist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Massage therapist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Mechanic',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Painter',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Pest control specialist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Plasterer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Plumber',
                'icon' => '',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Pool cleaner',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Potter',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Roofer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Sheet metal worker',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Skin care specialist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Speech therapist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Textile artist',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Tile installer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Upholsterer',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Welder',
                'icon' => '',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Window cleaner',
                'icon' => '',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            
        ];

        DB::table('crafts')->insert($crafts);
    }
}
