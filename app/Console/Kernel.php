<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User;
use App\Console\Commands\ActualizarEstadisticas;
use App\Console\Commands\ActualizarEstadisticasUsuarios;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Funcion que se ejecuta cada 12 horas para actualizar la media de notas de los usuarios

        // Llamada al comando "actualizar-estadisticas"
    $schedule->call(function () {
        $this->call('app:actualizar-estadisticas');
    })->everyFiveMinutes();

    // Llamada al comando "actualizar-estadisticas-usuarios"
    $schedule->call(function () {
        $this->call('app:actualizar-estadisticas-usuarios');
    })->everyFiveMinutes();
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
