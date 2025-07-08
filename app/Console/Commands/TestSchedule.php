<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TestSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for testing Scheduling for user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::first();
        Log::info("hello " . $user->name);
    }
}
