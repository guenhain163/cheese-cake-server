<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * @var Collection
     */
    protected $generators = null;

    /**
     * Execute the command.
     *
     * @return void
     * @see fire()
     */
    public function handle()
    {
        $this->laravel->call([$this, 'fire'], func_get_args());
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function fire()
    {

        if ($this->confirm('Would you like to create a Presenter? [y|N]')) {
            $this->call('make:presenter', [
                'name' => $this->argument('name'),
            ]);
        }

        if ($this->confirm('Would you like to create a Validator? [y|N]')) {
            $this->call('make:validator', [
                'name' => $this->argument('name'),
            ]);
        }
//
        $this->call('make:repository', [
            'name' => $this->argument('name'),
            "--skip-model"=>true,
            "--skip-migration"=>true

        ]);

        $this->call('make:bindings', [
            'name' => $this->argument('name'),
        ]);
    }


    /**
     * The array of command arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return [
            [
                'name',
                InputArgument::REQUIRED,
                'The name of class being generated.',
                null
            ],
        ];
    }


    /**
     * The array of command options.
     *
     * @return array
     */
    public function getOptions()
    {
        return [
            [
                'fillable',
                null,
                InputOption::VALUE_OPTIONAL,
                'The fillable attributes.',
                null
            ],
            [
                'rules',
                null,
                InputOption::VALUE_OPTIONAL,
                'The rules of validation attributes.',
                null
            ],
            [
                'validator',
                null,
                InputOption::VALUE_OPTIONAL,
                'Adds validator reference to the repository.',
                null
            ],
            [
                'force',
                'f',
                InputOption::VALUE_NONE,
                'Force the creation if file already exists.',
                null
            ]
        ];
    }
}
