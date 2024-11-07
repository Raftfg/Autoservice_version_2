<?php

namespace App\Console;

use App\Models\Newsletters;
use App\Notifications\NewsletterNotification;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Notification;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {

            $news = Newsletters::all();

            foreach ($news as $new) {
                Notification::route('mail', $new->email)
                    ->notify(new NewsletterNotification());
            }
        })->/*monthly(5, '9:00')*/ everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
