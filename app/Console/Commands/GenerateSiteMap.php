<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Page;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\Upload;
use Illuminate\Support\Facades\Log;

class GenerateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $this->info('Generating sitemap...');

            $startTime = now()->format('Y-m-d H:i:s');
            Log::info("[START] GenerateSiteMap started at: {$startTime}");

            $sitemap = Sitemap::create();


            $sitemap->add('/', 1.0);

            $sitemap->add(
                $this->createUrl('about.html', 0.9)
                    ->setLastModificationDate(now())
            );

            $sitemap->add(
                $this->createUrl('make-reservation.html', 0.8)
                    ->setLastModificationDate(now())
            );

            $sitemap->add(
                $this->createUrl('contact.html', 0.7)
                    ->setLastModificationDate(now())
            );


            $sitemap->add(
                $this->createUrl('gallery.html', 0.6)
                    ->setLastModificationDate(now())
            );



            $sitemap->writeToFile(public_path('sitemap.xml'));

            $this->info('Sitemap generated successfully at public/sitemap.xml');

            $endTime = now()->format('Y-m-d H:i:s');
            Log::info("[END] GenerateSiteMap completed at: {$endTime}");
        } catch (\Exception $e) {
            Log::error('GenerateSiteMap error: ' . $e->getMessage());
            $this->error('Error generating sitemap: ' . $e->getMessage());
        }
    }

    protected function createUrl(string $path, float $priority = 0.5): Url
    {
        return tap(
            Url::create(config('app.url_frontend') . ($path ? '/' . $path : ''))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY),
            function ($url) use ($priority) {
                $url
                    ->setLastModificationDate(now())
                    ->setPriority($priority);
            }
        );
    }

    /**
     * Get the console command options.
     *
     * @return string
     */
    protected function getImage(Upload $upload)
    {
        return $upload->data['endpoint_url'] . '/' . $upload->path . '/' . $upload->filename;
    }
}
