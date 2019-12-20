<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MissionController;

class Array_sumCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'array_sum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate the sum of multiple arrays mission_1 MissionController';

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
        $x = new MissionController(); 
        echo $x->mission_1();

    }
}