<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Class Kernel
 * @package App\Console
 */
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
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->command('eve:update-server-status')
            ->everyFiveMinutes()->withoutOverlapping();

        $schedule->command('eve:update-eve')
            ->daily()->withoutOverlapping();

        $schedule->command('eve:update-map')
            ->daily()->withoutOverlapping();
    }
}