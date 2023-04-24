<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitiesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('localities')->delete();

        Locality::create(['name' => "Attard", 'latitude' => 35.88972000, 'longitude' => 14.44250000]);
        Locality::create(['name' => "Balzan", 'latitude' => 35.90028000, 'longitude' => 14.45500000]);
        Locality::create(['name' => "Birkirkara", 'latitude' => 35.89722000, 'longitude' => 14.46111000]);
        Locality::create(['name' => "Birżebbuġa", 'latitude' => 35.82583000, 'longitude' => 14.52694000]);
        Locality::create(['name' => "Cospicua", 'latitude' => 35.88556000, 'longitude' => 14.52750000]);
        Locality::create(['name' => "Dingli", 'latitude' => 35.86139000, 'longitude' => 14.38222000]);
        Locality::create(['name' => "Fgura", 'latitude' => 35.87028000, 'longitude' => 14.51333000]);
        Locality::create(['name' => "Floriana", 'latitude' => 35.89583000, 'longitude' => 14.50833000]);
        Locality::create(['name' => "Fontana", 'latitude' => 36.03750000, 'longitude' => 14.23611000]);
        Locality::create(['name' => "Għajnsielem", 'latitude' => 36.02639000, 'longitude' => 14.28500000]);
        Locality::create(['name' => "Għarb", 'latitude' => 36.06000000, 'longitude' => 14.20889000]);
        Locality::create(['name' => "Għaxaq", 'latitude' => 35.84889000, 'longitude' => 14.51667000]);
        Locality::create(['name' => "Gudja", 'latitude' => 35.84917000, 'longitude' => 14.50306000]);
        Locality::create(['name' => "Gżira", 'latitude' => 35.90583000, 'longitude' => 14.48806000]);
        Locality::create(['name' => "Hal Gharghur", 'latitude' => 35.92409000, 'longitude' => 14.45118000]);
        Locality::create(['name' => "Haz-Zebbug", 'latitude' => 35.87194000, 'longitude' => 14.44111000]);
        Locality::create(['name' => "Ħamrun", 'latitude' => 35.88472000, 'longitude' => 14.48444000]);
        Locality::create(['name' => "Imdina", 'latitude' => 35.88694000, 'longitude' => 14.40250000]);
        Locality::create(['name' => "Imġarr", 'latitude' => 35.92056000, 'longitude' => 14.36639000]);
        Locality::create(['name' => "Imsida", 'latitude' => 35.89250000, 'longitude' => 14.48278000]);
        Locality::create(['name' => "Imtarfa", 'latitude' => 35.89333000, 'longitude' => 14.39889000]);
        Locality::create(['name' => "Kalkara", 'latitude' => 35.88917000, 'longitude' => 14.53278000]);
        Locality::create(['name' => "Kerċem", 'latitude' => 36.04194000, 'longitude' => 14.22667000]);
        Locality::create(['name' => "Kirkop", 'latitude' => 35.84222000, 'longitude' => 14.48528000]);
        Locality::create(['name' => "L-Iklin", 'latitude' => 35.90414000, 'longitude' => 14.45415000]);
        Locality::create(['name' => "Lija", 'latitude' => 35.90056000, 'longitude' => 14.44639000]);
        Locality::create(['name' => "Luqa", 'latitude' => 35.85889000, 'longitude' => 14.48861000]);
        Locality::create(['name' => "Marsa", 'latitude' => 35.87917000, 'longitude' => 14.49528000]);
        Locality::create(['name' => "Marsaskala", 'latitude' => 35.86220000, 'longitude' => 14.56701000]);
        Locality::create(['name' => "Marsaxlokk", 'latitude' => 35.84194000, 'longitude' => 14.54306000]);
        Locality::create(['name' => "Mellieħa", 'latitude' => 35.95639000, 'longitude' => 14.36222000]);
        Locality::create(['name' => "Mġarr", 'latitude' => 36.02528000, 'longitude' => 14.29500000]);
        Locality::create(['name' => "Mosta", 'latitude' => 35.90917000, 'longitude' => 14.42556000]);
        Locality::create(['name' => "Mqabba", 'latitude' => 35.84763000, 'longitude' => 14.46824000]);
        Locality::create(['name' => "Munxar", 'latitude' => 36.03000000, 'longitude' => 14.23333000]);
        Locality::create(['name' => "Nadur", 'latitude' => 36.03778000, 'longitude' => 14.29417000]);
        Locality::create(['name' => "Naxxar", 'latitude' => 35.91361000, 'longitude' => 14.44361000]);
        Locality::create(['name' => "Paola", 'latitude' => 35.87306000, 'longitude' => 14.49889000]);
        Locality::create(['name' => "Pembroke", 'latitude' => 35.93056000, 'longitude' => 14.47639000]);
        Locality::create(['name' => "Pietà", 'latitude' => 35.89472000, 'longitude' => 14.49500000]);
        Locality::create(['name' => "Qala", 'latitude' => 36.03611000, 'longitude' => 14.30944000]);
        Locality::create(['name' => "Qormi", 'latitude' => 35.87601000, 'longitude' => 14.47200000]);
        Locality::create(['name' => "Qrendi", 'latitude' => 35.83472000, 'longitude' => 14.45833000]);
        Locality::create(['name' => "Rabat", 'latitude' => 35.88152000, 'longitude' => 14.39872000]);
        Locality::create(['name' => "Saint John", 'latitude' => 35.90556000, 'longitude' => 14.47611000]);
        Locality::create(['name' => "Saint Lucia", 'latitude' => 36.04306000, 'longitude' => 14.21722000]);
        Locality::create(['name' => "San Ġiljan", 'latitude' => 35.91839000, 'longitude' => 14.48977000]);
        Locality::create(['name' => "San Lawrenz", 'latitude' => 36.05556000, 'longitude' => 14.20361000]);
        Locality::create(['name' => "San Pawl il-Baħar", 'latitude' => 35.95064000, 'longitude' => 14.41561000]);
        Locality::create(['name' => "Sannat", 'latitude' => 36.02444000, 'longitude' => 14.24278000]);
        Locality::create(['name' => "Santa Luċija", 'latitude' => 35.86278000, 'longitude' => 14.50750000]);
        Locality::create(['name' => "Santa Venera", 'latitude' => 35.89083000, 'longitude' => 14.47417000]);
        Locality::create(['name' => "Senglea", 'latitude' => 35.88750000, 'longitude' => 14.51694000]);
        Locality::create(['name' => "Siġġiewi", 'latitude' => 35.85556000, 'longitude' => 14.43639000]);
        Locality::create(['name' => "Sliema", 'latitude' => 35.91250000, 'longitude' => 14.50194000]);
        Locality::create(['name' => "Swieqi", 'latitude' => 35.92250000, 'longitude' => 14.48000000]);
        Locality::create(['name' => "Ta’ Xbiex", 'latitude' => 35.89917000, 'longitude' => 14.49444000]);
        Locality::create(['name' => "Tarxien", 'latitude' => 35.86583000, 'longitude' => 14.51500000]);
        Locality::create(['name' => "Valletta", 'latitude' => 35.89972000, 'longitude' => 14.51472000]);
        Locality::create(['name' => "Victoria", 'latitude' => 36.04444000, 'longitude' => 14.23972000]);
        Locality::create(['name' => "Vittoriosa", 'latitude' => 35.89222000, 'longitude' => 14.51833000]);
        Locality::create(['name' => "Xagħra", 'latitude' => 36.05000000, 'longitude' => 14.26444000]);
        Locality::create(['name' => "Xewkija", 'latitude' => 36.03278000, 'longitude' => 14.25806000]);
        Locality::create(['name' => "Xgħajra", 'latitude' => 35.88556000, 'longitude' => 14.54750000]);
        Locality::create(['name' => "Żabbar", 'latitude' => 35.87611000, 'longitude' => 14.53500000]);
        Locality::create(['name' => "Żebbuġ", 'latitude' => 36.07222000, 'longitude' => 14.23583000]);
        Locality::create(['name' => "Żejtun", 'latitude' => 35.85583000, 'longitude' => 14.53306000]);
        Locality::create(['name' => "Żurrieq", 'latitude' => 35.83111000, 'longitude' => 14.47417000]);
    }
}
