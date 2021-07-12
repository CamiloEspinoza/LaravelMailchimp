<?php

namespace Laravelmailchimp\Laravelmailchimp\Commands;

use Illuminate\Console\Command;

class LaravelmailchimpCommand extends Command
{
    public $signature = 'laravelmailchimp';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
