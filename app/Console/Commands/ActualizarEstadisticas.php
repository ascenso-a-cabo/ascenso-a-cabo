<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Estadistica;

class ActualizarEstadisticas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:actualizar-estadisticas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * 
     * PARA EJECUTAR EL COMANDO: php artisan app:actualizar-estadisticas
     */
    public function handle()
    {
        //
        $totalNotas = User::sum('media_notas');
        $totalUsuarios = User::count();
        $medianotas = $totalUsuarios > 0 ? $totalNotas / $totalUsuarios : 0;
        $totalExamenes = User::sum('total_examenes');
        $mediaExamenes = $totalUsuarios > 0 ? $totalExamenes / $totalUsuarios : 0;


        Estadistica::updateOrCreate([], [
            'media_total_nota' => $medianotas,
            'media_examenes_realizados' => $mediaExamenes,
        ]);

        $this->info('Estadísticas actualizadas correctamente.');
    }
}
