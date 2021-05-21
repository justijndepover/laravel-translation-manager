<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Lang;

class TranslationAddCommand extends Command
{
    protected $signature = 'translation:add';
    protected $description = 'Create a new translation for all the app locales';

    public function handle()
    {
        $key = $this->ask('What is the translation key?');

        if (Lang::has($key)) {
            $this->error('The given translation already exists!');
            exit();
        }

        $translations = [];

        foreach ($this->getLanguages() as $language) {
            $translations[$language] = $this->ask("Translation in: {$language}");
        }

        $this->storeTranslations($key, $translations);
        $this->info('All done!');
    }

    private function getLanguages(): array
    {
        // read from disk
        return ['nl', 'fr', 'en'];
    }

    private function storeTranslations(string $key, array $translations): void
    {
        foreach ($translations as $translation) {
            // do some magic
        }
    }
}
