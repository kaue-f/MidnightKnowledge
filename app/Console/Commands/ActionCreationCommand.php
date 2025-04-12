<?php

namespace App\Console\Commands;

use InvalidArgumentException;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputArgument;

class ActionCreationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:action {name}
                            {--execute : Create an action with execute method}
                            {--invoke : Create an action with __invoke method}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new action class';

    /**
     * Available action templates.
     *
     * @return array
     */
    protected $templates = [
        'execute' => <<<PHP
        <?php

        namespace App\Actions{{namespace}};

        class {{class}}
        {
            public function execute()
            {
                
            }
        }
        PHP,

        'invoke' => <<<PHP
        <?php

        namespace App\Actions{{namespace}};

        class {{class}}
        {
            public function __invoke()
            {
            
            }
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
                $this->error("The action {$name} already exists!");
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

            $this->info("✨ Action {$name} created successfully!");
            return 0;
        } catch (InvalidArgumentException $e) {
            $this->error($e->getMessage());
            return 1;
        } catch (\Exception $e) {
            $this->error("Error: {$e->getMessage()}");
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
            throw new InvalidArgumentException('Action name cannot be empty');
        }

        $parts = explode('/', $name);

        $className = ucfirst(array_pop($parts));

        if (!str_ends_with(strtolower($className), 'action')) {
            $className .= 'Action';
        }

        $parts[] = $className;
        return implode('/', $parts);
    }

    /**
     * Get the path where the action should be stored
     *
     * @param string $name
     * @return string
     */
    protected function getPath(string $name): string
    {
        return app_path("Actions/$name.php");
    }

    /**
     * Get the namespace for the action based on its directory structure
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
            ['name', InputArgument::REQUIRED, 'The name of the action']
        ];
    }

    /**
     * Return stub.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('invoke')) {
            return $this->templates['invoke'];
        }

        return $this->templates['execute'];
    }
}
