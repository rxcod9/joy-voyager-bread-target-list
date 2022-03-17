<?php

namespace Joy\VoyagerBreadTargetList\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class BreadTargetList extends Command
{
    protected $name = 'joy-bread-target-list';

    protected $description = 'Joy VoyagerBreadTargetList';

    public function handle()
    {
        $this->output->title('Starting bread-target-list');

        // Your magic here

        $this->output->success('BreadTargetList successful');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['arguement1', InputArgument::REQUIRED, 'The argument1 description'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            [
                'option1',
                'o',
                InputOption::VALUE_OPTIONAL,
                'The option1 description',
                config('joy-voyager-bread-target-list.option1')
            ],
        ];
    }
}
