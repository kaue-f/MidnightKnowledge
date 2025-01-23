<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;

class ServiceMakeCommand extends Command
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
    protected $description = 'Create a new service class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $name = $this->argument('name');

            $path = app_path("Services/{$name}.php");

            $filesystem = new Filesystem();

            if ($filesystem->exists($path)) {
                $this->error("The service {$name} already exists!");
                return 1;
            }

            $stub = $this->getStub();
            $content = str_replace('{{name}}', $name, $stub);

            $filesystem->ensureDirectoryExists(dirname($path));
            $filesystem->put($path, $content);

            $this->info("✨ Service {$name} created successfully!");
            return 0;
        } catch (InvalidArgumentException $e) {
            $this->error('Too many arguments to "make:service" command, expected arguments "name".');
            return 1;
        } catch (\Exception $e) {
            $this->error("{$e->getMessage()}");
            return 1;
        }
    }

    /**
     * Get the console command arguments.
     */
    protected function getArguments(): array
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the service']
        ];
    }

    /**
     * Return stub.
     *
     * @return string
     */
    protected function getStub()
    {
        return <<<PHP
        <?php

        namespace App\Services;

        class {{name}}
        {
        
        }
        PHP;
    }
}
