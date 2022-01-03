<?php

namespace Justijndepover\LaravelTranslationManager\Commands;

use Illuminate\Console\Command;

class TranslationScanViewsCommand extends Command
{
    protected $signature = 'translation:scan-views';
    protected $description = 'Scan your views for missing translations';

    public function handle()
    {
        $this->info('Scanning your view files...');
    }
}
