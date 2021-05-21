<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TranslationAddCommand extends Command
{
    protected $signature = 'translation:scan-views';
    protected $description = 'Scan your views for missing translations';

    public function handle()
    {
        $this->info('Scanning your view files...');
    }
}
