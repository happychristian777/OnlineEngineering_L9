<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\FileController;

class EveryMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'file:move';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To move newly arrived file in another folder after formating';

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
        $file=new FileController;
        $file->moveImage();
        return "Files moved successfully";
    }
}
