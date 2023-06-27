<?php

namespace App\Console\Commands;

use App\Models\Craft;
use App\Models\Locality;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap';

    public function handle()
    {
        $crafts = Craft::all();
        $localities = Locality::all();

        $urls = [];

        foreach ($crafts as $craft) {
            foreach ($localities as $locality) {
                $urls[] = url("search/{$craft->slug}/{$locality->slug}");
            }
        }

        $sitemap = Sitemap::create();

        foreach ($urls as $url) {
            $sitemap->add(Url::create($url)
                        // ->setLastModificationDate(Carbon::yesterday())
                        // ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                        ->setPriority(0.1));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap has been generated!');
    }
}
