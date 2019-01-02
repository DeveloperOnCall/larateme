<?php

namespace DeveloperOnCall\Larateme\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larateme:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add the larateme template assets to public path';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'larateme:assets',
            '--force' => '--force',
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'larateme:auth',
            '--force' => '--force',
        ]);

        $this->info('The larateme template assets have been added successfully.');
    }
}
