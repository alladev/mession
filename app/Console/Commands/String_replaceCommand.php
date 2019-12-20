<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MissionController;

class String_replaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'string_replace';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'reverse string and replace space character by _ mission_2 MissionController';

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
        echo $x->mission_2();

    }
}