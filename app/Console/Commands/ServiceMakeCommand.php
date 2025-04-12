<?php

namespace App\Console\Commands;

use InvalidArgumentException;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
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
     * Available service templates.
     *
     * @return array
     */
    protected $templates = [
        'service' => <<<PHP
        <?php

        namespace App\Services{{namespace}};

        class {{class}}
        {
        
        }
        PHP,
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $name = $this->getClassName();
            $path = $this->getPath($name);
            $filesystem = new Filesystem();

            if ($filesystem->exists($path)) {
                $this->error("The service {$name} already exists!");
                return 1;
            }

            $stub = $this->getStub();
            $namespace = $this->getNamespace($name);
            $className = basename($name);

            $content = str_replace(
                ['{{namespace}}', '{{class}}'],
                [$namespace, $className],
                $stub
            );

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
     * Get the class name from input
     *
     * @return string
     */
    protected function getClassName(): string
    {
        $name = trim($this->argument('name'));

        if (empty($name)) {
            throw new InvalidArgumentException('Service name cannot be empty');
        }

        $parts = explode('/', $name);

        $className = ucfirst(array_pop($parts));

        if (!str_ends_with(strtolower($className), 'service')) {
            $className .= 'Service';
        }

        $parts[] = $className;
        return implode('/', $parts);
    }

    /**
     * Get the path where the service should be stored
     *
     * @param string $name
     * @return string
     */
    protected function getPath(string $name): string
    {
        return app_path("Services/{$name}.php");
    }

    /**
     * Get the namespace for the service based on its directory structure
     *
     * @param string $name
     * @return string
     */
    protected function getNamespace(string $name): string
    {
        $directory = dirname($name);
        if ($directory === '.') {
            return '';
        }

        return '\\' . str_replace('/', '\\', $directory);
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
        return $this->templates['service'];
    }
}
