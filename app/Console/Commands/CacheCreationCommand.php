<?php

namespace App\Console\Commands;

use InvalidArgumentException;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputArgument;

class CacheCreationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:cache {name}
                            {--base : Create a cache class extending BaseCache (default)}
                            {--raw : Create a standalone cache class without BaseCache extensio}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new cache class (extends BaseCache by default)';

    /**
     * Path to the BaseCache class that should be extended.
     *
     * @var string
     */
    protected $baseCachePath = 'Services/Cache/BaseCache.php';

    /**
     * Available cache templates.
     *
     * @return array
     */
    protected $templates = [
        'base' => <<<'PHP'
        <?php

        namespace App\Services\Cache{{namespace}};

        class {{class}} extends BaseCache
        {
           
        }
        PHP,

        'raw' => <<<'PHP'
        <?php

        namespace App\Services\Cache{{namespace}};

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

            if (!$this->baseCacheExists($filesystem) && !$this->option('raw')) {
                $this->createBaseCache($filesystem);
            }

            if ($filesystem->exists($path)) {
                $this->error("The cache {$name} already exists!");
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

            $this->info("✨ Cache {$name} created successfully!");
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
     * Check if BaseCache exists
     */
    protected function baseCacheExists(Filesystem $filesystem): bool
    {
        return $filesystem->exists(app_path($this->baseCachePath));
    }

    /**
     * Create the BaseCache file
     */
    protected function createBaseCache(Filesystem $filesystem): void
    {
        $path = app_path($this->baseCachePath);

        $filesystem->ensureDirectoryExists(dirname($path));
        $filesystem->put($path, $this->templateBaseCache());
    }

    /**
     * Returns the template for the BaseCache abstract class
     */
    protected function templateBaseCache(): string
    {
        return <<<'PHP'
        <?php

        namespace App\Services\Cache;

        use InvalidArgumentException;
        use Illuminate\Support\Facades\Cache;

        abstract class BaseCache
        {
            protected int $ttl = 3600;

            protected function remember(string $key, \Closure $callback)
            {
                return Cache::remember(
                    key: $key,
                    ttl: $this->validateTtl($ttl ?? $this->ttl),
                    callback: $callback
                );
            }

            protected function forget(string $key): bool
            {
                return Cache::forget($key);
            }

            protected function validateTtl(int $ttl): int
            {
                if ($ttl < 0) {
                    throw new InvalidArgumentException('TTL must be a positive integer');
                }

                return $ttl;
            }
        }
        PHP;
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
            throw new InvalidArgumentException('Cache name cannot be empty');
        }

        $parts = explode('/', $name);

        $className = ucfirst(array_pop($parts));

        if (!str_ends_with(strtolower($className), 'cache')) {
            $className .= 'Cache';
        }

        $parts[] = $className;
        return implode('/', $parts);
    }

    /**
     * Get the path where the cache should be stored
     *
     * @param string $name
     * @return string
     */
    protected function getPath(string $name): string
    {
        return app_path("Services/Cache/$name.php");
    }

    /**
     * Get the namespace for the cache based on its directory structure
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
            ['name', InputArgument::REQUIRED, 'The name of the cache']
        ];
    }

    /**
     * Return stub.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('raw')) {
            return $this->templates['raw'];
        }

        return $this->templates['base'];
    }
}
