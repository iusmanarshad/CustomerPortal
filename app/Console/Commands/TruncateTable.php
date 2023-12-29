<?php

namespace App\Console\Commands;

use App\Models\Question;
use Illuminate\Console\Command;

class TruncateTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'truncate:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Question::truncate();
        return Command::SUCCESS;
    }
}
