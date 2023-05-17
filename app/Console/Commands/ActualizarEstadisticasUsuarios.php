<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ActualizarEstadisticasUsuarios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:actualizar-estadisticas-usuarios';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'actualizar estadisticas de usuarios';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $users = User::all();

        foreach ($users as $user) {
            // Calculamos la media de notas de cada usuario
            $media = $user->notas()->avg('nota');
            $user->media_notas = $media;

            // Calculamos el total de exámenes de cada usuario
            $total = $user->notas()->count();
            $user->total_examenes = $total;

            // Guardamos los cambios
            $user->save();
        }
        $this->info('Estadísticas de usuarios actualizadas correctamente.');
    }
}
