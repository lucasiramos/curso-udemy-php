<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('inspire')->hourly();
        $schedule->command('backup:run')->daily()->at('23:40')
            ->onFailure(function () {
                $myfile = fopen("newfile.txt", "w");
                $txt = "ERROR en el backup :(";
                fwrite($myfile, $txt);
                fclose($myfile);
            })
            ->onSuccess(function () {
                $myfile = fopen("newfile.txt", "w");
                $txt = "Backup REALIZADO!! :D (ver para creer igual...)";
                fwrite($myfile, $txt);
                fclose($myfile);
            });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
