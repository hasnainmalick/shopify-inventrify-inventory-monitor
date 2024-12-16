<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Schedule;
use Carbon\Carbon;
use App\Jobs\SendEmailJob;

class SendReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Inventory Report';

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
        \Log::info('command executed');
        $jobsToRun = Schedule::where('status',1)->get();
       if(isset($jobsToRun)){
        foreach ($jobsToRun as $schedule) {
            $time_now = Carbon::now($schedule->time_zone)->format('H:i');
            if($time_now===$schedule->time){
                dispatch(new SendEmailJob($schedule));
            }
            
        }
       }    
        return 0;
    }
}
