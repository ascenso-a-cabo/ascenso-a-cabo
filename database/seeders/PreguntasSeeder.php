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
            ['id' => 1, 'enunciado' => 'Reales Ordenanzas, Articulo 1 : Objeto', 'bloque_id' => 1],
            ['id' => 2, 'enunciado' => 'RR.OO Art. 2. Ámbito de aplicación…', 'bloque_id' => 1],
            ['id' => 3, 'enunciado' => 'RR.OO. Art. 3 Primer deber del militar.', 'bloque_id' => 1],
            ['id' => 4, 'enunciado' => 'RR.OO. Art. 4. Deberes de carácter general.', 'bloque_id' => 1],
            ['id' => 5, 'enunciado' => 'RR.OO. Art. 5. Actuación del militar como servidor público. Deberá actuar con
            arreglo a los principios de…', 'bloque_id' => 1],
            ['id' => 6, 'enunciado' => 'RR.OO. Art. 6.Todo militar tiene el ________ de prestar ante la Bandera juramento
            o promesa de defender a España.', 'bloque_id' => 1],
            ['id' => 7, 'enunciado' => 'RR.OO. Art. 6. Mostrara el máximo respeto a la Bandera y Escudo de España y al
            Himno Nacional…..', 'bloque_id' => 1],
            ['id' => 8, 'enunciado' => 'RR.OO. Art. 7. Características del comportamiento del militar.', 'bloque_id' => 1],
            ['id' => 9, 'enunciado' => 'RR.OO. Art. 8. La disciplina.', 'bloque_id' => 1],
            ['id' => 10, 'enunciado' => 'RR.OO. Art. 10. Unidad de las FAS. EL militar se comportará:', 'bloque_id' => 1],
            ['id' => 11, 'enunciado' => 'RR.OO. Art. 11. Dignidad de la persona. Ajustara su conducta al:', 'bloque_id' => 1],
            ['id' => 12, 'enunciado' => 'RR.OO. Art. 12. Derechos fundamentales y libertades públicas. El militar
            respetara y hará respetar:', 'bloque_id' => 1],
            ['id' => 13, 'enunciado' => 'RR.OO. Art. 13. Igualdad de género. ¿por qué aplicación velara?', 'bloque_id' => 1],
            ['id' => 14, 'enunciado' => 'RR.OO. Art. 13. Dignidad de la persona.', 'bloque_id' => 1],
            ['id' => 15, 'enunciado' => 'Señalar la falsa. RR.OO. Art. 14.espirtu militar. Pruebas de gran desidia: ', 'bloque_id' => 1],
            ['id' => 16, 'enunciado' => 'RR.OO. Art. 16. Cumplimiento del deber. Cumplirá con exactitud sus deberes y
            obligaciones inspirado en…', 'bloque_id' => 1],
            ['id' => 17, 'enunciado' => 'RR.OO. Art. 16. Cumplimiento del deber. Cumplirá con exactitud:', 'bloque_id' => 1],
            ['id' => 18, 'enunciado' => 'RR.OO. Art. 16. Cumplimiento del deber. Cumplirá con sus derechos y
            obligaciones que marcan:', 'bloque_id' => 1],
            ['id' => 19, 'enunciado' => 'Señalar la falsa. RR.OO. Art. 17. Virtudes fundamentales.', 'bloque_id' => 1],
            ['id' => 20, 'enunciado' => 'RR.OO. Art. 18. Justicia en las FAS. Nadie tendrá nada que esperar del favor ni
            temerá…', 'bloque_id' => 1],
            ['id' => 21, 'enunciado' => 'RR.OO. Art. 18. Justicia en las FAS. Completa: propiciara, con su actuación, que
            _______impere en las FAS.', 'bloque_id' => 1],
            ['id' => 22, 'enunciado' => 'RR.OO. Art. 19. Dedicación del militar.', 'bloque_id' => 1],
            ['id' => 23, 'enunciado' => 'RR.OO. Art. 19. Dedicación del militar. Deberá tener…', 'bloque_id' => 1],
            ['id' => 24, 'enunciado' => 'RR.OO. Art. 20. Disponibilidad para el servicio. Estará en disponibilidad:', 'bloque_id' => 1],
            ['id' => 25, 'enunciado' => 'RR.OO. Art. 20. Disponibilidad para el servicio.', 'bloque_id' => 1],
            ['id' => 26, 'enunciado' => 'RR.OO. Art. 21. Tradición militar en los Ejércitos. Homenaje a los héroes.', 'bloque_id' => 1],
            ['id' => 27, 'enunciado' => 'RR.OO. Art. 22. Prestigio de las Fuerzas Armadas.', 'bloque_id' => 1],
            ['id' => 28, 'enunciado' => 'RR.OO. Art. 23. Historial y tradiciones.', 'bloque_id' => 1],
            ['id' => 29, 'enunciado' => 'RR.OO. Art. 32. Relaciones con la población civil.', 'bloque_id' => 1],
            ['id' => 30, 'enunciado' => 'RR.OO. Art. 38. Quejas y reclamaciones.', 'bloque_id' => 1],
            ['id' => 31, 'enunciado' => 'RR.OO. Art. 44. De la disciplina. Conjunto de reglas para mantener el orden y la
            subordinación se denomina:', 'bloque_id' => 1],
            ['id' => 32, 'enunciado' => 'RR.OO. Art. 46. Instrucciones y ordenes de autoridades.', 'bloque_id' => 1],
            ['id' => 33, 'enunciado' => 'RR.OO. Art. 47. Responsabilidad en la obediencia.', 'bloque_id' => 1],
            ['id' => 34, 'enunciado' => 'RR.OO. Art. 48. Límites de la obediencia.', 'bloque_id' => 1],
            ['id' => 35, 'enunciado' => 'RR.OO. Art. 49. Objeción sobre órdenes recibidas.', 'bloque_id' => 1],
            ['id' => 36, 'enunciado' => 'RR.OO. Art. 50. Actitud ante el personal de servicio.', 'bloque_id' => 1],
            ['id' => 37, 'enunciado' => 'RR.OO. Art. 51. Forma de corregir.', 'bloque_id' => 1],
            ['id' => 38, 'enunciado' => 'RR.OO. Art. 52. El saludo militar constituye.', 'bloque_id' => 1],
            ['id' => 39, 'enunciado' => 'Señalar la Falsa. RR.OO. Art. 52. Signos externos de disciplina, cortesía militar y policía', 'bloque_id' => 1],
            ['id' => 40, 'enunciado' => 'RR.OO. Art. 53. Estilo de mando.', 'bloque_id' => 1],
            ['id' => 41, 'enunciado' => 'RR.OO. Art. 54. Liderazgo.', 'bloque_id' => 1],
            ['id' => 42, 'enunciado' => 'Señalar la falsa. RR.OO. Art. 55. Responsabilidad en el ejercicio del mando.', 'bloque_id' => 1],
            ['id' => 43, 'enunciado' => 'RR.OO. Art. 57. Aprecio de la vida de sus subordinados.” Será su preocupación
            constante velar por… “', 'bloque_id' => 1],
            ['id' => 44, 'enunciado' => 'RR.OO. Art. 60. Capacidad de decisión, iniciativa y creatividad.', 'bloque_id' => 1],
            ['id' => 45, 'enunciado' => 'RR.OO. Art. 61. Ejercicio de autoridad.', 'bloque_id' => 1],
            ['id' => 46, 'enunciado' => 'RR.OO. Art. 62. Toma de decisiones.', 'bloque_id' => 1],
            ['id' => 47, 'enunciado' => 'Señala la falsa. RR.OO. Art. 69. Conocimiento de los subordinados y sus intereses.', 'bloque_id' => 1],
            ['id' => 48, 'enunciado' => 'RR.OO. Art. 70. Motivación de los subordinados. ¿Qué utilizara para motivar a
            sus subordinados en el ejercicio profesional?', 'bloque_id' => 1],
            ['id' => 49, 'enunciado' => 'RR.OO. Art. 72. Espíritu de equipo. Lo fomentara para…', 'bloque_id' => 1],
            ['id' => 50, 'enunciado' => 'Señala la falsa. RR.OO. Art. 73. Convivencia en su Unidad.', 'bloque_id' => 1],
            ['id' => 51, 'enunciado' => 'RR.OO. Art. 83. Preparación para el combate.', 'bloque_id' => 1],
            ['id' => 52, 'enunciado' => 'RR.OO. Art. 84. Uso legitimo de la fuerza. El militar hará…', 'bloque_id' => 1],
            ['id' => 53, 'enunciado' => 'Señala la falsa. RR.OO. RR.OO. Art. 88. Cumplimiento de la misión.', 'bloque_id' => 1],
            ['id' => 54, 'enunciado' => 'RR.OO. Art. 89. Cualidades del combatiente. ¿Cuál NO es una virtud que debe
            poseer todo combatiente?', 'bloque_id' => 1],
            ['id' => 55, 'enunciado' => 'RR.OO. Art. 90. Conservación del puesto. ¿Cuándo se puede abandonar el
            puesto si tiene la orden de conservarlo a toda costa.', 'bloque_id' => 1],
            ['id' => 56, 'enunciado' => 'RR.OO. Art. 92. Moral de victoria.', 'bloque_id' => 1],
            ['id' => 57, 'enunciado' => 'RR.OO. Art. 93. Misiones de paz, estabilidad, seguridad y ayuda humanitaria.
            Cuando el militar actué en misiones de esta índole, lo hará…', 'bloque_id' => 1],
            ['id' => 58, 'enunciado' => 'RR.OO. Art. 96. Preparación y actuación en operaciones de paz y humanitarias.', 'bloque_id' => 1],
            ['id' => 59, 'enunciado' => 'RR.OO. Art. 100. Repercusión en la imagen de las Fuerzas armadas', 'bloque_id' => 1],
            ['id' => 60, 'enunciado' => 'RR.OO. Art. 101. Competencia en la actuación. (Solo una parte de esta frase dividida en tres partes es correcta).', 'bloque_id' => 1],
            ['id' => 61, 'enunciado' => 'RR.OO. Art. 103. Prestigio de las Fuerzas Armadas. Apoyo a las Fuerzas y Cuerpo de Seguridad. Cuando se le asignen misiones de colaboración y apoyo a las Fuerzas y apoyo a las fuerzas y cuerpos de seguridad para ____________del libre
            ejercicio de los derechos y libertades para garantizar la seguridad ciudadana, pondrá___________ en el cumplimiento de las tareas asignadas.', 'bloque_id' => 1],
            ['id' => 62, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 1. La seguridad en las FAS…', 'bloque_id' => 2],
            ['id' => 63, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 2. Definiciones. A efectos de estas
            normas:', 'bloque_id' => 2],
            ['id' => 64, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 3. Ámbito de aplicación. ¿Qué
            seguridad NO se rige por su propia normativa?', 'bloque_id' => 2],
            ['id' => 65, 'enunciado' => 'Señalar la falsa. Seguridad en las FAS. RD.194/2010. ART. 4. La seguridad en las FAS…', 'bloque_id' => 2],
            ['id' => 66, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 5. Zonas de seguridad exterior de las
            unidades…', 'bloque_id' => 2],
            ['id' => 67, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 5. Zonas de seguridad exterior de las
            unidades.', 'bloque_id' => 2],
            ['id' => 68, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 6. Seguridad en el interior de las
            unidades…', 'bloque_id' => 2],
            ['id' => 69, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 6. Seguridad en el interior de las
            unidades.', 'bloque_id' => 2],
            ['id' => 70, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 7. Responsable de la seguridad…', 'bloque_id' => 2],
            ['id' => 71, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 7. Responsable de la seguridad cuando
            en una base se alojen varias unidades…', 'bloque_id' => 2],
            ['id' => 72, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 7. Responsable de la seguridad…', 'bloque_id' => 2],
            ['id' => 73, 'enunciado' => 'Completa la pregunta. Seguridad en las FAS. RD.194/2010. ART. 8. Formación. Los miembros de las FAS
            recibirán la formación y preparación adecuadas con el fin de capacitarles en el
            grado necesario para_______…', 'bloque_id' => 2],
            ['id' => 74, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 8. Formación.', 'bloque_id' => 2],
            ['id' => 75, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 9. Plan de seguridad. La clasificación
            de este documento, sin tener en cuenta la clasificación de algunos de sus
            apartados, será:', 'bloque_id' => 2],
            ['id' => 76, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 9. Plan de seguridad.', 'bloque_id' => 2],
            ['id' => 77, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 11. Colaboración de la Seguridad
            privada.', 'bloque_id' => 2],
            ['id' => 78, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 14. Guardia de Seguridad.', 'bloque_id' => 2],
            ['id' => 79, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 14. Guardia de Seguridad.', 'bloque_id' => 2],
            ['id' => 80, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 15. Carácter de los componentes de la
            guardia de seguridad.', 'bloque_id' => 2],
            ['id' => 81, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 17. Duración de la guardia de
            seguridad.', 'bloque_id' => 2],
            ['id' => 82, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 21. Cabo de la guardia...', 'bloque_id' => 2],
            ['id' => 83, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 22. Tropa y marinería de guardia.', 'bloque_id' => 2],
            ['id' => 84, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 23. Transmisión de órdenes. ¿Quién No
            puede transmitirle las órdenes a la tropa y marinería?', 'bloque_id' => 2],
            ['id' => 85, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 25. Obligaciones del centinela.', 'bloque_id' => 2],
            ['id' => 86, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART.26. puesto de centinela.', 'bloque_id' => 2],
            ['id' => 87, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 27. Patrullas.', 'bloque_id' => 2],
            ['id' => 88, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 28. Vigilantes.', 'bloque_id' => 2],
            ['id' => 89, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 29. De la policía militar, naval o aérea.', 'bloque_id' => 2],
            ['id' => 90, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 30. Cometidos de la PM.', 'bloque_id' => 2],
            ['id' => 91, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART.31. Apoyo entre policías.', 'bloque_id' => 2],
            ['id' => 92, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 32. Intervención ante delitos
            flagrantes .¿Cuándo pueden intervenir.?', 'bloque_id' => 2],
            ['id' => 93, 'enunciado' => 'Seguridad en las FAS. O.M. 50/2011. Art. 80. Guardias de seguridad.', 'bloque_id' => 2],
            ['id' => 94, 'enunciado' => 'Seguridad en las FAS. O.M. 50/2011. Art. 82. Composición de una guardia de
            seguridad.', 'bloque_id' => 2],
            ['id' => 95, 'enunciado' => 'Seguridad en las FAS. O.M. 50/2011 ART.86. Cabo de guardia.', 'bloque_id' => 2],
            ['id' => 96, 'enunciado' => 'Mando de régimen interior. La acción del mando.', 'bloque_id' => 3],
            ['id' => 97, 'enunciado' => 'Mando de régimen interior. Régimen interior.', 'bloque_id' => 3],
            ['id' => 98, 'enunciado' => 'Mando de régimen interior. Se denomina unidad…', 'bloque_id' => 3],
            ['id' => 99, 'enunciado' => 'Mando de régimen interior. El mando se podrá ejercer…', 'bloque_id' => 3],
            ['id' => 100, 'enunciado' => 'Mando de régimen interior. El E.T. es una organización …', 'bloque_id' => 3],
            ['id' => 101, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 2. COMPLETAR.
            DEFINICIONES. _______ , acción directiva especifica de las Fas, se refiere
            al ejercicio de la autoridad, con la consiguiente responsabilidad, que
            corresponde al militar en razón de su cargo, destino o servicio.', 'bloque_id' => 3],
            ['id' => 102, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 4. El E.T. está
            constituido por…', 'bloque_id' => 3],
            ['id' => 103, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 5. Unidades, Centros y
            Organismos…', 'bloque_id' => 3],
            ['id' => 104, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 6. El libro de
            organización…', 'bloque_id' => 3],
            ['id' => 105, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 7. Bases,
            Acuartelamiento y Establecimientos.', 'bloque_id' => 3],
            ['id' => 106, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 8. Autoridad y acción
            de mando.', 'bloque_id' => 3],
            ['id' => 107, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 10. Carácter del mando.', 'bloque_id' => 3],
            ['id' => 108, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 12. Sucesión de
            mando.', 'bloque_id' => 3],
            ['id' => 109, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 31. régimen interior', 'bloque_id' => 3],
            ['id' => 110, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 32. El libro de normas
            de régimen interior.', 'bloque_id' => 3],
            ['id' => 111, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 34. Los actos de
            régimen interior.', 'bloque_id' => 3],
            ['id' => 112, 'enunciado' => 'Señalar la falsa. Mando de régimen interior. OM 50/2011 Art. 51. La unidad de
            servicios.', 'bloque_id' => 3],
            ['id' => 113, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 52. Los servicios e la
            instalación.', 'bloque_id' => 3],
            ['id' => 114, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 53. Clases de servicios,
            en general, una instalación podrá contar con los siguientes servicios:', 'bloque_id' => 3],
            ['id' => 115, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 78. Las guardias.
            Conceptos generales.', 'bloque_id' => 3],
            ['id' => 116, 'enunciado' => 'Señala la falsa. Mando de régimen interior. OM 50/2011 Art. 79. Clases y carácter
            de las guardias', 'bloque_id' => 3],
            ['id' => 117, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 90. Guardias de orden.', 'bloque_id' => 3],
            ['id' => 118, 'enunciado' => 'Señala la falsa. Mando de régimen interior. OM 50/2011 Art. 91. Composición de las
            guardias de orden. En el caso más completo, las guardias de orden
            podrán tener la siguiente composición…', 'bloque_id' => 3],
            ['id' => 119, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 95. Personal de Tropa
            de Cuartel.', 'bloque_id' => 3],
            ['id' => 120, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 97. Cabo de cuartel,
            cuarteleros e imaginarias.', 'bloque_id' => 3],
            ['id' => 121, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 98. Guardia de los
            servicios.', 'bloque_id' => 3],
            ['id' => 122, 'enunciado' => 'Señala la falsa. Mando de régimen interior. OM 50/2011 Art. 105. Los turnos de las
            guardias.', 'bloque_id' => 3],
            ['id' => 123, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 106. Nombramiento de
            las guardias.', 'bloque_id' => 3],
            ['id' => 124, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 107. Prestación de las
            guardias.', 'bloque_id' => 3],
            ['id' => 125, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 104. Organización de
            las guardias. Quien no realizara guardias?', 'bloque_id' => 3],
            ['id' => 126, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 106. Nombramiento de
            las guardias.', 'bloque_id' => 3],
            ['id' => 127, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 1. Objeto y ámbito de
            aplicación.', 'bloque_id' => 4],
            ['id' => 128, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 1. Objeto y ámbito de
            aplicación.', 'bloque_id' => 4],
            ['id' => 129, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 1. Objeto y ámbito de
            aplicación de la ley. Esta ley es de aplicación a todos los miembros de las
            FAS.', 'bloque_id' => 4],
            ['id' => 130, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 3. Vinculación con
            las FAS.', 'bloque_id' => 4],
            ['id' => 131, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 3. Vinculación con
            las FAS.', 'bloque_id' => 4],
            ['id' => 132, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 3. Vinculación con las
            Fuerzas Armadas.', 'bloque_id' => 4],
            ['id' => 133, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 6. Modalidades de relación de
            servicios.', 'bloque_id' => 4],
            ['id' => 134, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 7. Juramento o
            promesa ante la bandera de España.', 'bloque_id' => 4],
            ['id' => 135, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 8. Renovaciones de
            compromiso.', 'bloque_id' => 4],
            ['id' => 136, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 9. Compromiso de larga
            duración.', 'bloque_id' => 4],
            ['id' => 137, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 10. Finalización y resolución
            del compromiso de larga duración.', 'bloque_id' => 4],
            ['id' => 138, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 8/2006. Art. 14. ¿Bajo qué causas se podrá
            cambiar de especialidad?', 'bloque_id' => 4],
            ['id' => 139, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 15. Promoción interna.', 'bloque_id' => 4],
            ['id' => 140, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 16. Se les facilitara de forma
            prioritaria formación en aéreas relativas a las tecnologías de la
            información y las comunicaciones, prevención de riesgos laborales,
            medio ambiente, así como cursos para la obtención de los permisos de
            conducción y aquellos otros que se consideren de interés para su
            desarrollo profesional.', 'bloque_id' => 4],
            ['id' => 141, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 17. Juramento
            promesa ante la bandera de España.', 'bloque_id' => 4],
            ['id' => 142, 'enunciado' => 'Legislación militar. Ley 8/2006. Art.17. definición y condiciones.', 'bloque_id' => 4],
            ['id' => 143, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 18. Activación e incorporación.', 'bloque_id' => 4],
            ['id' => 144, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 19. Funciones.', 'bloque_id' => 4],
            ['id' => 145, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 19. Funciones. La
            acción del mando.', 'bloque_id' => 4],
            ['id' => 146, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 19. Funciones. El
            militar profesional ejerce funciones…', 'bloque_id' => 4],
            ['id' => 147, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 19. Funciones. Acción
            directiva.', 'bloque_id' => 4],
            ['id' => 148, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 20. El tiempo de servicios
            prestados en las FAS se considera como merito en los sistemas de
            selección para el acceso a los cuerpos, escalas, plazas de funcionario y
            puestos de carácter laboral de las administraciones públicas.', 'bloque_id' => 4],
            ['id' => 149, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 21. La secretaria del gobierno
            gestionara y convendrá con instituciones públicas y entidades privadas
            acciones orientadas a la incorporación laboral de los militares
            profesionales de tropa y marinería.', 'bloque_id' => 4],
            ['id' => 150, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 23. Facultades y antigüedad
            en el empleo militar:', 'bloque_id' => 4],
            ['id' => 151, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 24. Empleos con carácter
            honorifico.', 'bloque_id' => 4],
            ['id' => 152, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 25. Cuerpos y escalas.', 'bloque_id' => 4],
            ['id' => 153, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 26. Cuerpos militares.
            Cuerpos específicos del E.T.', 'bloque_id' => 4],
            ['id' => 154, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 26. Cuerpos militares.
            Cuerpos comunes de las FAS.', 'bloque_id' => 4],
            ['id' => 155, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 41. Especialidades', 'bloque_id' => 4],
            ['id' => 156, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 42. Capacidades
            profesionales. Se determinan por…', 'bloque_id' => 4],
            ['id' => 157, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 43. Enseñanza en las FAS.', 'bloque_id' => 4],
            ['id' => 158, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 47.enseñanza de formación de
            tropa y marinería.', 'bloque_id' => 4],
            ['id' => 159, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 48. Enseñanza de
            perfeccionamiento.', 'bloque_id' => 4],
            ['id' => 160, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 62. Cambio de escala.', 'bloque_id' => 4],
            ['id' => 161, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 75. Desarrollo de la carrera,
            carrera militar de las escalas de tropa y marinería comenzaran con un
            compromiso inicial, renovable hasta un máximo de 6 años.
            Posteriormente, podrán suscribir un compromiso de larga duración hasta
            cumplir los 45 años de edad.', 'bloque_id' => 4],
            ['id' => 162, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 76. Adquisición de la
            condición de militar de carrera.', 'bloque_id' => 4],
            ['id' => 163, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 78. La condición de militar de
            tropa y marinería se adquiere una vez incorporado al centro docente
            militar correspondiente.', 'bloque_id' => 4],
            ['id' => 164, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 88. Régimen y sistema de
            ascensos.', 'bloque_id' => 4],
            ['id' => 165, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 89. Ascenso a los diferentes
            empleos. El ascenso a cabo mayor se hará por el sistema de concurso.', 'bloque_id' => 4],
            ['id' => 166, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 90. Condiciones para el
            ascenso.', 'bloque_id' => 4],
            ['id' => 167, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 100. Clasificación de los
            destinos.', 'bloque_id' => 4],
            ['id' => 168, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 108. Reglamentariamente se
            determinara el tiempo que podrán permanecer en situación de servicio activo los prisioneros y desaparecidos, teniendo en cuenta lo establecido
            en el Código Penal Militar.', 'bloque_id' => 4],
            ['id' => 169, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 109. Situación de servicios
            especiales.', 'bloque_id' => 4],
            ['id' => 170, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 110. Situación de excedencia.', 'bloque_id' => 4],
            ['id' => 171, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 114. Pase retiro.', 'bloque_id' => 4],
            ['id' => 172, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 116. Con la perdida de la
            condición de militar de carrera se dejara de estar sujeto al régimen
            general de derechos y deberes de los miembros de las FAS y a las leyes
            penales y disciplinarias militares.', 'bloque_id' => 4],
            ['id' => 173, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 117. Renuncia a la condición
            de militar de carrera.', 'bloque_id' => 4],
            ['id' => 174, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 118. Finalización y resolución
            de compromisos de los militares con una relación de servicios
            profesionales de carácter temporal.
            (Señalar la falsa).', 'bloque_id' => 4],
            ['id' => 175, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 120. A los militares
            profesionales que, como resultado de los reconocimientos médicos o de
            las pruebas psicológicas y físicas, se establezcan una incapacidad que
            conlleve una limitación ocupar determinados destinos, se les garantizara
            el principio de igualdad de trato en los destinos a los que puedan
            acceder.', 'bloque_id' => 4],
            ['id' => 176, 'enunciado' => 'Señala la falsa. Régimen disciplinario. Art. 5.', 'bloque_id' => 5],
            ['id' => 177, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 8. Es orden todo
            mandato que un superior militar da a un subordinado.', 'bloque_id' => 5],
            ['id' => 178, 'enunciado' => 'Señala la falsa. Régimen disciplinario. Art. 8. Faltas muy graves.', 'bloque_id' => 5],
            ['id' => 179, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 14. No se hará
            extensivo el abono al tiempo d detención, así como al permanecido en la
            situación de suspensión de funciones, aunque se hubiesen sufrido por
            los mismos hechos y se trate del mismo bien jurídico protegido.', 'bloque_id' => 5],
            ['id' => 180, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 17. La pérdida de
            destino. ¿Cuándo podrá el infractor volver a solicitar nuevo destino en la
            misma Unidad que le sanciono?', 'bloque_id' => 5],
            ['id' => 181, 'enunciado' => 'Régimen disciplinario. Art. 19. La suspensión de empleo, supone la
            privatización de todas las funciones propias del empleo por un periodo…', 'bloque_id' => 5],
            ['id' => 182, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 24. Con
            independencia del previsto en el código penal para el delito de traición,
            será castigado con la pena de prisión de:', 'bloque_id' => 5],
            ['id' => 183, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 27. El militar que,
            con el propósito de atentar contra los medios o recursos de la seguridad o defensa nacionales, cometiere algún de los delitos previstos en los
            artículos 264 a 266 o 346 del Código Penal, será castigado con la pena
            prevista para dichos delitos incrementada en…', 'bloque_id' => 5],
            ['id' => 184, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 30. ¿Quien tiene el
            deber de corregir las infracciones que observe en los de inferior empleo?.', 'bloque_id' => 5],
            ['id' => 185, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 35. El que, en
            situación de conflicto armado, estado de sitio o en el curso de una
            operación internacional coercitiva o de paz, cometiere estos delitos será
            castigado con las penas superiores en grado a las respectivamente
            señaladas en el Código penal.', 'bloque_id' => 5],
            ['id' => 186, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 40.la provocación,
            la conspiración y la proposición para la ejecución de los delitos previstos
            en este Capítulo se castigaran con la pena superior en uno o dos grados
            a la que correspondería a los mismos.', 'bloque_id' => 5],
            ['id' => 187, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 43. El militar que
            (sin incurrir en otros delitos) coacciones, amenace, calumnie o injurie
            gravemente a un superior en su presencia o con publicidad, sería
            castigado con la pena de…', 'bloque_id' => 5],
            ['id' => 188, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 46. El superior que
            maltratare de obra a un subordinado será castigado con la pena de…', 'bloque_id' => 5],
            ['id' => 189, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 49. El militar que
            (que sin incurrir en otro delito)en lugares, a efectos a las Fuerzas Armadas o a las Guardia Civil o en acto de servicio, maltrate de obra a
            otro militar, le trate de manera degradante, inhumana o humillante será
            castigado con la pena de :', 'bloque_id' => 5],
            ['id' => 190, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art 50. El militar que
            (sin incurrir en otros delitos), en lugares afectos a las FAS o a la GC. O en
            acto de servicio, impida o limite arbitrariamente a otro militar el ejercicio
            de los derechos fundamentales, realice actos que supongan grave
            discriminación por origen racial o étnico, será castigado con la pena de…', 'bloque_id' => 5],
            ['id' => 191, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 54. Fuera del caso
            anterior, y en conflicto armado, el militar que por temor a un riesgo
            personal viole el deber militar, cuya naturaleza exija afrontar el peligro y
            superar el miedo, será castigado con la pena de 3 meses a 3 años de
            prisión.', 'bloque_id' => 5],
            ['id' => 192, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 55. El militar que
            sobre asuntos del servicio diere a sabiendas información falsa, será
            castigado con la pena de 6 meses a 4 años de prisión. En situación de
            conflicto armado, será de 3 a 10 años de prisión.', 'bloque_id' => 5],
            ['id' => 193, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 62. En situación de
            conflicto armado, militar con mando de fuerza o unidad que fuere
            sorprendido por el enemigo por no haber tomado las medidas
            preventivas conforme a sus deberes y obligaciones militares o las
            órdenes recibidas, será castigado con la pena de…', 'bloque_id' => 5],
            ['id' => 194, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 71. El militar que,
            en situación de conflicto armado, no pueda auxiliar a una unidad que se
            encuentre en peligro, y no demande con urgencia auxilio ajeno pudiendo
            hacerlo, será castigado con la pena de…', 'bloque_id' => 5],
            ['id' => 195, 'enunciado' => 'Régimen disciplinario. Código Penal Militar. Art. 74. Incurrirá en
            responsabilidad criminal los militares por desobedecer una orden que
            entrañe una infracción manifiesta, clara y terminante de una norma con
            rango de ley.', 'bloque_id' => 5],
            ['id' => 196, 'enunciado' => 'Organización del E.T. ¿Cuál es el órgano del apoyo a la fuerza
            terrestre del E.T. responsable de la dirección, gestión, administración y
            control de los recursos financieros puestos a disposición del E.T. y de la
            contratación y contabilización?', 'bloque_id' => 6],
            ['id' => 197, 'enunciado' => 'Organización del E.T. ¿Cuál de ests dependencias nmose integra
            en el CG del estado mayor de la defensa?', 'bloque_id' => 6],
            ['id' => 198, 'enunciado' => 'Organización del E.T. ¿en qué dos estructuras se configura la
            organización básica de las FAS?', 'bloque_id' => 6],
            ['id' => 199, 'enunciado' => 'Organización del E.T. ¿Cuál de las siguientes forma parte de la
            estructura operativa de las FAS?', 'bloque_id' => 6],
            ['id' => 200, 'enunciado' => 'Organización del E.T. ¿Qué regula las bases de la organización
            militares conforme a los principios constitucionales?', 'bloque_id' => 6],
            ['id' => 201, 'enunciado' => 'Organización del E.T. ¿Cuál de las siguientes forma parte de la
            estructura orgánica de las FAS?', 'bloque_id' => 6],
            ['id' => 202, 'enunciado' => 'Organización del E.T. ¿Qué órganos de asistencia y servicios
            generales se integran en el cuartel general del ET?.', 'bloque_id' => 6],
            ['id' => 203, 'enunciado' => 'Organización del E.T. ¿Cuál de estas dependencias No se integran en
            el cuartel general del ET?', 'bloque_id' => 6],
            ['id' => 204, 'enunciado' => 'Organización del E.T. ¿Cuál de las siguientes forma parte de la
            estructura orgánica de las FAS?', 'bloque_id' => 6],
            ['id' => 205, 'enunciado' => 'Organización del E.T. ¿Cuál de estas dependencias Nose integra
            en el estado Mayor de la defensa?', 'bloque_id' => 6],
            ['id' => 206, 'enunciado' => 'Organización del E.T. ¿Cuál de estas dependencias no se integra
            en el estado Mayor del cuartel general del ET?', 'bloque_id' => 6],
            ['id' => 207, 'enunciado' => 'Organización del E.T. ¿Dónde se encuentra ubicada la división de
            operaciones?', 'bloque_id' => 6],
            ['id' => 208, 'enunciado' => 'Organización del E.T. ¿Cuál de los siguientes forma parte de la
            estructura orgánica de las FAS?', 'bloque_id' => 6],
            ['id' => 209, 'enunciado' => 'Señalar la falsa. Derechos y deberes. LO. 9/2011 ART. 2. ¿A quién es de aplicación
            esta Ley Organica?', 'bloque_id' => 7],
            ['id' => 210, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 4. Principio de igualdad.', 'bloque_id' => 7],
            ['id' => 211, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 5. El militar guardará y hará
            guardar la constitución como norma fundamental del estado.', 'bloque_id' => 7],
            ['id' => 212, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 6. Reglas de comportamiento
            militar.', 'bloque_id' => 7],
            ['id' => 213, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 7. El militar no podrá ejercer
            el derecho de sindicación y, en consecuencia, no podrá fundar ni afiliarse
            a sindicatos no realizar actividades sindicales.', 'bloque_id' => 7],
            ['id' => 214, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 10. Derecho a la intimidad y
            dignidad personal.', 'bloque_id' => 7],
            ['id' => 215, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 11. El militar podrá
            desplazarse libremente por el territorio nacional con prejuicio de las
            limitaciones derivadas de las exigencias del deber de disponibilidad
            permanente a que se refieren el artículo 62.', 'bloque_id' => 7],
            ['id' => 216, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 12. La libertad de expresión y
            de información.', 'bloque_id' => 7],
            ['id' => 217, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 13. El militar podrá ejercer el
            derecho de reunión previsto en la Ley Orgánica 9/1983.', 'bloque_id' => 7],
            ['id' => 218, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 14. Derecho de asociación en
            lo previsto enla ley orgánica 1/2002, de 22 de marzo.', 'bloque_id' => 7],
            ['id' => 219, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 15. Los miembros de las
            Fuerzas Amadas tienen derecho al sufragio activo; lo pueden ejercer de
            conformidad con lo establecido en la legislación sobre Régimen electoral
            general.', 'bloque_id' => 7],
            ['id' => 220, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 16. Derecho de petición.', 'bloque_id' => 7],
            ['id' => 221, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 17. El militar podrá dirigirse
            al Defensor del Pueblo.', 'bloque_id' => 7],
            ['id' => 222, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 18. Los miembros de las
            Fuerzas Armadas tienen derecho al desarrollo de su carrera militas,
            combinando preparación y experiencia profesional, en lo referente al
            régimen de ascensos.', 'bloque_id' => 7],
            ['id' => 223, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 19. Los militares tienen el
            derecho y el deber de participar en las actividades que se desarrollen en
            el ámbito de la enseñanza en las fuerzas armadas.', 'bloque_id' => 7],
            ['id' => 224, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 20. Información, cometidos y
            otros derechos.', 'bloque_id' => 7],
            ['id' => 225, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 21. Deber de reserva.', 'bloque_id' => 7],
            ['id' => 226, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 22. Disponibilidad, horarios,
            permisos y licencias.', 'bloque_id' => 7],
            ['id' => 227, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 23. El militar tiene la
            obligación de comunicar en su unidad el lugar de su domicilio habitual o
            temporal.', 'bloque_id' => 7],
            ['id' => 228, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 24. Uniformidad.', 'bloque_id' => 7],
            ['id' => 229, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 26. Sobre incompatibilidades.
            Los militares están sujetos a lo establecido…', 'bloque_id' => 7],
            ['id' => 230, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 27. Tienen la obligación de
            velar por su propia seguridad y salud en el desempeño de sus cometidos
            y por las de los personas que pueda afectar su actividad.', 'bloque_id' => 7],
            ['id' => 231, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 28. Las iniciativas y quejas el
            jefe de unidad las remitirá a:', 'bloque_id' => 7],
            ['id' => 232, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 29. ¿Quién dictamina las
            normas específicas para la asistencia jurídica de los miembros de las
            Fuerzas Armadas?', 'bloque_id' => 7],
            ['id' => 233, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 30. La protección social
            cubre:', 'bloque_id' => 7],
            ['id' => 234, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 31. El personal militar de
            carrera, los militares profesionales de carácter temporal y alumnos de
            centros docentes militares de formación están integrados en el régimen
            de seguridad social que corresponda.', 'bloque_id' => 7],
            ['id' => 235, 'enunciado' => 'Indica la falsa. Derechos y deberes. LO. 9/2011 ART. 32.', 'bloque_id' => 7],
            ['id' => 236, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 33. Las asociaciones
            profesionales.', 'bloque_id' => 7],
            ['id' => 237, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 41. El ejercicio del derecho
            de asociación profesional se realizara de tal modo que garantice:', 'bloque_id' => 7],
            ['id' => 238, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 46. La participación de las
            asociaciones profesionales de miembros de las fuerzas armadas y su
            interlocución con el Ministerio de Defensa tendrá lugar:', 'bloque_id' => 7],
            ['id' => 239, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 53. Se crea el Observatorio
            de la vida militar como órgano colegiado:', 'bloque_id' => 7],
            ['id' => 240, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 54. De las siguientes
            funciones cual no es una función del observatorio de la vida militar.', 'bloque_id' => 7],
            ['id' => 241, 'enunciado' => 'Derechos y deberes. LO. 9/2011 ART. 55. El observatorio de la vida
            militar estará compuesto por:', 'bloque_id' => 7],
            ['id' => 242, 'enunciado' => 'Iniciativas y quejas. Iniciativas y quejas. LO. 9/2011 ART. 2. La
            reclamación que el militar debe hacerla:', 'bloque_id' => 8],
            ['id' => 243, 'enunciado' => 'Iniciativas y quejas. LO. 9/2011 ART. 3. Las iniciativas y quejas.', 'bloque_id' => 8],
            ['id' => 244, 'enunciado' => 'Iniciativas y quejas. LO. 9/2011 ART. 6. Cuando por el tipo de
            Unidad o por razones de índole operativa no fuera posible designar a un
            suboficial mayor o cabo mayor ¿Quién designara un militar de otro
            empleo?', 'bloque_id' => 8],
            ['id' => 245, 'enunciado' => 'Iniciativas y quejas. LO. 9/2011 ART. 8. El plazo en el que debería
            adoptarse el acuerde será:', 'bloque_id' => 8],
            ['id' => 246, 'enunciado' => 'Iniciativas y quejas. LO. 9/2011 ART. 11. Las quejas se podrán
            presentar por conducto regular haciendo de buen modo.', 'bloque_id' => 8],
            ['id' => 247, 'enunciado' => 'Iniciativas y quejas. LO. 9/2011 ART. 12. ¿Qué tiempo ha de
            transcurrir si no hubiese sido contestada la queja y resuelta para poderla
            presentar directamente con copia a Jefe de Unidad ante el Mando de
            Personal o Jefatura de Personal?', 'bloque_id' => 8],
            ['id' => 248, 'enunciado' => 'Armamentos generales. Los blancos para los ejercicios de tiro
            deben ser:', 'bloque_id' => 9],
            ['id' => 249, 'enunciado' => 'Armamentos generales. En caso de golpes fuertes de caídas el
            arma debe ser inspeccionada por el fabricante o técnico experto en
            armas de fuego.', 'bloque_id' => 9],
            ['id' => 250, 'enunciado' => 'Armamentos generales. Antes del empleo del arma se deberá
            comprobar. El arma esta descargada, se ha retirado el sistema de
            alimentación y esta libre la recamara.', 'bloque_id' => 9],
            ['id' => 251, 'enunciado' => 'Ametralladora MG-42. Cadencia teórica de disparo por minuto.', 'bloque_id' => 9],
            ['id' => 252, 'enunciado' => 'Ametralladora MG-42. ¿Cuál de las siguientes partes no está dentro
            del mecanismo de cierre?', 'bloque_id' => 9],
            ['id' => 253, 'enunciado' => 'Ametralladora MG-42. Interruptor con su muelle forma parte de…', 'bloque_id' => 9],
            ['id' => 254, 'enunciado' => 'Ametralladora MG-42. El sistema de cierres es…
            RI47', 'bloque_id' => 9],
            ['id' => 255, 'enunciado' => 'Ametralladora MG-42. ¿Cuál de las siguientes no forma parte del
            mecanismo de percusión?.', 'bloque_id' => 9],
            ['id' => 256, 'enunciado' => 'Ametralladora MG-42. El alcance máximo del arma es…', 'bloque_id' => 9],
            ['id' => 257, 'enunciado' => 'Ametralladora MG-42. Alcance de tiro máximo.', 'bloque_id' => 9],
            ['id' => 258, 'enunciado' => 'Ametralladora MG-42. ¿Qué elemento no corresponde a la carcasa
            para su estudio?', 'bloque_id' => 9],
            ['id' => 259, 'enunciado' => 'Ametralladora MG-42. El seguro de bloque va alojado en…', 'bloque_id' => 9],
            ['id' => 260, 'enunciado' => 'Ametralladora MG-42. ¿Los cierres de respeto de que peso son?', 'bloque_id' => 9],
            ['id' => 261, 'enunciado' => 'Ametralladora MG-42. La ametralladora MG-42 es un arma ideal
            para tiro por sorpresa.', 'bloque_id' => 9],
            ['id' => 262, 'enunciado' => 'Ametralladora MG-42. El rayado del cañón es:', 'bloque_id' => 9],
            ['id' => 263, 'enunciado' => 'Ametralladora MG-42. Para variar la cadencia de disparo
            utilizamos.', 'bloque_id' => 9],
            ['id' => 264, 'enunciado' => 'Ametralladora MG-42. En caso de no producirse el disparo y si el
            cañón está caliente habrá que esperar unos :', 'bloque_id' => 9],
            ['id' => 265, 'enunciado' => 'Ametralladora MG-42. En el desarmado y armado de la MG-42 para
            quitar la tapa del cajón de los mecanismos habrá que colocarla formando
            un ángulo de.', 'bloque_id' => 9],
            ['id' => 266, 'enunciado' => 'Ametralladora MG-42. ¿Cuál de los siguientes va unido y en su
            extremo anterior va unido al balancín?', 'bloque_id' => 9],
            ['id' => 267, 'enunciado' => 'Ametralladora MG-42. El extractor, rodillos de bloqueo, porta
            percutor y percutor forman parte de…', 'bloque_id' => 9],
            ['id' => 268, 'enunciado' => 'Ametralladora MG-42. La ametralladora MG-42 es un arma ideal
            para todo por sorpresa.', 'bloque_id' => 9],
            ['id' => 269, 'enunciado' => 'Ametralladora MG-42. El sector graduado del trípode de la MG-42
            va desde…', 'bloque_id' => 9],
            ['id' => 270, 'enunciado' => 'Ametralladora MG-42. Si decimos que es cilíndrica envolviendo la
            boca del cañón hablamos.', 'bloque_id' => 9],
            ['id' => 271, 'enunciado' => 'Ametralladora MG-42. La ametralladora MG-42 con trípode se
            convierte en…', 'bloque_id' => 9],
            ['id' => 272, 'enunciado' => 'Ametralladora MG-4 E.T. Descripción resumida de la ametralladora
            ligera MG-4 ET.', 'bloque_id' => 9],
            ['id' => 273, 'enunciado' => 'Ametralladora MG-4 E.T. Descripción resumida de la ametralladora
            ligera MG-4 ET.', 'bloque_id' => 9],
            ['id' => 274, 'enunciado' => 'Ametralladora MG-4 E.T. El arma permite el disparo en ráfagas
            largas y cortas a blancos a una distancia de hasta.', 'bloque_id' => 9],
            ['id' => 275, 'enunciado' => 'Ametralladora MG-4 E.T. La MG-4 es un arma completamente
            automática.', 'bloque_id' => 9],
            ['id' => 276, 'enunciado' => 'Ametralladora MG-4 E.T. Posee un alza para distancias al blanco u
            objetivo de 100 metros.', 'bloque_id' => 9],
            ['id' => 277, 'enunciado' => 'Ametralladora MG-4 E.T. La bolsa de transporte de cintas es de:', 'bloque_id' => 9],
            ['id' => 278, 'enunciado' => 'Ametralladora MG-4 E.T. El canal de guía para el cierre se
            encuentra:', 'bloque_id' => 9],
            ['id' => 279, 'enunciado' => 'Ametralladora MG-4 E.T. El seguro se puede accionar:', 'bloque_id' => 9],
            ['id' => 280, 'enunciado' => 'Ametralladora MG-4 E.T. Descripción resumida de la ametralladora
            ligera MG-4 ET. Los elementos de seguridad están integrados en…', 'bloque_id' => 9],
            ['id' => 281, 'enunciado' => 'Ametralladora MG-4 E.T. El cañón debe ser sustituido o enfriado,
            después de un tiro a ráfagas continuas en secuencia rápida de unos:', 'bloque_id' => 9],
            ['id' => 282, 'enunciado' => 'Ametralladora MG-4 E.T. El indicador de carga muestra:', 'bloque_id' => 9],
            ['id' => 283, 'enunciado' => 'Ametralladora MG-4 E.T. El sistema de cierre es de:', 'bloque_id' => 9],
            ['id' => 284, 'enunciado' => 'Ametralladora MG-4 E.T. Cuando exista una insuficiente presión
            de gas del cartucho (fallo de munición), o cuando el arma no ha sido
            rearmada del todo, el soporte del cierre queda retenido en:', 'bloque_id' => 9],
            ['id' => 285, 'enunciado' => 'Ametralladora MG-4 E.T. Es posible la utilización de salvas.', 'bloque_id' => 9],
            ['id' => 286, 'enunciado' => 'Ametralladora MG-4 E.T. El bloque de toma de gases con casquillo
            de propulsión se encuentra en:', 'bloque_id' => 9],
            ['id' => 287, 'enunciado' => 'Ametralladora MG-4 E.T. Normas de seguridad para el uso del visor
            Trijicon en la ametralladora ligera MG-4ET.', 'bloque_id' => 9],
            ['id' => 288, 'enunciado' => 'Granada Alambra. La envuelta de fragmentación contiene unas:', 'bloque_id' => 9],
            ['id' => 289, 'enunciado' => 'Granada Alambra. Descripción.', 'bloque_id' => 9],
            ['id' => 290, 'enunciado' => 'Granada Alambra. ¿Cual no corresponde a los elementos interiores
            de seguridad?', 'bloque_id' => 9],
            ['id' => 291, 'enunciado' => 'Granada Alambra. Definición de granada de mano.', 'bloque_id' => 9],
            ['id' => 292, 'enunciado' => 'Granada Alambra. El retardo de seguridad de lanzamiento que
            inhabilita el paso de energía disponible al detonadores de:', 'bloque_id' => 9],
            ['id' => 293, 'enunciado' => 'Granada Alambra. ¿Cual no es una característica principal de la
            granada?', 'bloque_id' => 9],
            ['id' => 294, 'enunciado' => 'Granada Alambra. En la granada de mano si el radio de acción es
            muy inferior al de alcance es:', 'bloque_id' => 9],
            ['id' => 295, 'enunciado' => 'Granada Alambra. La espoleta de la granada de mano Alhambra D/
            O es la denominada.', 'bloque_id' => 9],
            ['id' => 296, 'enunciado' => 'Granada Alambra. La granada de mano tiene un peso de:', 'bloque_id' => 9],
            ['id' => 297, 'enunciado' => 'Granada Alambra. Radio letal de la granada de mano Alhambra es
            de:', 'bloque_id' => 9],
            ['id' => 298, 'enunciado' => 'Granada Alambra. Partes de las que se componen las granadas de
            mano.', 'bloque_id' => 9],
            ['id' => 299, 'enunciado' => 'Granada Alambra. Las bolas de acero que se encuentran en la
            envuelta de fragmentación, tiene un diámetro de :', 'bloque_id' => 9],
            ['id' => 300, 'enunciado' => 'Granada Alambra. Una de las características de la granada de
            mano se usada por.', 'bloque_id' => 9],
            ['id' => 301, 'enunciado' => 'Granada Alambra. Clasificación de las granadas de mano:', 'bloque_id' => 9],
            ['id' => 302, 'enunciado' => 'Granada Alambra. Espoleta de la granada de mano Alhambra.', 'bloque_id' => 9],
            ['id' => 303, 'enunciado' => 'Granada Alambra. Una vez que la granada de mano abandona la
            mano del lanzador, se produce la explosión de la granada de mano a los:', 'bloque_id' => 9],
            ['id' => 304, 'enunciado' => 'Granada Alambra. Todos y cada uno de los elementos de la
            granada de mano Alhambra tiene una vida útil superiora:', 'bloque_id' => 9],
            ['id' => 305, 'enunciado' => 'Pistola USP compact. Pistola USP Compact. Longitud de mira.', 'bloque_id' => 9],
            ['id' => 306, 'enunciado' => 'Pistola USP Compact. Partes del cañón.', 'bloque_id' => 9],
            ['id' => 307, 'enunciado' => 'Pistola USP Compact. Total de seguros activos y pasivos .', 'bloque_id' => 9],
            ['id' => 308, 'enunciado' => 'Pistola USP Compact. El armazón está fabricado en ________
            mediante inyección en un molde, de una mezcla de plástico _________ y
            fibra de vidrio.', 'bloque_id' => 9],
            ['id' => 309, 'enunciado' => 'Pistola USP Compact. Seguros activos.', 'bloque_id' => 9],
            ['id' => 310, 'enunciado' => 'Pistola USP Compact. Alcance eficaz.', 'bloque_id' => 9],
            ['id' => 311, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            pistola USP.', 'bloque_id' => 9],
            ['id' => 312, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 313, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 314, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 315, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 316, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 317, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 318, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 319, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 320, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 321, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 322, 'enunciado' => 'Pistola USP Compact. Características generales y técnicas de la
            Pistola USP Compact.', 'bloque_id' => 9],
            ['id' => 323, 'enunciado' => 'Pistola USP compact. ¿Cuál de estos no es un sistema de
            seguridad de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 324, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes se considera un sistema
            de seguridad pasivo de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 325, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes se considera un
            sistema de seguridad activo de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 326, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes componentes no
            forma parte del armazón de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 327, 'enunciado' => 'Pistola USP compact. ¿Qué longitud tiene el cañón de la pistola
            USP COMPACT?', 'bloque_id' => 9],
            ['id' => 328, 'enunciado' => 'Pistola USP compact. ¿Qué modo de disparo se produce con una
            mayor presión sobre el disparador y el martillo en la posición de desamartillado
            de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 329, 'enunciado' => 'Pistola USP compact. ¿Qué tipo de arma es la pistola USP
            COMPACT?', 'bloque_id' => 9],
            ['id' => 330, 'enunciado' => 'Pistola USP compact. ¿Cuál es el alcance eficaz de la pistola USP
            COMPACT?', 'bloque_id' => 9],
            ['id' => 331, 'enunciado' => 'Pistola USP compact. ¿Qué anchura tiene la empuñadura con palanca
            de seguro de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 332, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes componentes forma
            parte del recuperador amortiguador de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 333, 'enunciado' => 'Pistola USP compact. ¿Cuánto es el cargador vacío de la pistola
            USP COMPACT?', 'bloque_id' => 9],
            ['id' => 334, 'enunciado' => 'Pistola USP compact. ¿Cómo se el ánima del cañón de la pistola
            USP COMPACT?.', 'bloque_id' => 9],
            ['id' => 335, 'enunciado' => 'Pistola USP compact. ¿Cuál es la presión de prueba en recámara
            de la pistola USP COMPACT?.', 'bloque_id' => 9],
            ['id' => 336, 'enunciado' => 'Pistola USP compact. ¿Qué autonomía tiene la pistola USP
            COMPACT?', 'bloque_id' => 9],
            ['id' => 337, 'enunciado' => 'Pistola USP compact. ¿Cuánto pesa son cargador la pistola USP
            COMPACT?', 'bloque_id' => 9],
            ['id' => 338, 'enunciado' => 'Pistola USP compact. ¿Cuál es el calibre de la pistola USP
            COMPACT?', 'bloque_id' => 9],
            ['id' => 339, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes no es un indicador
            de seguridad de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 340, 'enunciado' => 'Pistola USP compact. ¿Qué longitud tiene la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 341, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes componentes forma
            parte del cañón da la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 342, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes componentes no
            forma parte del armazón de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 343, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes mecanismos no
            forma parte de la corredera?', 'bloque_id' => 9],
            ['id' => 344, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes mecanismos no
            forma parte de la corredera de la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 345, 'enunciado' => 'Pistola USP compact. ¿Cuál de los siguientes no es un indicador de
            seguridad en la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 346, 'enunciado' => 'Pistola USP compact. ¿Qué altura tiene la pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 347, 'enunciado' => 'Pistola USP compact. ¿Qué anchura tiene la corredera de la pistola
            USP COMPACT?', 'bloque_id' => 9],
            ['id' => 348, 'enunciado' => 'Pistola USP compact. ¿Cuál es la velocidad inicial de la pistola
            USP COMPACT?', 'bloque_id' => 9],
            ['id' => 349, 'enunciado' => 'Pistola USP compact. ¿Cuál es la capacidad del cargador de la pistola
            USP COMPACT?', 'bloque_id' => 9],
            ['id' => 350, 'enunciado' => 'Pistola USP compact. ¿Cuáles son los modos de disparo de la
            pistola USP COMPACT?', 'bloque_id' => 9],
            ['id' => 351, 'enunciado' => 'Pistola USP compact. ¿Qué tipo de acerrojamiento tiene la pistola
            USPCOMPACT?', 'bloque_id' => 9],
            ['id' => 352, 'enunciado' => 'Teoría del tiro. Balística.', 'bloque_id' => 10],
            ['id' => 353, 'enunciado' => 'Teoría del tiro. Balística interior.', 'bloque_id' => 10],
            ['id' => 354, 'enunciado' => 'Teoría del tiro. Proyectiles macizos y de pequeño calibre o balas:', 'bloque_id' => 10],
            ['id' => 355, 'enunciado' => 'Teoría del tiro. Cartucho de arma ligera.', 'bloque_id' => 10],
            ['id' => 356, 'enunciado' => 'Teoría del tiro. Proyectiles huecos y con cara explosiva internas
            granadas.', 'bloque_id' => 10],
            ['id' => 357, 'enunciado' => 'Teoría del tiro. ¿Cuál de los siguientes o pertenece a la 4ª
            categoría?', 'bloque_id' => 10],
            ['id' => 358, 'enunciado' => 'Teoría del tiro. ¿Qué dos partes distinguiremos principalmente en
            los cartuchos de armas ligeras?', 'bloque_id' => 10],
            ['id' => 359, 'enunciado' => 'Teoría del tiro. ¿Cuál es la línea de proyección?', 'bloque_id' => 10],
            ['id' => 360, 'enunciado' => 'Teoría del tiro. El alcance máximo es:', 'bloque_id' => 10],
            ['id' => 361, 'enunciado' => 'Teoría del tiro. De las siguientes cual no es una clasificación del
            tipo de granada:', 'bloque_id' => 10],
            ['id' => 362, 'enunciado' => 'Teoría del tiro. Angulo de elevación es:', 'bloque_id' => 10],
            ['id' => 363, 'enunciado' => 'Teoría del tiro. Según el ángulo de tiro podemos hacer tiro tenso,
            tiro curvo, tiro vertical.', 'bloque_id' => 10],
            ['id' => 364, 'enunciado' => 'Teoría del tiro. El ángulo de proyección es:', 'bloque_id' => 10],
            ['id' => 365, 'enunciado' => 'Teoría del tiro. Cuando hablamos del rendimiento nos referimos a :', 'bloque_id' => 10],
            ['id' => 366, 'enunciado' => 'Teoría del tiro. Según el terreno sobre el que se tira puede ser:', 'bloque_id' => 10],
            ['id' => 367, 'enunciado' => 'Teoría del tiro. Según el mecanismo de tiro puede ser :', 'bloque_id' => 10],
            ['id' => 368, 'enunciado' => 'Teoría del tiro. Hablamos de tiro preciso cuando se produce:', 'bloque_id' => 10],
            ['id' => 369, 'enunciado' => 'Teoría del tiro. Hablamos de tiro preciso cuando se produce:', 'bloque_id' => 10],
            ['id' => 370, 'enunciado' => 'Transmisiones. PNR-500. La potencia transmitida es de:', 'bloque_id' => 11],
            ['id' => 371, 'enunciado' => 'Transmisiones. PNR-500. ¿Qué tecla debemos pulsar para borrar
            las claves de la PNR-500?', 'bloque_id' => 11],
            ['id' => 372, 'enunciado' => 'Transmisiones. PNR-500. El radio teléfono PNR-500, permite
            escuchar y habla a la vez, FULL DUPLEX.', 'bloque_id' => 11],
            ['id' => 373, 'enunciado' => 'Transmisiones. PNR-500. Es una radio para:', 'bloque_id' => 11],
            ['id' => 374, 'enunciado' => 'Transmisiones. PNR-500. La tecla FCTN sirve para:', 'bloque_id' => 11],
            ['id' => 375, 'enunciado' => 'Transmisiones. PNR-500. Pulsando la tecla FCTN que no podemos
            modificar.', 'bloque_id' => 11],
            ['id' => 376, 'enunciado' => 'Transmisiones. PNR-500. El modo VOX que opción nos da.', 'bloque_id' => 11],
            ['id' => 377, 'enunciado' => 'Transmisiones. PNR-500. ¿Cuántos minutos le quedan
            aproximadamente de funcionamiento a la PNR-500 cuando indica
            BATERIA DEBIL?', 'bloque_id' => 11],
            ['id' => 378, 'enunciado' => 'Transmisiones. PNR-500. Para averiguar el canal que tiene activado
            la radio que tecla debemos pulsar.', 'bloque_id' => 11],
            ['id' => 379, 'enunciado' => 'Transmisiones. PNR-500. ¿Qué tecla debemos pulsar para cambiar
            el puesto táctico?', 'bloque_id' => 11],
            ['id' => 380, 'enunciado' => 'Transmisiones. PNR-500. La duración de las baterías
            aproximadamente es de:', 'bloque_id' => 11],
            ['id' => 381, 'enunciado' => 'Transmisiones. PNR-500. De los siguientes elementos cual no
            corresponde a los componentes del equipo.', 'bloque_id' => 11],
            ['id' => 382, 'enunciado' => 'Transmisiones. PR4G. Que no forma parte del RT-9200.', 'bloque_id' => 11],
            ['id' => 383, 'enunciado' => 'Transmisiones. PR4G. en la PR4G, en el conmutador de encendido
            y selección de potencia, ¿Qué posición no existe?', 'bloque_id' => 11],
            ['id' => 384, 'enunciado' => 'Transmisiones. PR4G. ¿Cuántas posiciones tiene el conmutador de
            volumen?', 'bloque_id' => 11],
            ['id' => 385, 'enunciado' => 'Transmisiones. PR4G. ¿Qué precaución no corresponde a las que
            debemos de tener en su manejo para un mejor rendimiento y evitar
            averías?', 'bloque_id' => 11],
            ['id' => 386, 'enunciado' => 'Transmisiones. PR4G. ¿Cuántas posiciones tiene de volumen?', 'bloque_id' => 11],
            ['id' => 387, 'enunciado' => 'Transmisiones. PR4G. ¿Qué diferencias físicas y mecánicas RT-
            9200/RT-9210?', 'bloque_id' => 11],
            ['id' => 388, 'enunciado' => 'Transmisiones. TP-6N. ¿Cuál de los siguientes elementos no
            pertenece a la composición del equipo TP-6N?', 'bloque_id' => 11],
            ['id' => 389, 'enunciado' => 'Transmisiones. TP-6N. El indicador luminoso de llamadas, ¿Qué
            otra función tiene?', 'bloque_id' => 11],
            ['id' => 390, 'enunciado' => 'Transmisiones. TP-6N. En la comprobación de líneas el indicador
            debe encenderse en una línea en condiciones normales…', 'bloque_id' => 11],
            ['id' => 391, 'enunciado' => 'Transmisiones. Redes de trabajo.', 'bloque_id' => 11],
            ['id' => 392, 'enunciado' => 'Transmisiones. Cuál de las siguientes no es una regla básica de
            seguridad de las transmisiones.', 'bloque_id' => 11],
            ['id' => 393, 'enunciado' => 'Transmisiones. ¿Qué es una malla?', 'bloque_id' => 11],
            ['id' => 394, 'enunciado' => 'Transmisiones. Conocimientos básicos para transmitir.', 'bloque_id' => 11],
            ['id' => 395, 'enunciado' => 'Transmisiones. Alfabeto internacional V.', 'bloque_id' => 11],
            ['id' => 396, 'enunciado' => 'Transmisiones. Alfabeto fonético internacional.', 'bloque_id' => 11],
            ['id' => 397, 'enunciado' => 'Transmisiones. El grupo de fecha y hora está formado por:', 'bloque_id' => 11],
            ['id' => 398, 'enunciado' => 'Transmisiones. IBT.', 'bloque_id' => 11],
            ['id' => 399, 'enunciado' => 'Instrucción de combate. A la obra que para periodos largos de
            tiempo proporciona seguridad, comodidad y un empleo eficaz de
            nuestras armas hablamos de :', 'bloque_id' => 12],
            ['id' => 400, 'enunciado' => 'Instrucción de combate. ¿Cómo paliaremos los efectos de la rotura
            del ciclo circadiano?', 'bloque_id' => 12],
            ['id' => 401, 'enunciado' => 'Instrucción de combate. Para una buena elección del puesto de
            observación que condición no debe reunir.Instrucción de combate. Para una buena elección del puesto de
            observación que condición no debe reunir.', 'bloque_id' => 12],
            ['id' => 402, 'enunciado' => 'Instrucción de combate. Modificar el aspecto de los medios
            propios de tal forma que confundan con el aspecto del terreno es una
            definición de:', 'bloque_id' => 12],
            ['id' => 403, 'enunciado' => 'Instrucción de combate. Los centinelas pueden ser:', 'bloque_id' => 12],
            ['id' => 404, 'enunciado' => 'Instrucción de combate. ¿Cuántos niveles de luminosidad existen?', 'bloque_id' => 12],
            ['id' => 405, 'enunciado' => 'Instrucción de combate. La posición debe ser perfeccionada y
            enmascarada.', 'bloque_id' => 12],
            ['id' => 406, 'enunciado' => 'Instrucción de combate. ¿Cuál de las siguientes no es una misión
            principal del observador?', 'bloque_id' => 12],
            ['id' => 407, 'enunciado' => 'Instrucción de combate. El avance colectivo es el fundamento de la
            actuación del combatiente en el campo de batalla.', 'bloque_id' => 12],
            ['id' => 408, 'enunciado' => 'Instrucción de combate. Aparte de los medios disponibles la
            observación depende de la meteorología y el enemigo.', 'bloque_id' => 12],
            ['id' => 409, 'enunciado' => 'Instrucción de combate. Si decimos que los contornos se
            distinguen hasta 20mts. De distancia. ¿Qué nivel de luminosidad
            hablamos?', 'bloque_id' => 12],
            ['id' => 410, 'enunciado' => 'Instrucción de combate. Sumideros de agua, sumideros de
            granadas y cubierta de techo son partes de:', 'bloque_id' => 12],
            ['id' => 411, 'enunciado' => 'Instrucción de combate. ¿Qué niveles imposibilitan la observación
            y dificultan el movimiento y tiro?', 'bloque_id' => 12],
            ['id' => 412, 'enunciado' => 'Instrucción de combate. Indique la falsa sobre la transmisión de
            ordenes en el combate nocturno:', 'bloque_id' => 12],
            ['id' => 413, 'enunciado' => 'Instrucción de combate. ¿Cuál de las siguientes no es una
            modalidad de fuego de tiro de artillería?', 'bloque_id' => 12],
            ['id' => 414, 'enunciado' => 'Instrucción de combate. Generalidades de la instrucción individual
            del combatiente:', 'bloque_id' => 12],
            ['id' => 415, 'enunciado' => 'Instrucción de combate. En tiempo de paz, ¿Se puede cortar algún
            tipo de vegetación por respeto al medio ambiente?', 'bloque_id' => 12],
            ['id' => 416, 'enunciado' => 'Señala la falsa. Instrucción de combate. El enmascaramiento debe ser:', 'bloque_id' => 12],
            ['id' => 417, 'enunciado' => 'Instrucción de combate. ¿Cuánto aproximadamente se tarda en
            adaptarse a la oscuridad si se sale de un lugar iluminado?', 'bloque_id' => 12],
            ['id' => 418, 'enunciado' => 'Instrucción de combate. El enmascaramiento:', 'bloque_id' => 12],
            ['id' => 419, 'enunciado' => 'Instrucción de combate. Ante un alarma aérea, que es lo primero
            que debemos de hacer.', 'bloque_id' => 12],
            ['id' => 420, 'enunciado' => 'Instrucción de combate. En la preparación para el avance cual no
            es un factor.', 'bloque_id' => 12],
            ['id' => 421, 'enunciado' => 'Instrucción de combate. La protección más eficaz se consigue
            conjugando.', 'bloque_id' => 12],
            ['id' => 422, 'enunciado' => 'Instrucción de combate. ¿Cual no es una clase de
            estacionamiento?', 'bloque_id' => 12],
            ['id' => 423, 'enunciado' => 'Instrucción de combate. La observación para que sea eficaz como
            no debe ser:', 'bloque_id' => 12],
            ['id' => 424, 'enunciado' => 'Instrucción de combate. Si hablamos de interponer una masa
            cubridora entre el enemigo y nosotros nos referimos a:', 'bloque_id' => 12],
            ['id' => 425, 'enunciado' => 'Instrucción de combate. Indique la falsa sobre la transmisión de
            ordenes en el combate nocturno:', 'bloque_id' => 12],
            ['id' => 426, 'enunciado' => 'Instrucción de combate. En la ejecución del salto debemos que
            correr por el camino más corto siempre en Zigzag.', 'bloque_id' => 12],
            ['id' => 427, 'enunciado' => 'Instrucción de combate. Para una buena elección de puesto de
            observación, que condición no debe de reunir.', 'bloque_id' => 12],
            ['id' => 428, 'enunciado' => 'Instrucción de combate. La siguiente definición a que condición se
            refiere: el obstáculo o accidente debe ocultarnos o protegernos
            totalmente.', 'bloque_id' => 12],
            ['id' => 429, 'enunciado' => 'Instrucción de combate. Para realizar la vigilancia, cual es el orden
            a seguir.', 'bloque_id' => 12],
            ['id' => 430, 'enunciado' => 'Instrucción de combate. Cuál de las siguientes no pertenece a una
            de las características del enmascaramiento.', 'bloque_id' => 12],
            ['id' => 431, 'enunciado' => 'Instrucción de combate. En la identificación de los medios
            nocturnos, cual no pertenece:', 'bloque_id' => 12],
            ['id' => 432, 'enunciado' => 'Instrucción de combate. Cuando se prevea una utilización
            inmediata o se detecte el uso de armas NBQ a que situación nos
            referimos a:', 'bloque_id' => 12],
            ['id' => 433, 'enunciado' => 'Instrucción de combate. ¿Cuál no es una característica del
            combate nocturno?', 'bloque_id' => 12],
            ['id' => 434, 'enunciado' => 'Instrucción de combate. ¿Cuál de las siguientes condiciones no es
            requisito para un campo de tiro adecuado?', 'bloque_id' => 12],
            ['id' => 435, 'enunciado' => 'Instrucción de combate. Para la realización de la observación
            nocturna que no debemos hacer:', 'bloque_id' => 12],
            ['id' => 436, 'enunciado' => 'Instrucción de combate. Aparte de los medios disponibles la
            observación depende de la meteorología y el enemigo.', 'bloque_id' => 12],
            ['id' => 437, 'enunciado' => 'Instrucción de combate. Cuando una marcha exceda de las 6 horas
            se concederá un alto.', 'bloque_id' => 12],
            ['id' => 438, 'enunciado' => 'Instrucción de combate. Si la luna esta en cuarto menguante su
            forma será.', 'bloque_id' => 12],
            ['id' => 439, 'enunciado' => 'Instrucción de combate. Utilización del terreno para ocultarse.', 'bloque_id' => 12],
            ['id' => 440, 'enunciado' => 'Instrucción de combate. De las siguientes características no
            pertenece a la organización del terreno.', 'bloque_id' => 12],
            ['id' => 441, 'enunciado' => 'Instrucción NBQ. El filtro no ofrece protección contra el amoniaco:', 'bloque_id' => 13],
            ['id' => 442, 'enunciado' => 'Instrucción NBQ. El filtro se cambiara:', 'bloque_id' => 13],
            ['id' => 443, 'enunciado' => 'Instrucción NBQ. Para quitarnos el uniforme, el orden primero es:', 'bloque_id' => 13],
            ['id' => 444, 'enunciado' => 'Instrucción NBQ. En la posición de alarma debe de ir la máscara
            puesta y el uniforme totalmente colocado y ajustado:', 'bloque_id' => 13],
            ['id' => 445, 'enunciado' => 'Instrucción NBQ. En los auto-inyectables de campaña, la
            disolución que contiene es:', 'bloque_id' => 13],
            ['id' => 446, 'enunciado' => 'Instrucción NBQ. La máscara viene con 3 cartuchos filtrantes.', 'bloque_id' => 13],
            ['id' => 447, 'enunciado' => 'Instrucción NBQ. EL orden riguroso de ponerse el uniforme…', 'bloque_id' => 13],
            ['id' => 448, 'enunciado' => 'Instrucción NBQ. En la utilización en el papel detector de agresivos
            neurotóxicos, el color anaranjado indica:', 'bloque_id' => 13],
            ['id' => 449, 'enunciado' => 'Instrucción NBQ. ¿Cuál es el 1º efecto de una explosión nuclear?', 'bloque_id' => 13],
            ['id' => 450, 'enunciado' => 'Instrucción NBQ. El sonido ininterrumpido de la sirena , indica:', 'bloque_id' => 13],
            ['id' => 451, 'enunciado' => 'Instrucción NBQ. ¿Cual de las siguientes no es un elemento de la
            detección?', 'bloque_id' => 13],
            ['id' => 452, 'enunciado' => 'Instrucción NBQ. Si la mascara esta en el cuello colgada se dice
            que esta en la posición de:', 'bloque_id' => 13],
            ['id' => 453, 'enunciado' => 'Instrucción NBQ. En un ataque con agente biológicos la via de
            entrada mas importante y la que causa las enfermedades mas graves es:', 'bloque_id' => 13],
            ['id' => 454, 'enunciado' => 'Instrucción NBQ. En los efectos de una explosión nuiclear, cual no
            es un efectode dicha explosión.', 'bloque_id' => 13],
            ['id' => 455, 'enunciado' => 'Instrucción NBQ. En la composición del Equipo de protección
            individual ¿Cuántos auto inyectables de atropina existen?', 'bloque_id' => 13],
            ['id' => 456, 'enunciado' => 'Instrucción NBQ. En la composición del Equipo de Protección
            Individual, ¿Cuántos envases de axiomas existen?', 'bloque_id' => 13],
            ['id' => 457, 'enunciado' => 'Instrucción NBQ. El filtro se cambiara:', 'bloque_id' => 13],
            ['id' => 458, 'enunciado' => 'Escuadra/equipo. Formaciones de la escuadra de fusiles. Fila o
            guerrilla es apta para…', 'bloque_id' => 14],
            ['id' => 459, 'enunciado' => 'Señala la falsa. Escuadra/equipo. La escuadra se mueve en…', 'bloque_id' => 14],
            ['id' => 460, 'enunciado' => 'Escuadra/equipo. En orden de marcha.', 'bloque_id' => 14],
            ['id' => 461, 'enunciado' => 'Escuadra/equipo. ¿Cuál no es un desplazamiento de la escuadra
            de fusiles?', 'bloque_id' => 14],
            ['id' => 462, 'enunciado' => 'Señala la falsa. Escuadra/equipo. El tipo de reconocimiento que puede realizar una
            escuadra/equipo es:', 'bloque_id' => 14],
            ['id' => 463, 'enunciado' => 'Escuadra/equipo. ¿Cuál no es una característica de la escuadra?', 'bloque_id' => 14],
            ['id' => 464, 'enunciado' => 'Escuadra/equipo. Las formaciones de la escuadra de fusiles es la
            Hilera, Fila y la Columna.', 'bloque_id' => 14],
            ['id' => 465, 'enunciado' => 'Escuadra/equipo. La zona mas probable es que se emplee el orden
            de combate desde que se abandona:', 'bloque_id' => 14],
            ['id' => 466, 'enunciado' => 'Señala la falsa. Escuadra/equipo. Las características de una escuadra.', 'bloque_id' => 14],
            ['id' => 467, 'enunciado' => 'Escuadra/equipo. Mjisiones del jefe de esquadra:', 'bloque_id' => 14],
            ['id' => 468, 'enunciado' => 'Escuadra/equipo. La unidad elemental de la infantería es:', 'bloque_id' => 14],
            ['id' => 469, 'enunciado' => 'Escuadra/equipo. Formaciones de la escuadra de fusiles. Hilera es
            apta para …', 'bloque_id' => 14],
            ['id' => 470, 'enunciado' => 'Escuadra/equipo. Formaciones de la escuadra de fusiles. La fila o
            guerrilla es apta para…', 'bloque_id' => 14],
            ['id' => 471, 'enunciado' => 'Escuadra/equipo. En el reconocimiento de un punto el grupo de
            mando y enlace normalmente se estará próximo al grupo de:', 'bloque_id' => 14],
            ['id' => 472, 'enunciado' => 'Topografía. Que dato debemos de actualizar para hablar la
            declinación UTM exactamente.', 'bloque_id' => 15],
            ['id' => 473, 'enunciado' => 'Topografía. Rumbo inverso.', 'bloque_id' => 15],
            ['id' => 474, 'enunciado' => 'Topografía. Mogote.', 'bloque_id' => 15],
            ['id' => 475, 'enunciado' => 'Topografía. Las coordenadas polares corresponde a :', 'bloque_id' => 15],
            ['id' => 476, 'enunciado' => 'Topografía. Orientar un mapa consiste en:', 'bloque_id' => 15],
            ['id' => 477, 'enunciado' => 'Topografía. Señale la mejor definición de Topografía.', 'bloque_id' => 15],
            ['id' => 478, 'enunciado' => 'Topografía. Definición de Mapa.', 'bloque_id' => 15],
            ['id' => 479, 'enunciado' => 'Topografía. Representación de las curvas de nivel.', 'bloque_id' => 15],
            ['id' => 480, 'enunciado' => 'Topografía. Formas topográficas simples.Topografía. Formas topográficas simples.', 'bloque_id' => 15],
            ['id' => 481, 'enunciado' => 'Topografía. Que datos debemos actualizar para hallar la
            declinación UTM exactamente.', 'bloque_id' => 15],
            ['id' => 482, 'enunciado' => 'Topografía. Para la localización de un punto dadas sus
            coordenadas, el segundo grupo de números corresponde a :', 'bloque_id' => 15],
            ['id' => 483, 'enunciado' => 'Topografía. Rumbo es:', 'bloque_id' => 15],
            ['id' => 484, 'enunciado' => 'Topografía. La declinación UTM en un punto es el ángulo que
            forman en dicho punto el Norte Magnético y el Norte Cuadricula:', 'bloque_id' => 15],
            ['id' => 485, 'enunciado' => 'Topografía. Las coordenadas se dan poniendo en primer lugar:', 'bloque_id' => 15],
            ['id' => 486, 'enunciado' => 'Topografía. El eje de Abcisas se refiere al eje:', 'bloque_id' => 15],
            ['id' => 487, 'enunciado' => 'Topografía. Para la determinación de la Altitud de un punto del
            mapa, debemos localizar:', 'bloque_id' => 15],
            ['id' => 488, 'enunciado' => 'Topografía. Orientar un mapa consiste en :', 'bloque_id' => 15],
            ['id' => 489, 'enunciado' => 'Topografía. La estrella polar se encuentra entre.', 'bloque_id' => 15],
            ['id' => 490, 'enunciado' => 'Topografía. En los sistemas de medición angular. ¿cual no es un
            sistema de división?', 'bloque_id' => 15],
            ['id' => 491, 'enunciado' => 'Topografía. Las Coordenadas polares corresponden a:', 'bloque_id' => 15],
            ['id' => 492, 'enunciado' => 'Topografía. 68º78m 45s, se corresponde al sistema:', 'bloque_id' => 15],
            ['id' => 493, 'enunciado' => 'Topografía. Orientar un Mapa es colocarlo de tal modo que las
            líneas que forman los accidentes en el representados coincidan a sus
            homologas en el terreno', 'bloque_id' => 15],
            ['id' => 494, 'enunciado' => 'Topografía. Las coordenadas polares corresponden a:', 'bloque_id' => 15],
        ]);
    }
}
