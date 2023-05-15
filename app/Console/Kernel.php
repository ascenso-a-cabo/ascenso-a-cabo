<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Funcion que se ejecuta cada 12 horas para actualizar la media de notas de los usuarios

        $schedule->call(function () {
            foreach (User::all() as $user){
                $media = $user->notas()->avg('nota');
                $user->media_notas = $media;
                $user->save();
            };
        })->twiceDailyAt('00:00', '12:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
