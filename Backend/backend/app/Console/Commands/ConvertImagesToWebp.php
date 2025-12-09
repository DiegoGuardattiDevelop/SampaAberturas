<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class ConvertImagesToWebp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:convert-to-webp {--quality=80} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert images to WebP format for better performance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $quality = $this->option('quality');
        $force = $this->option('force');

        $this->info("Convirtiendo imágenes a WebP con calidad {$quality}%");

        $publicImagesPath = public_path('Images');
        $files = glob($publicImagesPath . '/*.{jpg,jpeg,png}', GLOB_BRACE);

        $totalFiles = count($files);
        $converted = 0;
        $skipped = 0;

        $this->info("Encontrados {$totalFiles} archivos para procesar");

        $progressBar = $this->output->createProgressBar($totalFiles);
        $progressBar->start();

        foreach ($files as $file) {
            $filename = basename($file);
            $webpFilename = pathinfo($filename, PATHINFO_FILENAME) . '.webp';
            $webpPath = $publicImagesPath . '/' . $webpFilename;

            // Skip if WebP already exists and --force is not used
            if (file_exists($webpPath) && !$force) {
                $skipped++;
                $progressBar->advance();
                continue;
            }

            try {
                // Convert to WebP
                $manager = new ImageManager(new Driver());
                $image = $manager->read($file);
                $image->toWebp($quality)->save($webpPath);

                $converted++;
            } catch (\Exception $e) {
                $this->error("Error convirtiendo {$filename}: " . $e->getMessage());
            }

            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine(2);

        $this->info("Conversión completada:");
        $this->info("- Convertidos: {$converted}");
        $this->info("- Omitidos: {$skipped}");
        $this->info("- Total procesados: " . ($converted + $skipped));

        return Command::SUCCESS;
    }
}
