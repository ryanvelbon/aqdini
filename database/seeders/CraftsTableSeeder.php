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
                'icon' => 'baby-carriage',
                'synonyms' => 'Au pair, nanny',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Barber',
                'icon' => 'scissors',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Beautician',
                'icon' => 'paintbrush-fine',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Carpenter',
                'icon' => 'hammer',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Carpet cleaner',
                'icon' => 'rug',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Electrician',
                'icon' => 'lightbulb',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Gardener',
                'icon' => 'trowel',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Glass repair technician',
                'icon' => 'wine-glass-crack',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Glazier',
                'icon' => 'window-frame',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Hairdresser',
                'icon' => 'scissors',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Handyman',
                'icon' => 'screwdriver',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'HVAC technician',
                'icon' => 'air-conditioner',
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
                'icon' => 'rings-wedding',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Landscaper',
                'icon' => 'trowel',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Locksmith',
                'icon' => 'key-skeleton-left-right',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Maid',
                'icon' => 'broom',
                'synonyms' => 'cleaner, housekeeper',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Makeup artist',
                'icon' => 'paintbrush-fine',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Massage therapist',
                'icon' => 'spa',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Mechanic',
                'icon' => 'car-wrench',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Painter',
                'icon' => 'paint-roller',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Pest control specialist',
                'icon' => 'ban-bug',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            [
                'name' => 'Plasterer',
                'icon' => 'trowel',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Plumber',
                'icon' => 'toilet',
                'synonyms' => '',
                'priority' => 3,
                'img' => '',
            ],
            [
                'name' => 'Pool cleaner',
                'icon' => 'water-ladder',
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
                'synonyms' => 'xogħol ta\' membrane ',
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
                'icon' => 'grid-2',
                'synonyms' => '',
                'priority' => 2,
                'img' => '',
            ],
            [
                'name' => 'Upholsterer',
                'icon' => 'couch',
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
                'icon' => 'blinds-open',
                'synonyms' => '',
                'priority' => 1,
                'img' => '',
            ],
            
        ];

        DB::table('crafts')->insert($crafts);
    }
}
