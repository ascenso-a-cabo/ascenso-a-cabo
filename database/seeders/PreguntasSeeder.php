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
            ['id' => 62, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 1. La seguridad en las FAS…', 'tema_id' => 2],
            ['id' => 63, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 2. Definiciones. A efectos de estas
            normas:', 'tema_id' => 2],
            ['id' => 64, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 3. Ámbito de aplicación. ¿Qué
            seguridad NO se rige por su propia normativa?', 'tema_id' => 2],
            ['id' => 65, 'enunciado' => 'Señalar la falsa. Seguridad en las FAS. RD.194/2010. ART. 4. La seguridad en las FAS…', 'tema_id' => 2],
            ['id' => 66, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 5. Zonas de seguridad exterior de las
            unidades…', 'tema_id' => 2],
            ['id' => 67, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 5. Zonas de seguridad exterior de las
            unidades.', 'tema_id' => 2],
            ['id' => 68, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 6. Seguridad en el interior de las
            unidades…', 'tema_id' => 2],
            ['id' => 69, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 6. Seguridad en el interior de las
            unidades.', 'tema_id' => 2],
            ['id' => 70, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 7. Responsable de la seguridad…', 'tema_id' => 2],
            ['id' => 71, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 7. Responsable de la seguridad cuando
            en una base se alojen varias unidades…', 'tema_id' => 2],
            ['id' => 72, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 7. Responsable de la seguridad…', 'tema_id' => 2],
            ['id' => 73, 'enunciado' => 'Completa la pregunta. Seguridad en las FAS. RD.194/2010. ART. 8. Formación. Los miembros de las FAS
            recibirán la formación y preparación adecuadas con el fin de capacitarles en el
            grado necesario para_______…', 'tema_id' => 2],
            ['id' => 74, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 8. Formación.', 'tema_id' => 2],
            ['id' => 75, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 9. Plan de seguridad. La clasificación
            de este documento, sin tener en cuenta la clasificación de algunos de sus
            apartados, será:', 'tema_id' => 2],
            ['id' => 76, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 9. Plan de seguridad.', 'tema_id' => 2],
            ['id' => 77, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 11. Colaboración de la Seguridad
            privada.', 'tema_id' => 2],
            ['id' => 78, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 14. Guardia de Seguridad.', 'tema_id' => 2],
            ['id' => 79, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 14. Guardia de Seguridad.', 'tema_id' => 2],
            ['id' => 80, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 15. Carácter de los componentes de la
            guardia de seguridad.', 'tema_id' => 2],
            ['id' => 81, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 17. Duración de la guardia de
            seguridad.', 'tema_id' => 2],
            ['id' => 82, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 21. Cabo de la guardia...', 'tema_id' => 2],
            ['id' => 83, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 22. Tropa y marinería de guardia.', 'tema_id' => 2],
            ['id' => 84, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 23. Transmisión de órdenes. ¿Quién No
            puede transmitirle las órdenes a la tropa y marinería?', 'tema_id' => 2],
            ['id' => 85, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 25. Obligaciones del centinela.', 'tema_id' => 2],
            ['id' => 86, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART.26. puesto de centinela.', 'tema_id' => 2],
            ['id' => 87, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 27. Patrullas.', 'tema_id' => 2],
            ['id' => 88, 'enunciado' => 'Señala la falsa. Seguridad en las FAS. RD.194/2010. ART. 28. Vigilantes.', 'tema_id' => 2],
            ['id' => 89, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 29. De la policía militar, naval o aérea.', 'tema_id' => 2],
            ['id' => 90, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 30. Cometidos de la PM.', 'tema_id' => 2],
            ['id' => 91, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART.31. Apoyo entre policías.', 'tema_id' => 2],
            ['id' => 92, 'enunciado' => 'Seguridad en las FAS. RD.194/2010. ART. 32. Intervención ante delitos
            flagrantes .¿Cuándo pueden intervenir.?', 'tema_id' => 2],
            ['id' => 93, 'enunciado' => 'Seguridad en las FAS. O.M. 50/2011. Art. 80. Guardias de seguridad.', 'tema_id' => 2],
            ['id' => 94, 'enunciado' => 'Seguridad en las FAS. O.M. 50/2011. Art. 82. Composición de una guardia de
            seguridad.', 'tema_id' => 2],
            ['id' => 95, 'enunciado' => 'Seguridad en las FAS. O.M. 50/2011 ART.86. Cabo de guardia.', 'tema_id' => 2],
            ['id' => 96, 'enunciado' => 'Mando de régimen interior. La acción del mando.', 'tema_id' => 3],
            ['id' => 97, 'enunciado' => 'Mando de régimen interior. Régimen interior.', 'tema_id' => 3],
            ['id' => 98, 'enunciado' => 'Mando de régimen interior. Se denomina unidad…', 'tema_id' => 3],
            ['id' => 99, 'enunciado' => 'Mando de régimen interior. El mando se podrá ejercer…', 'tema_id' => 3],
            ['id' => 100, 'enunciado' => 'Mando de régimen interior. El E.T. es una organización …', 'tema_id' => 3],
            ['id' => 101, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 2. COMPLETAR.
            DEFINICIONES. _______ , acción directiva especifica de las Fas, se refiere
            al ejercicio de la autoridad, con la consiguiente responsabilidad, que
            corresponde al militar en razón de su cargo, destino o servicio.', 'tema_id' => 3],
            ['id' => 102, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 4. El E.T. está
            constituido por…', 'tema_id' => 3],
            ['id' => 103, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 5. Unidades, Centros y
            Organismos…', 'tema_id' => 3],
            ['id' => 104, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 6. El libro de
            organización…', 'tema_id' => 3],
            ['id' => 105, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 7. Bases,
            Acuartelamiento y Establecimientos.', 'tema_id' => 3],
            ['id' => 106, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 8. Autoridad y acción
            de mando.', 'tema_id' => 3],
            ['id' => 107, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 10. Carácter del mando.', 'tema_id' => 3],
            ['id' => 108, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 12. Sucesión de
            mando.', 'tema_id' => 3],
            ['id' => 109, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 31. régimen interior', 'tema_id' => 3],
            ['id' => 110, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 32. El libro de normas
            de régimen interior.', 'tema_id' => 3],
            ['id' => 111, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 34. Los actos de
            régimen interior.', 'tema_id' => 3],
            ['id' => 112, 'enunciado' => 'Señalar la falsa. Mando de régimen interior. OM 50/2011 Art. 51. La unidad de
            servicios.', 'tema_id' => 3],
            ['id' => 113, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 52. Los servicios e la
            instalación.', 'tema_id' => 3],
            ['id' => 114, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 53. Clases de servicios,
            en general, una instalación podrá contar con los siguientes servicios:', 'tema_id' => 3],
            ['id' => 115, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 78. Las guardias.
            Conceptos generales.', 'tema_id' => 3],
            ['id' => 116, 'enunciado' => 'Señala la falsa. Mando de régimen interior. OM 50/2011 Art. 79. Clases y carácter
            de las guardias', 'tema_id' => 3],
            ['id' => 117, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 90. Guardias de orden.', 'tema_id' => 3],
            ['id' => 118, 'enunciado' => 'Señala la falsa. Mando de régimen interior. OM 50/2011 Art. 91. Composición de las
            guardias de orden. En el caso más completo, las guardias de orden
            podrán tener la siguiente composición…', 'tema_id' => 3],
            ['id' => 119, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 95. Personal de Tropa
            de Cuartel.', 'tema_id' => 3],
            ['id' => 120, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 97. Cabo de cuartel,
            cuarteleros e imaginarias.', 'tema_id' => 3],
            ['id' => 121, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 98. Guardia de los
            servicios.', 'tema_id' => 3],
            ['id' => 122, 'enunciado' => 'Señala la falsa. Mando de régimen interior. OM 50/2011 Art. 105. Los turnos de las
            guardias.', 'tema_id' => 3],
            ['id' => 123, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 106. Nombramiento de
            las guardias.', 'tema_id' => 3],
            ['id' => 124, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 107. Prestación de las
            guardias.', 'tema_id' => 3],
            ['id' => 125, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 104. Organización de
            las guardias. Quien no realizara guardias?', 'tema_id' => 3],
            ['id' => 126, 'enunciado' => 'Mando de régimen interior. OM 50/2011 Art. 106. Nombramiento de
            las guardias.', 'tema_id' => 3],
            ['id' => 127, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 1. Objeto y ámbito de
            aplicación.', 'tema_id' => 4],
            ['id' => 128, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 1. Objeto y ámbito de
            aplicación.', 'tema_id' => 4],
            ['id' => 129, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 1. Objeto y ámbito de
            aplicación de la ley. Esta ley es de aplicación a todos los miembros de las
            FAS.', 'tema_id' => 4],
            ['id' => 130, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 3. Vinculación con
            las FAS.', 'tema_id' => 4],
            ['id' => 131, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 3. Vinculación con
            las FAS.', 'tema_id' => 4],
            ['id' => 132, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 3. Vinculación con las
            Fuerzas Armadas.', 'tema_id' => 4],
            ['id' => 133, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 6. Modalidades de relación de
            servicios.', 'tema_id' => 4],
            ['id' => 134, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 7. Juramento o
            promesa ante la bandera de España.', 'tema_id' => 4],
            ['id' => 135, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 8. Renovaciones de
            compromiso.', 'tema_id' => 4],
            ['id' => 136, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 9. Compromiso de larga
            duración.', 'tema_id' => 4],
            ['id' => 137, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 10. Finalización y resolución
            del compromiso de larga duración.', 'tema_id' => 4],
            ['id' => 138, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 8/2006. Art. 14. ¿Bajo qué causas se podrá
            cambiar de especialidad?', 'tema_id' => 4],
            ['id' => 139, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 15. Promoción interna.', 'tema_id' => 4],
            ['id' => 140, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 16. Se les facilitara de forma
            prioritaria formación en aéreas relativas a las tecnologías de la
            información y las comunicaciones, prevención de riesgos laborales,
            medio ambiente, así como cursos para la obtención de los permisos de
            conducción y aquellos otros que se consideren de interés para su
            desarrollo profesional.', 'tema_id' => 4],
            ['id' => 141, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 17. Juramento
            promesa ante la bandera de España.', 'tema_id' => 4],
            ['id' => 142, 'enunciado' => 'Legislación militar. Ley 8/2006. Art.17. definición y condiciones.', 'tema_id' => 4],
            ['id' => 143, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 18. Activación e incorporación.', 'tema_id' => 4],
            ['id' => 144, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 19. Funciones.', 'tema_id' => 4],
            ['id' => 145, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 19. Funciones. La
            acción del mando.', 'tema_id' => 4],
            ['id' => 146, 'enunciado' => 'Legislación militar. Ley de carrera militar. Art. 19. Funciones. El
            militar profesional ejerce funciones…', 'tema_id' => 4],
            ['id' => 147, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 19. Funciones. Acción
            directiva.', 'tema_id' => 4],
            ['id' => 148, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 20. El tiempo de servicios
            prestados en las FAS se considera como merito en los sistemas de
            selección para el acceso a los cuerpos, escalas, plazas de funcionario y
            puestos de carácter laboral de las administraciones públicas.', 'tema_id' => 4],
            ['id' => 149, 'enunciado' => 'Legislación militar. Ley 8/2006. Art. 21. La secretaria del gobierno
            gestionara y convendrá con instituciones públicas y entidades privadas
            acciones orientadas a la incorporación laboral de los militares
            profesionales de tropa y marinería.', 'tema_id' => 4],
            ['id' => 150, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 23. Facultades y antigüedad
            en el empleo militar:', 'tema_id' => 4],
            ['id' => 151, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 24. Empleos con carácter
            honorifico.', 'tema_id' => 4],
            ['id' => 152, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 25. Cuerpos y escalas.', 'tema_id' => 4],
            ['id' => 153, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 26. Cuerpos militares.
            Cuerpos específicos del E.T.', 'tema_id' => 4],
            ['id' => 154, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 26. Cuerpos militares.
            Cuerpos comunes de las FAS.', 'tema_id' => 4],
            ['id' => 155, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 41. Especialidades', 'tema_id' => 4],
            ['id' => 156, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 42. Capacidades
            profesionales. Se determinan por…', 'tema_id' => 4],
            ['id' => 157, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 43. Enseñanza en las FAS.', 'tema_id' => 4],
            ['id' => 158, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 47.enseñanza de formación de
            tropa y marinería.', 'tema_id' => 4],
            ['id' => 159, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 48. Enseñanza de
            perfeccionamiento.', 'tema_id' => 4],
            ['id' => 160, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 62. Cambio de escala.', 'tema_id' => 4],
            ['id' => 161, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 75. Desarrollo de la carrera,
            carrera militar de las escalas de tropa y marinería comenzaran con un
            compromiso inicial, renovable hasta un máximo de 6 años.
            Posteriormente, podrán suscribir un compromiso de larga duración hasta
            cumplir los 45 años de edad.', 'tema_id' => 4],
            ['id' => 162, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 76. Adquisición de la
            condición de militar de carrera.', 'tema_id' => 4],
            ['id' => 163, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 78. La condición de militar de
            tropa y marinería se adquiere una vez incorporado al centro docente
            militar correspondiente.', 'tema_id' => 4],
            ['id' => 164, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 88. Régimen y sistema de
            ascensos.', 'tema_id' => 4],
            ['id' => 165, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 89. Ascenso a los diferentes
            empleos. El ascenso a cabo mayor se hará por el sistema de concurso.', 'tema_id' => 4],
            ['id' => 166, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 90. Condiciones para el
            ascenso.', 'tema_id' => 4],
            ['id' => 167, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 100. Clasificación de los
            destinos.', 'tema_id' => 4],
            ['id' => 168, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 108. Reglamentariamente se
            determinara el tiempo que podrán permanecer en situación de servicio activo los prisioneros y desaparecidos, teniendo en cuenta lo establecido
            en el Código Penal Militar.', 'tema_id' => 4],
            ['id' => 169, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 109. Situación de servicios
            especiales.', 'tema_id' => 4],
            ['id' => 170, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 110. Situación de excedencia.', 'tema_id' => 4],
            ['id' => 171, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 114. Pase retiro.', 'tema_id' => 4],
            ['id' => 172, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 116. Con la perdida de la
            condición de militar de carrera se dejara de estar sujeto al régimen
            general de derechos y deberes de los miembros de las FAS y a las leyes
            penales y disciplinarias militares.', 'tema_id' => 4],
            ['id' => 173, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 117. Renuncia a la condición
            de militar de carrera.', 'tema_id' => 4],
            ['id' => 174, 'enunciado' => 'Señala la falsa. Legislación militar. Ley 39/2007. Art. 118. Finalización y resolución
            de compromisos de los militares con una relación de servicios
            profesionales de carácter temporal.
            (Señalar la falsa).', 'tema_id' => 4],
            ['id' => 175, 'enunciado' => 'Legislación militar. Ley 39/2007. Art. 120. A los militares
            profesionales que, como resultado de los reconocimientos médicos o de
            las pruebas psicológicas y físicas, se establezcan una incapacidad que
            conlleve una limitación ocupar determinados destinos, se les garantizara
            el principio de igualdad de trato en los destinos a los que puedan
            acceder.', 'tema_id' => 4],
        ]);
    }
}
