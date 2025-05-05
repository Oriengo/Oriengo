<?php

namespace Oriengo\Console;

class Application
{
    public function run($argv)
    {
        $command = $argv[1] ?? null;

        switch ($command) {
            case 'run':
                echo "Starting Oriengo Development Server...\n";
                exec('php -S localhost:8000 -t public');
                break;

            case 'help':
            default:
                $this->help();
                break;
        }
    }

    protected function help()
    {
        echo "Oriengo CLI - Available commands:\n";
        echo "  run       Start development server\n";
        echo "  help      Show this help message\n";
    }
}
