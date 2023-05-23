<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('preguntas')->insert([
            ['id' => 1, 'enunciado' => 'Reales Ordenanzas, Articulo 1 : Objeto', 'tema_id' => 1],
            ['id' => 2, 'enunciado' => 'RR.OO Art. 2. Ámbito de aplicación…', 'tema_id' => 1],
            ['id' => 3, 'enunciado' => 'RR.OO. Art. 3 Primer deber del militar.', 'tema_id' => 1],
            ['id' => 4, 'enunciado' => 'RR.OO. Art. 4. Deberes de carácter general.', 'tema_id' => 1],
            ['id' => 5, 'enunciado' => 'RR.OO. Art. 5. Actuación del militar como servidor público. Deberá actuar con
            arreglo a los principios de…', 'tema_id' => 1],
            ['id' => 6, 'enunciado' => 'RR.OO. Art. 6.Todo militar tiene el ________ de prestar ante la Bandera juramento
            o promesa de defender a España.', 'tema_id' => 1],
            ['id' => 7, 'enunciado' => 'RR.OO. Art. 6. Mostrara el máximo respeto a la Bandera y Escudo de España y al
            Himno Nacional…..', 'tema_id' => 1],
            ['id' => 8, 'enunciado' => 'RR.OO. Art. 7. Características del comportamiento del militar.', 'tema_id' => 1],
            ['id' => 9, 'enunciado' => 'RR.OO. Art. 8. La disciplina.', 'tema_id' => 1],
            ['id' => 10, 'enunciado' => 'RR.OO. Art. 10. Unidad de las FAS. EL militar se comportará:', 'tema_id' => 1],
            ['id' => 11, 'enunciado' => 'RR.OO. Art. 11. Dignidad de la persona. Ajustara su conducta al:', 'tema_id' => 1],
            ['id' => 12, 'enunciado' => 'RR.OO. Art. 12. Derechos fundamentales y libertades públicas. El militar
            respetara y hará respetar:', 'tema_id' => 1],
            ['id' => 13, 'enunciado' => 'RR.OO. Art. 13. Igualdad de género. ¿por qué aplicación velara?', 'tema_id' => 1],
            ['id' => 14, 'enunciado' => 'RR.OO. Art. 13. Dignidad de la persona.', 'tema_id' => 1],
            ['id' => 15, 'enunciado' => 'Señalar la falsa. RR.OO. Art. 14.espirtu militar. Pruebas de gran desidia: ', 'tema_id' => 1],
            ['id' => 16, 'enunciado' => 'RR.OO. Art. 16. Cumplimiento del deber. Cumplirá con exactitud sus deberes y
            obligaciones inspirado en…', 'tema_id' => 1],
            ['id' => 17, 'enunciado' => 'RR.OO. Art. 16. Cumplimiento del deber. Cumplirá con exactitud:', 'tema_id' => 1],
            ['id' => 18, 'enunciado' => 'RR.OO. Art. 16. Cumplimiento del deber. Cumplirá con sus derechos y
            obligaciones que marcan:', 'tema_id' => 1],
            ['id' => 19, 'enunciado' => 'Señalar la falsa. RR.OO. Art. 17. Virtudes fundamentales.', 'tema_id' => 1],
            ['id' => 20, 'enunciado' => 'RR.OO. Art. 18. Justicia en las FAS. Nadie tendrá nada que esperar del favor ni
            temerá…', 'tema_id' => 1],
            ['id' => 21, 'enunciado' => 'RR.OO. Art. 18. Justicia en las FAS. Completa: propiciara, con su actuación, que
            _______impere en las FAS.', 'tema_id' => 1],
            ['id' => 22, 'enunciado' => 'RR.OO. Art. 19. Dedicación del militar.', 'tema_id' => 1],
            ['id' => 23, 'enunciado' => 'RR.OO. Art. 19. Dedicación del militar. Deberá tener…', 'tema_id' => 1],
            ['id' => 24, 'enunciado' => 'RR.OO. Art. 20. Disponibilidad para el servicio. Estará en disponibilidad:', 'tema_id' => 1],
            ['id' => 25, 'enunciado' => 'RR.OO. Art. 20. Disponibilidad para el servicio.', 'tema_id' => 1],
            ['id' => 26, 'enunciado' => 'RR.OO. Art. 21. Tradición militar en los Ejércitos. Homenaje a los héroes.', 'tema_id' => 1],
            ['id' => 27, 'enunciado' => 'RR.OO. Art. 22. Prestigio de las Fuerzas Armadas.', 'tema_id' => 1],
            ['id' => 28, 'enunciado' => 'RR.OO. Art. 23. Historial y tradiciones.', 'tema_id' => 1],
            ['id' => 29, 'enunciado' => 'RR.OO. Art. 32. Relaciones con la población civil.', 'tema_id' => 1],
            ['id' => 30, 'enunciado' => 'RR.OO. Art. 38. Quejas y reclamaciones.', 'tema_id' => 1],
            ['id' => 31, 'enunciado' => 'RR.OO. Art. 44. De la disciplina. Conjunto de reglas para mantener el orden y la
            subordinación se denomina:', 'tema_id' => 1],
            ['id' => 32, 'enunciado' => 'RR.OO. Art. 46. Instrucciones y ordenes de autoridades.', 'tema_id' => 1],
            ['id' => 33, 'enunciado' => 'RR.OO. Art. 47. Responsabilidad en la obediencia.', 'tema_id' => 1],
            ['id' => 34, 'enunciado' => 'RR.OO. Art. 48. Límites de la obediencia.', 'tema_id' => 1],
            ['id' => 35, 'enunciado' => 'RR.OO. Art. 49. Objeción sobre órdenes recibidas.', 'tema_id' => 1],
            ['id' => 36, 'enunciado' => 'RR.OO. Art. 50. Actitud ante el personal de servicio.', 'tema_id' => 1],
            ['id' => 37, 'enunciado' => 'RR.OO. Art. 51. Forma de corregir.', 'tema_id' => 1],
            ['id' => 38, 'enunciado' => 'RR.OO. Art. 52. El saludo militar constituye.', 'tema_id' => 1],
            ['id' => 39, 'enunciado' => 'Señalar la Falsa. RR.OO. Art. 52. Signos externos de disciplina, cortesía militar y policía', 'tema_id' => 1],
            ['id' => 40, 'enunciado' => 'RR.OO. Art. 53. Estilo de mando.', 'tema_id' => 1],
            ['id' => 41, 'enunciado' => 'RR.OO. Art. 54. Liderazgo.', 'tema_id' => 1],
            ['id' => 42, 'enunciado' => 'Señalar la falsa. RR.OO. Art. 55. Responsabilidad en el ejercicio del mando.', 'tema_id' => 1],
            ['id' => 43, 'enunciado' => 'RR.OO. Art. 57. Aprecio de la vida de sus subordinados.” Será su preocupación
            constante velar por… “', 'tema_id' => 1],
            ['id' => 44, 'enunciado' => 'RR.OO. Art. 60. Capacidad de decisión, iniciativa y creatividad.', 'tema_id' => 1],
            ['id' => 45, 'enunciado' => 'RR.OO. Art. 61. Ejercicio de autoridad.', 'tema_id' => 1],
            ['id' => 46, 'enunciado' => 'RR.OO. Art. 62. Toma de decisiones.', 'tema_id' => 1],
            ['id' => 47, 'enunciado' => 'Señala la falsa. RR.OO. Art. 69. Conocimiento de los subordinados y sus intereses.', 'tema_id' => 1],
            ['id' => 48, 'enunciado' => 'RR.OO. Art. 70. Motivación de los subordinados. ¿Qué utilizara para motivar a
            sus subordinados en el ejercicio profesional?', 'tema_id' => 1],
            ['id' => 49, 'enunciado' => 'RR.OO. Art. 72. Espíritu de equipo. Lo fomentara para…', 'tema_id' => 1],
            ['id' => 50, 'enunciado' => 'Señala la falsa. RR.OO. Art. 73. Convivencia en su Unidad.', 'tema_id' => 1],
            ['id' => 51, 'enunciado' => 'RR.OO. Art. 83. Preparación para el combate.', 'tema_id' => 1],
            ['id' => 52, 'enunciado' => 'RR.OO. Art. 84. Uso legitimo de la fuerza. El militar hará…', 'tema_id' => 1],
            ['id' => 53, 'enunciado' => 'Señala la falsa. RR.OO. RR.OO. Art. 88. Cumplimiento de la misión.', 'tema_id' => 1],
            ['id' => 54, 'enunciado' => 'RR.OO. Art. 89. Cualidades del combatiente. ¿Cuál NO es una virtud que debe
            poseer todo combatiente?', 'tema_id' => 1],
            ['id' => 55, 'enunciado' => 'RR.OO. Art. 90. Conservación del puesto. ¿Cuándo se puede abandonar el
            puesto si tiene la orden de conservarlo a toda costa.', 'tema_id' => 1],
            ['id' => 56, 'enunciado' => 'RR.OO. Art. 92. Moral de victoria.', 'tema_id' => 1],
            ['id' => 57, 'enunciado' => 'RR.OO. Art. 93. Misiones de paz, estabilidad, seguridad y ayuda humanitaria.
            Cuando el militar actué en misiones de esta índole, lo hará…', 'tema_id' => 1],
            ['id' => 58, 'enunciado' => 'RR.OO. Art. 96. Preparación y actuación en operaciones de paz y humanitarias.', 'tema_id' => 1],
            ['id' => 59, 'enunciado' => 'RR.OO. Art. 100. Repercusión en la imagen de las Fuerzas armadas', 'tema_id' => 1],
            ['id' => 60, 'enunciado' => 'RR.OO. Art. 101. Competencia en la actuación. (Solo una parte de esta frase dividida en tres partes es correcta).', 'tema_id' => 1],
            ['id' => 61, 'enunciado' => 'RR.OO. Art. 103. Prestigio de las Fuerzas Armadas. Apoyo a las Fuerzas y Cuerpo de Seguridad. Cuando se le asignen misiones de colaboración y apoyo a las Fuerzas y apoyo a las fuerzas y cuerpos de seguridad para ____________del libre
            ejercicio de los derechos y libertades para garantizar la seguridad ciudadana, pondrá___________ en el cumplimiento de las tareas asignadas.', 'tema_id' => 1],
        ]);
    }
}
