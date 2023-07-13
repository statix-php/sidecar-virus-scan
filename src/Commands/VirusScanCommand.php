<?php

namespace Statix\VirusScan\Commands;

use Illuminate\Console\Command;

class VirusScanCommand extends Command
{
    public $signature = 'sidecar-virus-scan';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
