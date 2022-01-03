<?php

namespace Justijndepover\LaravelTranslationManager\Commands;

use Illuminate\Console\Command;

class TranslationScanCommand extends Command
{
    protected $signature = 'translation:scan';
    protected $description = 'Search for translations that are missing in some locales';

    public function handle()
    {
        $this->info('Scanning your translation files...');
    }
}
