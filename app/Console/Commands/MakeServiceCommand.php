<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service';

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
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $serviceName = ucwords($name) . 'Service';
        $servicePath = app_path("Services/{$serviceName}.php");

        if (file_exists($servicePath)) {
            $this->error('Service already exists!');
            return false;
        }

        // Create service file
        $serviceContent = "<?php\n\nnamespace App\Services;\n\n" .
                          "class {$serviceName}\n{\n    // Your service logic here\n}\n";
        file_put_contents($servicePath, $serviceContent);

        $this->info('Service created successfully: ' . $serviceName);
    }
}
