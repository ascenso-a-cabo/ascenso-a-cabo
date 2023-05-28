<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('respuestas')->insert([
            
            ['texto' => 'Las RR.OO. definen los principios morales.', 'valor' => false, 'pregunta_id' => 1],
            ['texto' => 'Las RR.OO. constituyen el código de conducta del pueblo español.', 'valor' => false, 'pregunta_id' => 1],
            ['texto' => 'Las RR.OO. Sirven para fomentar y exigir el exacto cumplimiento del deber.', 'valor' => true, 'pregunta_id' => 1],
            ['texto' => 'Las RR.OO. Sirven para fomentar y exigir el exacto cumplimiento del derecho.', 'valor' => false, 'pregunta_id' => 1],

            ['texto' => 'Son de aplicación a todos los militares profesionales independientemente de su situación administrativa.', 'valor' => false, 'pregunta_id' => 2],
            ['texto' => 'También son de aplicación a los reservistas.', 'valor' => true, 'pregunta_id' => 2],
            ['texto' => 'Dada la naturaleza de la guardia civil y la condición militar de sus miembros, estas RR.OO. le son aplicables íntegramente.', 'valor' => false, 'pregunta_id' => 2],
            ['texto' => 'A todos los miembros de FCSE.', 'valor' => false, 'pregunta_id' => 2],

            ['texto' => 'El primer y más fundamental deber del militar es la disposición permanente para el servicio.', 'valor' => false, 'pregunta_id' => 3],
            ['texto' => 'El primer y más fundamental deber del militar es la disposición permanente para defender a España.', 'valor' => true, 'pregunta_id' => 3],
            ['texto' => 'El primer y más fundamental deber del militar es es el salvaguardo de la constitución.', 'valor' => false, 'pregunta_id' => 3],
            ['texto' => 'El primer y más fundamental deber del militar es la indisposición para el servicio.', 'valor' => false, 'pregunta_id' => 3],

            ['texto' => 'El militar defenderá a España.', 'valor' => false, 'pregunta_id' => 4],
            ['texto' => 'Sera diligente en la ejecución de sus funciones.', 'valor' => false, 'pregunta_id' => 4],
            ['texto' => 'Cumplirá las obligaciones derivadas de las misiones de la FAS.', 'valor' => true, 'pregunta_id' => 4],
            ['texto' => 'El militar defenderá la monarquía y a la constitución.', 'valor' => false, 'pregunta_id' => 4],

            ['texto' => 'Ilusión y disciplina', 'valor' => false, 'pregunta_id' => 5],
            ['texto' => 'Imparcialidad.', 'valor' => false, 'pregunta_id' => 5],
            ['texto' => 'Promoción del entrono medioambiental.', 'valor' => false, 'pregunta_id' => 5],
            ['texto' => 'Abnegación..', 'valor' => true, 'pregunta_id' => 5],

            ['texto' => 'Deber.', 'valor' => true, 'pregunta_id' => 6],
            ['texto' => 'Derecho.', 'valor' => false, 'pregunta_id' => 6],
            ['texto' => 'Compromiso.', 'valor' => false, 'pregunta_id' => 6],
            ['texto' => 'La obligación.', 'valor' => false, 'pregunta_id' => 6],

            ['texto' => 'Como símbolos de la patria transmitidos por la historia.', 'valor' => true, 'pregunta_id' => 7],
            ['texto' => 'Como símbolos de la patria manifestados en la constitución.', 'valor' => false, 'pregunta_id' => 7],
            ['texto' => 'Como símbolos de la unidad de España.', 'valor' => false, 'pregunta_id' => 7],
            ['texto' => 'Ante los reservistas de su unidad y otras.', 'valor' => false, 'pregunta_id' => 7],
            
            ['texto' => 'Las características de las FAS son la disciplina y unidad.', 'valor' => false, 'pregunta_id' => 8],
            ['texto' => 'Ajustara su comportamiento a las características de la FAS, indispensables para conseguir la máxima eficacia en su acción.', 'valor' => true, 'pregunta_id' => 8],
            ['texto' => 'Los símbolos de la Patria son la Bandera, el Escudo y el Himno Nacional.', 'valor' => false, 'pregunta_id' => 8],
            ['texto' => 'La característica fundamental del militar será la cohesión y obediencia.', 'valor' => false, 'pregunta_id' => 8],
            
            ['texto' => 'Exigida en las FAS.', 'valor' => true, 'pregunta_id' => 9],
            ['texto' => 'Exigidas en las RR.OO.', 'valor' => false, 'pregunta_id' => 9],
            ['texto' => 'Exigidas en el Libro de Normas de Régimen Interior.', 'valor' => false, 'pregunta_id' => 9],
            ['texto' => 'Exigidas en las Órdenes Ministeriales.', 'valor' => false, 'pregunta_id' => 9],
            
            ['texto' => 'En todo momento con eficacia, iliusion y disciplina.', 'valor' => false, 'pregunta_id' => 10],
            ['texto' => 'Solo cuando este de servicio con lealtad y compañerismo.', 'valor' => false, 'pregunta_id' => 10],
            ['texto' => 'Con lealtad y compañerismo solo en el cumplimiento de sus misiones.', 'valor' => false, 'pregunta_id' => 10],
            ['texto' => 'En todo momento con lealtad y compañerismo.', 'valor' => true, 'pregunta_id' => 10],
            
            ['texto' => 'Al respeto, bien común y derecho internacional.', 'valor' => true, 'pregunta_id' => 11],
            ['texto' => 'Derecho internacional, bien común, derecho de los miembros de las FAS.', 'valor' => false, 'pregunta_id' => 11],
            ['texto' => 'Respeto, bien común y derechos nacionales.', 'valor' => false, 'pregunta_id' => 11],
            ['texto' => 'Al respecto, derecho nacional y bien común.', 'valor' => false, 'pregunta_id' => 11],
            
            ['texto' => 'Los derechos reconocidos en la Constitución.', 'valor' => true, 'pregunta_id' => 12],
            ['texto' => 'Las obligaciones del Libro de Normas de Régimen Interior.', 'valor' => false, 'pregunta_id' => 12],
            ['texto' => 'Las obligaciones reconocidas en la Constitución.', 'valor' => false, 'pregunta_id' => 12],
            ['texto' => 'Los derechos reconocidos en el Libro de Normas de Régimen Interior.', 'valor' => false, 'pregunta_id' => 12],
            
            ['texto' => 'Criterios y normas relativos a la igualdad de hombres y mujeres.', 'valor' => true, 'pregunta_id' => 13],
            ['texto' => 'Criterios y normas relativos a la igualdad de hombres.', 'valor' => false, 'pregunta_id' => 13],
            ['texto' => 'Criterios relativos a la igualdad de hombres y mujeres.', 'valor' => false, 'pregunta_id' => 13],
            ['texto' => 'Criterios y normas relativos a la igualdad de mujeres.', 'valor' => false, 'pregunta_id' => 13],
            
            ['texto' => 'La dignidad y el respeto.', 'valor' => false, 'pregunta_id' => 14],
            ['texto' => 'La dignidad y los derechos.', 'valor' => true, 'pregunta_id' => 14],
            ['texto' => 'Los derechos y obligaciones.', 'valor' => false, 'pregunta_id' => 14],
            ['texto' => 'Los derechos y el respeto.', 'valor' => false, 'pregunta_id' => 14],
            
            ['texto' => 'Llegar tarde.', 'valor' => false, 'pregunta_id' => 15],
            ['texto' => 'Excusarse con males imaginarios.', 'valor' => false, 'pregunta_id' => 15],
            ['texto' => 'Cumplir con exactitud sus obligaciones.', 'valor' => true, 'pregunta_id' => 15],
            ['texto' => 'Contentarse regularmente con hacer lo mínimo en su deber.', 'valor' => false, 'pregunta_id' => 15],
            
            ['texto' => 'En la orden del día.', 'valor' => false, 'pregunta_id' => 16],
            ['texto' => 'Las reales ordenanzas.', 'valor' => true, 'pregunta_id' => 16],
            ['texto' => 'El libro de normas de régimen interior.', 'valor' => false, 'pregunta_id' => 16],
            ['texto' => 'Libro de Organización.', 'valor' => false, 'pregunta_id' => 16],
            
            ['texto' => 'Sus derechos y obligaciones.', 'valor' => true, 'pregunta_id' => 17],
            ['texto' => 'Sus obligaciones y virtudes.', 'valor' => false, 'pregunta_id' => 17],
            ['texto' => 'Sus derechos y dedicación.', 'valor' => false, 'pregunta_id' => 17],
            ['texto' => 'Sus derechos y deberes.', 'valor' => false, 'pregunta_id' => 17],
            
            ['texto' => 'La Reales Ordenanzas.', 'valor' => true, 'pregunta_id' => 18],
            ['texto' => 'Las exigencias en la Reales Ordenanzas.', 'valor' => false, 'pregunta_id' => 18],
            ['texto' => 'Las que cada unidad nombre.', 'valor' => false, 'pregunta_id' => 18],
            ['texto' => 'Las Órdenes Ministeriales', 'valor' => false, 'pregunta_id' => 18],
            
            ['texto' => 'Valor y exactitud en el servicio.', 'valor' => false, 'pregunta_id' => 19],
            ['texto' => 'Disciplina y prontitud en la obediencia.', 'valor' => false, 'pregunta_id' => 19],
            ['texto' => 'Valor, dedicación y exactitud.', 'valor' => true, 'pregunta_id' => 19],
            ['texto' => 'A y B son correctas.', 'valor' => false, 'pregunta_id' => 19],
            
            ['texto' => 'La arbitrariedad.', 'valor' => true, 'pregunta_id' => 20],
            ['texto' => 'La abnegación.', 'valor' => false, 'pregunta_id' => 20],
            ['texto' => 'La rectitud del mando.', 'valor' => false, 'pregunta_id' => 20],
            ['texto' => 'La insubordinación.', 'valor' => false, 'pregunta_id' => 20],
            
            ['texto' => 'La obligación.', 'valor' => false, 'pregunta_id' => 21],
            ['texto' => 'La justicia.', 'valor' => true, 'pregunta_id' => 21],
            ['texto' => 'La equidad.', 'valor' => false, 'pregunta_id' => 21],
            ['texto' => 'La ilusión.', 'valor' => false, 'pregunta_id' => 21],
            
            ['texto' => 'Ejercerá su profesión con firmeza y magnanimidad.', 'valor' => false, 'pregunta_id' => 22],
            ['texto' => 'Subordinará la honrada ambición profesional a la intima satisfacción del deber cumplido.', 'valor' => true, 'pregunta_id' => 22],
            ['texto' => 'Velara por su integridad física.', 'valor' => false, 'pregunta_id' => 22],
            ['texto' => 'Siempre estará preparado y dispuesto para entrar en combate.', 'valor' => false, 'pregunta_id' => 22],
            
            ['texto' => 'Firmeza y magnitud en la ejecución de sus cometidos.', 'valor' => false, 'pregunta_id' => 23],
            ['texto' => 'Amor al servicio y constante deseo de ser empleado en las ocasiones de mayor riesgo y fatiga.', 'valor' => true, 'pregunta_id' => 23],
            ['texto' => 'Constancia, con un alto afán de superación tanto profesional como personalmente para el pleno desarrollo de sus funciones.', 'valor' => false, 'pregunta_id' => 23],
            ['texto' => 'Amor al servicio y constante deseo de ser empleado en las ocasiones de mayor peligro y diversión.', 'valor' => false, 'pregunta_id' => 23],
            
            ['texto' => 'Permanente.', 'valor' => true, 'pregunta_id' => 24],
            ['texto' => 'Solo los días de servicio.', 'valor' => false, 'pregunta_id' => 24],
            ['texto' => 'Cuando lo nombren los superiores.', 'valor' => false, 'pregunta_id' => 24],
            ['texto' => 'Solo los días festivos.', 'valor' => false, 'pregunta_id' => 24],
            
            ['texto' => 'Realizara cualquier tarea o servicio con la máxima indiferencia y puntualidad.', 'valor' => false, 'pregunta_id' => 25],
            ['texto' => 'Estará en disponibilidad permanente para el servicio solo en operaciones.', 'valor' => false, 'pregunta_id' => 25],
            ['texto' => 'La disponibilidad se materializará de forma adecuada al destino que se ocupe y a las circunstancias de la situación.', 'valor' => true, 'pregunta_id' => 25],
            ['texto' => 'La disponibilidad se contabilizara de forma adecuada al destino que se ocupe y a las circunstancias de los hechos.', 'valor' => false, 'pregunta_id' => 25],
            
            ['texto' => 'Es un acto simbólico optativo.', 'valor' => false, 'pregunta_id' => 26],
            ['texto' => 'Es un deber de gratitud.', 'valor' => true, 'pregunta_id' => 26],
            ['texto' => 'Es un motivo de redención para su espíritu.', 'valor' => false, 'pregunta_id' => 26],
            ['texto' => 'Es un derecho de gratitud', 'valor' => false, 'pregunta_id' => 26],
            
            ['texto' => 'Se esforzara para que su Unidad se sienta orgullosa de su aportación.', 'valor' => false, 'pregunta_id' => 27],
            ['texto' => 'Velara por su prestigio.', 'valor' => false, 'pregunta_id' => 27],
            ['texto' => 'Se esforzara para que su Unidad merezca ser designada para las misiones más arriesgadas.', 'valor' => true, 'pregunta_id' => 27],
            ['texto' => 'Velara por empleo y de sus superiores.', 'valor' => false, 'pregunta_id' => 27],
            
            ['texto' => 'Conservara y transmitirá las tradiciones y símbolos de su unidad.', 'valor' => true, 'pregunta_id' => 28],
            ['texto' => 'Conservara y transmitirá el prestigio heredado de los que dieron su vida por España.', 'valor' => false, 'pregunta_id' => 28],
            ['texto' => 'Conservara y transmitirá la cohesión que le hace sentirse orgulloso de su unidad.', 'valor' => false, 'pregunta_id' => 28],
            ['texto' => 'Conservara y transmitirá las tradiciones y símbolos de su zona de despliegue.', 'valor' => false, 'pregunta_id' => 28],
            
            ['texto' => 'Será cortes e indiferente en su trato con ella.', 'valor' => false, 'pregunta_id' => 29],
            ['texto' => 'Forzara la relación con la población civil.', 'valor' => false, 'pregunta_id' => 29],
            ['texto' => 'Evitará toda molestia innecesaria.', 'valor' => true, 'pregunta_id' => 29],
            ['texto' => 'A y B son correctas.', 'valor' => false, 'pregunta_id' => 29],
            
            ['texto' => 'Si tuvieran alguna queja o reclamación lo pondrá en conocimiento de sus superiores', 'valor' => false, 'pregunta_id' => 30],
            ['texto' => 'Las quejas y reclamaciones se harán por conducto reglamentario.', 'valor' => false, 'pregunta_id' => 30],
            ['texto' => 'Las quejas y reclamaciones se harán en perjuicio de los derechos que legalmente le corresponden', 'valor' => true, 'pregunta_id' => 30],
            ['texto' => 'A Y B son correctas.', 'valor' => false, 'pregunta_id' => 30],
            
            ['texto' => 'Cumplimiento de órdenes.', 'valor' => false, 'pregunta_id' => 31],
            ['texto' => 'Disciplina.', 'valor' => true, 'pregunta_id' => 31],
            ['texto' => 'Responsabilidad.', 'valor' => false, 'pregunta_id' => 31],
            ['texto' => 'Coherencia.', 'valor' => false, 'pregunta_id' => 31],
            
            ['texto' => 'El militar cumplirá las órdenes de cualquier autoridad civil.', 'valor' => false, 'pregunta_id' => 32],
            ['texto' => 'El militar cumplirá las instrucciones de cualquier autoridad civil de las organizaciones nacionales o internacionales.', 'valor' => false, 'pregunta_id' => 32],
            ['texto' => 'El militar cumplirá las instrucciones y ordenes de autoridades civiles de los que dependa jerárquicamente.', 'valor' => true, 'pregunta_id' => 32],
            ['texto' => 'El militar cumplirá las instrucciones de cualquier autoridad civil de las organizaciones nacionales.', 'valor' => false, 'pregunta_id' => 32],
            
            ['texto' => 'Ante lo imprevisto, tomara una decisión coherente.', 'valor' => true, 'pregunta_id' => 33],
            ['texto' => 'Debe esforzarse en ser fiel sus propios propósitos.', 'valor' => false, 'pregunta_id' => 33],
            ['texto' => 'Cumplirá las órdenes con espíritu de sacrificio y abnegación.', 'valor' => false, 'pregunta_id' => 33],
            ['texto' => 'Cumplirá las órdenes con espíritu de sacrificio y negación.', 'valor' => false, 'pregunta_id' => 33],
            
            ['texto' => 'Si las órdenes entrañan delito lo pondrá en conocimiento de sus superiores, por conducto reglamentario una vez realizado el mando para no perjudicar la misión encomendada.', 'valor' => false, 'pregunta_id' => 34],
            ['texto' => 'El militar que acata una orden constitutiva de delito no será responsable de su acción.', 'valor' => false, 'pregunta_id' => 34],
            ['texto' => 'El militar que reciba una orden constitutiva de delito asumirá la falta leve de la responsabilidad de la omisión.', 'valor' => false, 'pregunta_id' => 34],
            ['texto' => 'El militar que reciba una orden constitutiva de delito asumirá la grave responsabilidad de la omisión de la misma.', 'valor' => true, 'pregunta_id' => 34],
            
            ['texto' => 'En el supuesto de que considere su deber presentar alguna objeción a la orden recibida la formulara ante su superior jerárquico inmediato superior.', 'valor' => false, 'pregunta_id' => 35],
            ['texto' => 'En el supuesto de que considere su deber presentar alguna objeción a la orden recibida la formulara ante quien se la hubiera dado.', 'valor' => true, 'pregunta_id' => 35],
            ['texto' => 'En el supuesto de que considere su deber presentar alguna objeción a la orden recibida la formulara ante su superior jerárquico inmediato superior de quien la hubiera dado.', 'valor' => false, 'pregunta_id' => 35],
            ['texto' => 'En el supuesto de que considere su deber presentar alguna objeción a la orden recibida la formulara ante su capitán de compañía.', 'valor' => false, 'pregunta_id' => 35],
            
            ['texto' => 'Todo militar, cualquiera que sea su empleo, atenderá las indicaciones de otro que se encuentre de servicio siempre y cuando no sea de empleo inferior al suyo.', 'valor' => false, 'pregunta_id' => 36],
            ['texto' => 'Todo militar, cualquiera que sea su empleo, atenderá las indicaciones de otro que se encuentre de servicio, sea del empleo que sea, aunque no actúe en virtud de órdenes que esté encargado de hacer cumplir.', 'valor' => false, 'pregunta_id' => 36],
            ['texto' => 'Todo militar, cualquiera que sea su empleo, atenderá las indicaciones de otro que se encuentre de servicio, sea del empleo inferior que sea, que no actúe en virtud de órdenes que esté encargado de hacer cumplir.', 'valor' => false, 'pregunta_id' => 36],
            ['texto' => 'Todo militar, cualquiera que sea su empleo, atenderá las indicaciones de otro que se encuentre de servicio, sea del empleo que sea, que actúe en virtud de órdenes que esté encargado de hacer cumplir.', 'valor' => true, 'pregunta_id' => 36],
            
            ['texto' => 'En presencia de un superior no deberá corregir las faltas o defectos cuando corresponda a aquél hacerlo.', 'valor' => true, 'pregunta_id' => 37],
            ['texto' => 'En beneficio de la disciplina corregirá y llamara la atención ente otros de inferior empleo, en cualquier caso, para no perjudicar el servicio.', 'valor' => false, 'pregunta_id' => 37],
            ['texto' => 'En presencia de un superior deberá corregir las faltas o defectos cuando corresponda a aquél hacerlo.', 'valor' => false, 'pregunta_id' => 37],
            ['texto' => 'Cuando aprecie una falta la corregirá siempre y cuando no se aprecien muestras de arrepentimiento corrección por parte de quien la comete.', 'valor' => false, 'pregunta_id' => 37],

            ['texto' => 'Unión entre una unidad, respeto y disciplina.', 'valor' => false, 'pregunta_id' => 38],
            ['texto' => 'Disciplina, respeto y compromiso.', 'valor' => false, 'pregunta_id' => 38],
            ['texto' => 'Respeto mutuo, disciplina y unión entre los miembros de las FAS.', 'valor' => true, 'pregunta_id' => 38],
            ['texto' => 'Disciplina, respeto y unión.', 'valor' => false, 'pregunta_id' => 38],

            ['texto' => 'Pondrán gran cuidado en observar y exigir los signos externos de disciplina, cortesía militar y policía.', 'valor' => false, 'pregunta_id' => 39],
            ['texto' => 'Se esforzara en poner de manifiesto la atención y respeto a otras personas, sean militares o civiles.', 'valor' => false, 'pregunta_id' => 39],
            ['texto' => 'Tendrá presente que el saludo militar constituye expresión de respeto y exigencia.', 'valor' => false, 'pregunta_id' => 39],
            ['texto' => 'Tendrá presente que el saludo militar constituye expresión de respeto y jerarquía.', 'valor' => true, 'pregunta_id' => 39],

            ['texto' => 'El militar que ejerza el mando se hará respetar, compensara el buen hacer de sus subordinados y les disimulara las faltas.', 'valor' => false, 'pregunta_id' => 40],
            ['texto' => 'Infundirá amor al servicio a sus subordinados.', 'valor' => true, 'pregunta_id' => 40],
            ['texto' => 'Será exaltado en su actitud y desconsiderado en su actitud.', 'valor' => false, 'pregunta_id' => 40],
            ['texto' => 'El militar que ejerza el mando se hará respetar con su empleo.', 'valor' => false, 'pregunta_id' => 40],

            ['texto' => 'Reafirmara su liderazgo procurando conseguir el mayor apoyo y cooperación de sus subordinados por el prestigio que le aporta su empleo y puesto en la unidad.', 'valor' => false, 'pregunta_id' => 41],
            ['texto' => 'Reafirmara su liderazgo procurando conseguir el mayor apoyo y cooperación de sus subordinados por el prestigio adquirido con su ejemplo, preparación y capacidad de decisión.', 'valor' => true, 'pregunta_id' => 41],
            ['texto' => 'Reafirmara su liderazgo procurando conseguir el mayor apoyo y cooperación de sus subordinados por el prestigio adquirido mediante la coacción y su posición jerárquica.', 'valor' => false, 'pregunta_id' => 41],
            ['texto' => 'Reafirmara su liderazgo procurando conseguir el mayor apoyo y cooperación de sus subordinados por el prestigio adquirido con su autoridad, preparación y capacidad de decisión.', 'valor' => false, 'pregunta_id' => 41],

            ['texto' => 'El mando del militar no es renunciable ni puede ser compartida.', 'valor' => false, 'pregunta_id' => 42],
            ['texto' => 'Los que ejerzan mando trataran de inculcar una disciplina basada en la autoridad.', 'valor' => false, 'pregunta_id' => 42],
            ['texto' => 'Todo mando tiene el deber de exigir obediencia a sus subordinados y el derecho a que se respete su autoridad.', 'valor' => false, 'pregunta_id' => 42],
            ['texto' => 'Los que ejerzan mando trataran de inculcar una disciplina basada en la obediencia.', 'valor' => false, 'pregunta_id' => 42],

            ['texto' => '…La protección y seguridad del personal a sus órdenes.', 'valor' => false, 'pregunta_id' => 43],
            ['texto' => '…Su autoprotección y la protección de aquello que le competa dentro del desempeño de sus funciones.', 'valor' => false, 'pregunta_id' => 43],
            ['texto' => '…que sus subordinados cumplan las órdenes dadas para el cumplimiento de su misión.', 'valor' => false, 'pregunta_id' => 43],
            ['texto' => '…Su autoprotección y la protección de todo aquello que le competa dentro del desempeño de sus misiones internacionales y nacionales.', 'valor' => false, 'pregunta_id' => 43],

            ['texto' => 'Actuara con la iniciativa pero no la fomentara entre sus subordinados.', 'valor' => false, 'pregunta_id' => 44],
            ['texto' => 'Para adoptar sus decisiones aplicara únicamente su capacidad de juicio otorgada por la experiencia obtenida.', 'valor' => false, 'pregunta_id' => 44],
            ['texto' => 'Al adoptar decisiones lo harán sin coartar la intuición y la imaginación.', 'valor' => false, 'pregunta_id' => 44],
            ['texto' => 'Para adoptar sus decisiones aplicara siempre su capacidad de juicio otorgada por la experiencia obtenida.', 'valor' => false, 'pregunta_id' => 44],

            ['texto' => 'Ejercerá su autoridad con firmeza, justicia y parcialidad.', 'valor' => false, 'pregunta_id' => 45],
            ['texto' => 'Evitara toda arbitrariedad promoviendo un ambiente de sumisión, íntima satisfacción y respeto al mando.', 'valor' => false, 'pregunta_id' => 45],
            ['texto' => 'Mantendrá sus órdenes con determinación pero no se empeñara en ellas si la evolución de los acontecimientos aconseja variarlas.', 'valor' => false, 'pregunta_id' => 45],
            ['texto' => 'Evitara toda arbitrariedad promoviendo un ambiente de sumisión, íntima satisfacción y respeto al subordinado.', 'valor' => false, 'pregunta_id' => 45],

            ['texto' => 'En el ejercicio de su autoridad será prudente en la toma de decisiones, fruto del análisis de la situación y valoración de la información disponible.', 'valor' => false, 'pregunta_id' => 46],
            ['texto' => 'Expresara sus decisiones y órdenes abstractas, cuya ejecución debe dirigir coordinar y controlar.', 'valor' => false, 'pregunta_id' => 46],
            ['texto' => 'La insuficiencia de información puede disculparle por permanecer inactivo en situaciones que requieran su intervención.', 'valor' => false, 'pregunta_id' => 46],
            ['texto' => 'La insuficiencia de información puede culparle por permanecer inactivo en situaciones que requieran su intervención.', 'valor' => false, 'pregunta_id' => 46],

            ['texto' => 'Mantendrá un contacto directo con sus subordinados.', 'valor' => false, 'pregunta_id' => 47],
            ['texto' => 'Conocerá sus aptitudes, aspiraciones e historial militar.', 'valor' => false, 'pregunta_id' => 47],
            ['texto' => 'Asignara los puestos y tareas independientemente de sus capacidades para calificarlos con justicia.', 'valor' => false, 'pregunta_id' => 47],
            ['texto' => 'Velara por sus intereses profesionales y personales.', 'valor' => false, 'pregunta_id' => 47],

            ['texto' => 'sus subordinados en el ejercicio profesional?', 'valor' => false, 'pregunta_id' => 48],
            ['texto' => 'Todos los medios a su alcance, principalmente la persuasión y el ejemplo.', 'valor' => false, 'pregunta_id' => 48],
            ['texto' => 'Todos los medios a su alcance, el auto-convencimiento y el ejemplo.', 'valor' => false, 'pregunta_id' => 48],
            ['texto' => 'Todos los medios a su alcance, principalmente la persuasión y el autoconvencimiento', 'valor' => false, 'pregunta_id' => 48],

            ['texto' => 'Aumentar la cohesión y convivencia en su unidad con el fin de alcanzar el máximo rendimiento colectivo.', 'valor' => false, 'pregunta_id' => 49],
            ['texto' => 'Aumentar la cohesión de su unidad y la convergencia de esfuerzos con el fin de alcanzar el máximo rendimiento colectivo.', 'valor' => false, 'pregunta_id' => 49],
            ['texto' => 'Aumentar la cohesión de su unidad y la convergencia de esfuerzos con el fin de alcanzar el máximo rendimiento individual y colectivo.', 'valor' => false, 'pregunta_id' => 49],
            ['texto' => 'Aumentar la cohesión y convivencia en su unidad con el fin de alcanzar el máximo rendimiento individual y colectivo.', 'valor' => false, 'pregunta_id' => 49],

            ['texto' => 'Velara por la convivencia fomentando el compañerismo y la integración intercultural.', 'valor' => false, 'pregunta_id' => 50],
            ['texto' => 'No se discriminara por razón de nacimiento, origen racial…', 'valor' => false, 'pregunta_id' => 50],
            ['texto' => 'Cualquier condición o circunstancia personal o social puede ser susceptible de segregación.', 'valor' => false, 'pregunta_id' => 50],
            ['texto' => 'Solo A y B son correctas.', 'valor' => false, 'pregunta_id' => 50],

            ['texto' => 'El militar estará preparado para afrontar con valor, abnegación y penosidad cualesquiera que sean las misiones de las FAS.', 'valor' => false, 'pregunta_id' => 51],
            ['texto' => 'El militar estará preparado para afrontar con espíritu de sacrificio y valor las situaciones de peligro.', 'valor' => false, 'pregunta_id' => 51],
            ['texto' => 'El militar estará preparado para afrontar con energia, abnegación y espíritu de servicio situaciones de combate.', 'valor' => false, 'pregunta_id' => 51],
            ['texto' => 'El militar estará preparado para afrontar con valor, abnegación y espíritu de servicio situaciones de combate.', 'valor' => false, 'pregunta_id' => 51],

            ['texto' => 'Un uso gradual y proporcionado de la misma, adecuado con lo estipulado en los tratados internacionales.', 'valor' => false, 'pregunta_id' => 52],
            ['texto' => 'Un uso gradual y proporcionado de la misma, adecuado con las reglas de enfrentamiento establecidas para las operaciones en las que participe.', 'valor' => false, 'pregunta_id' => 52],
            ['texto' => 'Un uso de la fuerza tal y como estipulan los acuerdos y tratados internacionales.', 'valor' => false, 'pregunta_id' => 52],

            ['texto' => 'En caso de conflicto armado, el militar actuara siempre con inquebrantable voluntad de vencer.', 'valor' => false, 'pregunta_id' => 53],
            ['texto' => 'En caso de conflicto armado, el combatiente concentrara su atención y esfuerzo en el cumplimiento de la misión de su unidad.', 'valor' => false, 'pregunta_id' => 53],
            ['texto' => 'En caso de conflicto armado, alentado por la arbitrariedad y legitimidad de su causa actuara siempre con inquebrantable voluntad de vencer.', 'valor' => false, 'pregunta_id' => 53],
            ['texto' => 'El combatiente entrega, sacrificio y energía para conseguir el objetivo asignado.', 'valor' => false, 'pregunta_id' => 53],

            ['texto' => 'Acometividad.', 'valor' => false, 'pregunta_id' => 54],
            ['texto' => 'Abnegación.', 'valor' => false, 'pregunta_id' => 54],
            ['texto' => 'Serenidad.', 'valor' => false, 'pregunta_id' => 54],
            ['texto' => 'Espíritu de lucha.', 'valor' => false, 'pregunta_id' => 54],

            ['texto' => 'Nunca.', 'valor' => false, 'pregunta_id' => 55],
            ['texto' => 'En caso de peligro inminente.', 'valor' => false, 'pregunta_id' => 55],
            ['texto' => 'Siempre y cuando lo vea conveniente.', 'valor' => false, 'pregunta_id' => 55],
            ['texto' => 'Siempre podrá abandonarlo ya que hay mas centinelas que vigilan su zona.', 'valor' => false, 'pregunta_id' => 55],

            ['texto' => 'Todo mando en combate ha de inspirar a sus subordinados valor y paciencia para afrontar los riesgos.', 'valor' => false, 'pregunta_id' => 56],
            ['texto' => 'Todo mando en combate dedicara su capacidad a conservar la moral de victoria, la disciplina y el valor.', 'valor' => false, 'pregunta_id' => 56],
            ['texto' => 'Todo mando en combate dedicara su capacidad, entre otras cosas, a que nadie abandone su puesto.', 'valor' => false, 'pregunta_id' => 56],
            ['texto' => 'Todo mando en combate dedicara su conocimiento, entre otras cosas, a que nadie abandone la zona de combate.', 'valor' => false, 'pregunta_id' => 56],

            ['texto' => 'Como instrumento de la Nación a la que se ha desplazado para prestar sus servicios, en estrecho colaboración con los ejércitos de los países aliados.', 'valor' => false, 'pregunta_id' => 57],
            ['texto' => 'Como instrumento de la Nación española, en estrecha colaboración con los ejércitos de países aliados.', 'valor' => false, 'pregunta_id' => 57],
            ['texto' => 'Como instrumento de la organización internacional de la que España forma parte, en estrecha colaboración con el ejército del país al que se ha desplazado para prestar sus servicios.', 'valor' => false, 'pregunta_id' => 57],

            ['texto' => 'Respetara la cultura y las costumbres propias de la zona de despliegue, aunque comprometan la misión encomendada.', 'valor' => false, 'pregunta_id' => 58],
            ['texto' => 'Se instruirá y pondrá todo su interés en el conocimiento y comprensión de los elementos identificadores de la cultura y las costumbres propias de la zona de despliegue.', 'valor' => false, 'pregunta_id' => 58],
            ['texto' => 'Pondrá especial interés en la religión y cultura propias de la zona de despliegue.', 'valor' => false, 'pregunta_id' => 58],
            ['texto' => 'Pondrá especial interés en la religión y su lengua propias de la zona de despliegue.', 'valor' => false, 'pregunta_id' => 58],


            ['texto' => 'Actuara con la máxima competencia y espíritu de sacrificio.', 'valor' => false, 'pregunta_id' => 59],
            ['texto' => 'Afrontara las situaciones críticas con impaciencia.', 'valor' => false, 'pregunta_id' => 59],
            ['texto' => 'Será consciente de que su intervención tendrá una enorme intrascendencia en la imagen de las FAS.', 'valor' => false, 'pregunta_id' => 59],
            ['texto' => 'Afrontara las situaciones con espíritu de sacrificio.', 'valor' => false, 'pregunta_id' => 59],

            ['texto' => 'En la ejecución de la misión que tenga encomendada cumplirá sus cometidos con la máxima impericia.', 'valor' => false, 'pregunta_id' => 60],
            ['texto' => '…basada en su nulidad profesional,...', 'valor' => false, 'pregunta_id' => 60],
            ['texto' => 'Para proteger la vida e integridad de algunos de los afectados y evitar riesgos innecesarios.', 'valor' => false, 'pregunta_id' => 60],
            ['texto' => '…Para proteger la vida e integridad de todos los afectados y evitar riesgos innecesarios.', 'valor' => false, 'pregunta_id' => 60],

            ['texto' => 'La cohesión  su capacidad profesional.', 'valor' => false, 'pregunta_id' => 61],
            ['texto' => 'La protección su máximo empeño.', 'valor' => false, 'pregunta_id' => 61],
            ['texto' => 'La obtención  sus conocimientos a favor del prestigio de su unidad.', 'valor' => false, 'pregunta_id' => 61],
            ['texto' => 'La cohesión  su máximo sacrificio.', 'valor' => false, 'pregunta_id' => 61],

            ['texto' => 'La seguridad en las FAS constituye la responsabilidad del reino y sus poderes.', 'valor' => false, 'pregunta_id' => 62],
            ['texto' => 'La seguridad en las FAS afecta a la integridad de España.', 'valor' => false, 'pregunta_id' => 62],
            ['texto' => 'La seguridad en las FAS constituye la máxima responsabilidad del estado y sus poderes.', 'valor' => false, 'pregunta_id' => 62],
            ['texto' => 'La seguridad en las Fas afecta a todos sus miembros.', 'valor' => false, 'pregunta_id' => 62],

            ['texto' => 'La seguridad en las FAS. Se define como el conjunto de medidas encaminadas a pallar las amenazas a la estabilidad y la integridad de España.', 'valor' => false, 'pregunta_id' => 63],
            ['texto' => 'El uso del término “UNIDAD” se emplea con carácter genérico, pero no debe entenderse que puede hacer referencia tanto a una unidad militar como a un buque.', 'valor' => false, 'pregunta_id' => 63],
            ['texto' => 'El término “JEFE” engloba las terminaciones de jefe, comandante o director, referendas a quien ejerce el mando o dirección de una unidad.', 'valor' => false, 'pregunta_id' => 63],

            ['texto' => 'seguridad NO se rige por su propia normativa?', 'valor' => false, 'pregunta_id' => 64],
            ['texto' => 'Las guardias de seguridad de los órganos centrales y periféricos del ministerio de defensa.', 'valor' => false, 'pregunta_id' => 64],
            ['texto' => 'La seguridad de las unidades que se deriva del desarrollo de maniobras.', 'valor' => false, 'pregunta_id' => 64],
            ['texto' => 'La seguridad relacionada con la información.', 'valor' => false, 'pregunta_id' => 64],

            ['texto' => 'Prestara atención permanente al cumplimiento de las normas.', 'valor' => false, 'pregunta_id' => 65],
            ['texto' => 'Será responsable, a su nivel, del cumplimiento de las normas y medidas', 'valor' => false, 'pregunta_id' => 65],
            ['texto' => 'establecidas.', 'valor' => false, 'pregunta_id' => 65],
            ['texto' => 'Tendrá presente en todo momento los principios de equidad y conservación.', 'valor' => false, 'pregunta_id' => 65],

            ['texto' => 'Las unidades, para su seguridad, deberían encontrarse aisladas.', 'valor' => false, 'pregunta_id' => 66],
            ['texto' => 'Las unidades podrán tener zonas de seguridad exterior si así lo considerasen necesario para una correcta defensa de la misma.', 'valor' => false, 'pregunta_id' => 66],
            ['texto' => 'Las unidades dispondrán de zonas de seguridad exterior.', 'valor' => false, 'pregunta_id' => 66],
            ['texto' => 'Las unidades, para su seguridad integra, deberían encontrarse doblemente aisladas.', 'valor' => false, 'pregunta_id' => 66],

            ['texto' => 'Son necesarias para conseguir su conveniente integración.', 'valor' => false, 'pregunta_id' => 67],
            ['texto' => 'Sirven para garantizar el empleo eficaz de los medios disponibles.', 'valor' => false, 'pregunta_id' => 67],
            ['texto' => 'Las unidades podrán disponer o no de zonas de seguridad exterior.', 'valor' => false, 'pregunta_id' => 67],
            ['texto' => 'Las unidades no podrán disponer de zonas de seguridad exterior.', 'valor' => false, 'pregunta_id' => 67],

            ['texto' => 'Las aéreas se clasificaran de acuerdo a la capacidad albergativa de la misma.', 'valor' => false, 'pregunta_id' => 68],
            ['texto' => 'Los edificios se clasificaran con el nivel de seguridad requerido.', 'valor' => false, 'pregunta_id' => 68],
            ['texto' => 'Los comportamientos de las unidades se clasificaran de acuerdo a la equivalencia estructural de clasificación de nivel de la unidad superior.', 'valor' => false, 'pregunta_id' => 68],
            ['texto' => 'Los edificios se clasificaran con un mínimo de seguridad.', 'valor' => false, 'pregunta_id' => 68],

            ['texto' => 'Las áreas, edificios, dependencias y compartimentos de las unidades se clasificaran con un único nivel de seguridad.', 'valor' => false, 'pregunta_id' => 69],
            ['texto' => 'Se establecerán las correspondientes medidas de colocación del material en el interior de las bases.', 'valor' => false, 'pregunta_id' => 69],
            ['texto' => 'Se establecerá las correspondientes medidas de protección y control de accesos.', 'valor' => false, 'pregunta_id' => 69],

            ['texto' => 'El jefe de la unidad será el responsable de actuar el plan de seguridad de la unidad y de su aprobación.', 'valor' => false, 'pregunta_id' => 70],
            ['texto' => 'El jefe de la unidad designara un jefe de seguridad.', 'valor' => false, 'pregunta_id' => 70],
            ['texto' => 'Cuando en una base se alojen varias unidades se redactara un plan de seguridad para cada una de las unidades alojadas.', 'valor' => false, 'pregunta_id' => 70],
            ['texto' => 'Cuando en una base se alojen varias unidades se redactara un solo plan de seguridad para casi todas las unidades alojadas.', 'valor' => false, 'pregunta_id' => 70],

            ['texto' => 'en una base se alojen varias unidades…', 'valor' => false, 'pregunta_id' => 71],
            ['texto' => 'Se redactara un plan de seguridad conjunto y uno individual por cada unidad.', 'valor' => false, 'pregunta_id' => 71],
            ['texto' => 'Se redactara un plan de seguridad para cada una de las unidades alojadas.', 'valor' => false, 'pregunta_id' => 71],
            ['texto' => 'Se redactara un plan de seguridad conjunto.', 'valor' => false, 'pregunta_id' => 71],

            ['texto' => 'El jefe de segurida será el responsable de actualizar el plan de seguridad.', 'valor' => false, 'pregunta_id' => 72],
            ['texto' => 'El plan de seguridad será aprobado por el jefe de la unidad.', 'valor' => false, 'pregunta_id' => 72],
            ['texto' => 'El jefe de la unidad designara al jefe de seguridad.', 'valor' => false, 'pregunta_id' => 72],

            ['texto' => '…Su autoprotección y la protección de aquello que le competa dentro del desempeño de sus funciones.', 'valor' => false, 'pregunta_id' => 73],
            ['texto' => '…La protección y la seguridad en el desarrollo de sus competencias profesionales.', 'valor' => false, 'pregunta_id' => 73],
            ['texto' => '…Su actuación en el ámbito de la seguridad.', 'valor' => false, 'pregunta_id' => 73],
            ['texto' => '…La seguridad en el desarrollo de sus competencias.', 'valor' => false, 'pregunta_id' => 73],

            ['texto' => 'Se formaran a los responsables de seguridad para que puedan desempeñar sus funciones.', 'valor' => false, 'pregunta_id' => 74],
            ['texto' => 'Los miembros de las FAS recibirán formación y preparación con el fin de capacitarles para su actuación en el ámbito de la seguridad.', 'valor' => false, 'pregunta_id' => 74],
            ['texto' => 'Los miembros de las FAS que desempeñen funciones de seguridad, recibirán', 'valor' => false, 'pregunta_id' => 74],
            ['texto' => 'la preparación adecuada para el desarrollo de sus funciones.', 'valor' => false, 'pregunta_id' => 74],

            ['texto' => 'Reservado.', 'valor' => false, 'pregunta_id' => 75],
            ['texto' => 'Confidencial.', 'valor' => false, 'pregunta_id' => 75],
            ['texto' => 'Difusión limitada.', 'valor' => false, 'pregunta_id' => 75],

            ['texto' => 'Este documento incluye la descripción de los diferentes sistemas de seguridad, las medidas a tomar en cada situación y la forma de implantarlas.', 'valor' => false, 'pregunta_id' => 76],
            ['texto' => 'Regula los medios personales y materiales a emplear.', 'valor' => false, 'pregunta_id' => 76],
            ['texto' => 'El Ministerio de Defensa, en el ámbito de su competencia establecerá los criterios y directrices generales para la elaboración de los planes de seguridad.', 'valor' => false, 'pregunta_id' => 76],
            ['texto' => 'Regula los medios personales a emplear.', 'valor' => false, 'pregunta_id' => 76],

            ['texto' => 'En el caso de necesitar incluir la utilización de medios personales o materiales', 'valor' => false, 'pregunta_id' => 77],
            ['texto' => 'de la seguridad privada, se deberá crear otro plan de seguridad dependiente del original.', 'valor' => false, 'pregunta_id' => 77],
            ['texto' => 'Se debe incluir únicamente, para su control, horario y cometidos del personal de la seguridad privada.', 'valor' => false, 'pregunta_id' => 77],
            ['texto' => 'El plan de seguridad podrá incluir la utilización de medios materiales.', 'valor' => false, 'pregunta_id' => 77],

            ['texto' => 'Constituye una medida que instiga a potenciales intrusos.', 'valor' => false, 'pregunta_id' => 78],
            ['texto' => 'Se complementaran con medios de carácter técnico, de acuerdo con el desarrollo tecnológico.', 'valor' => false, 'pregunta_id' => 78],
            ['texto' => 'Cuando exista necesidades especificas, se podrán constituir un reten de seguridad.', 'valor' => false, 'pregunta_id' => 78],

            ['texto' => 'Son cometidos de miembros de las FAS, con presencia y duración ilimitada.', 'valor' => false, 'pregunta_id' => 79],
            ['texto' => 'También son guardias de seguridad las que realiza una unidad cuando se le ordena esta prestación en determinadas instalaciones ajenas.', 'valor' => false, 'pregunta_id' => 79],
            ['texto' => 'Las normas generales sobre la organización y nombramiento se establecerá de acuerdo a las normas de régimen jurídico, aprobadas por orden del Ministerio de Defensa', 'valor' => false, 'pregunta_id' => 79],

            ['texto' => 'Los componentes de la guardia de seguridad prestaran su servicio como policía militar, por lo que no podrán llevar ningún tipo de acreditación durante la misma.', 'valor' => false, 'pregunta_id' => 80],
            ['texto' => 'La guardia de honor se considera de seguridad.', 'valor' => false, 'pregunta_id' => 80],
            ['texto' => 'Durante las guardias de honor se debe portar sobre el uniforme una', 'valor' => false, 'pregunta_id' => 80],
            ['texto' => 'identificación visual que los acredite como policía militar.', 'valor' => false, 'pregunta_id' => 80],

            ['texto' => 'La determinan el comandante de la guardia.', 'valor' => false, 'pregunta_id' => 81],
            ['texto' => 'Lo determina el plan de seguridad.', 'valor' => false, 'pregunta_id' => 81],
            ['texto' => 'Será determinada po la situación a criterio del jefe de seguridad.', 'valor' => false, 'pregunta_id' => 81],
            ['texto' => 'Lo determina el comandante de la guardia de seguridad.', 'valor' => false, 'pregunta_id' => 81],

            ['texto' => 'Puede ser un soldado que ejerza esa función.', 'valor' => false, 'pregunta_id' => 82],
            ['texto' => 'Puede ser un Cabo 1º que ejerza esa función.', 'valor' => false, 'pregunta_id' => 82],
            ['texto' => 'Será un Cabo de las unidades alojadas.', 'valor' => false, 'pregunta_id' => 82],
            ['texto' => 'Puede ser un cabo de cualquier que no se aloje en la unidad.', 'valor' => false, 'pregunta_id' => 82],


            ['texto' => 'Se deberá afrontar de forma rotativa en situación de actividad, alerta o descanso, con una duración de 2 horas cara una de ellas.', 'valor' => false, 'pregunta_id' => 83],
            ['texto' => 'Durante la situación de actividad actuaran como centinelas, componentes de patrullas o vigilantes.', 'valor' => false, 'pregunta_id' => 83],
            ['texto' => 'Durante la situación de alerta, se podrán encontrar en prevengan realizando patrullas o puntos de control.', 'valor' => false, 'pregunta_id' => 83],
            ['texto' => 'Durante la situación de actividad actuaran como centinelas, los imaginarias de esta.', 'valor' => false, 'pregunta_id' => 83],

            ['texto' => 'El jefe de seguridad.', 'valor' => false, 'pregunta_id' => 84],
            ['texto' => 'El que auxilia al jefe de la guardia.', 'valor' => false, 'pregunta_id' => 84],
            ['texto' => 'El cabo de la guardia.', 'valor' => false, 'pregunta_id' => 84],
            ['texto' => 'B y C son correctas.', 'valor' => false, 'pregunta_id' => 84],

            ['texto' => 'Cuando resulte amenazada la seguridad de su puesto, podrá hacer uso de su arma con intención de hacer daño.', 'valor' => false, 'pregunta_id' => 85],
            ['texto' => 'El centinela solo podrá abandonar su puesto cuando resulte amenazada su persona.', 'valor' => false, 'pregunta_id' => 85],
            ['texto' => 'El centinela dedicara toda su atención a la consigna encomendada, sin hacer', 'valor' => false, 'pregunta_id' => 85],
            ['texto' => 'nada que le distraiga de sus cometidos.', 'valor' => false, 'pregunta_id' => 85],

            ['texto' => 'Los puestos de centinela serán fijos.', 'valor' => false, 'pregunta_id' => 86],
            ['texto' => 'Siempre serán en grupo.', 'valor' => false, 'pregunta_id' => 86],
            ['texto' => 'Se establecerán en lugares próximos al puesto de control.', 'valor' => false, 'pregunta_id' => 86],
            ['texto' => 'Pueden ser individuales o en grupo.', 'valor' => false, 'pregunta_id' => 86],

            ['texto' => 'Son independientes de la guardia.', 'valor' => false, 'pregunta_id' => 87],
            ['texto' => 'Su composición y actuación se ajustaran a las consignas recibidas no permitiendo iniciativa en su ejecución.', 'valor' => false, 'pregunta_id' => 87],
            ['texto' => 'Son fracciones de la guardia.', 'valor' => false, 'pregunta_id' => 87],
            ['texto' => 'No pertenecen a la guardia de seguridad.', 'valor' => false, 'pregunta_id' => 87],

            ['texto' => 'Pueden ser fijos o móviles.', 'valor' => false, 'pregunta_id' => 88],
            ['texto' => 'A diferencia del centinela, si pueden abandonar su puesto.', 'valor' => false, 'pregunta_id' => 88],
            ['texto' => 'Pueden llevar arma o no.', 'valor' => false, 'pregunta_id' => 88],
            ['texto' => 'A y C son correctas.', 'valor' => false, 'pregunta_id' => 88],

            ['texto' => 'No deben ser identificados como tal.', 'valor' => false, 'pregunta_id' => 89],
            ['texto' => 'Los miembros de las FAS pueden prestar los servicios temporales como PM para cometidos especiales.', 'valor' => false, 'pregunta_id' => 89],
            ['texto' => 'Las unidades de PM, son aquellas que aun sin estar dotadas de armamento, están organizadas, instruidas y capacitadas como tal.', 'valor' => false, 'pregunta_id' => 89],
            ['texto' => 'Las unidades de PM, son aquellas que dotadas de armamento, están organizadas, instruidas y capacitadas como tal.', 'valor' => false, 'pregunta_id' => 89],

            ['texto' => 'Velar por el orden y la uniformidad del personal militar incluso fuera de los recintos militares cuando asi se autorice.', 'valor' => false, 'pregunta_id' => 90],
            ['texto' => 'Custodias presos.', 'valor' => false, 'pregunta_id' => 90],
            ['texto' => 'No pueden desempeñar sus cometidos en el ámbito de operaciones en el exterior.', 'valor' => false, 'pregunta_id' => 90],
            ['texto' => 'Velar por el orden y la uniformidad del personal militar, siempre y solo en el interior de los recintos militares.', 'valor' => false, 'pregunta_id' => 90],

            ['texto' => 'Puede apoyarse entre la policía militar, naval y aérea, pero no con fuerzas y cuerpos de seguridad.', 'valor' => false, 'pregunta_id' => 91],
            ['texto' => 'Pueden apoyarse con las fuerzas y cuerpos de seguridad pero no entre ellas.', 'valor' => false, 'pregunta_id' => 91],
            ['texto' => 'Pueden apoyarse entre ellas y con las fuerzas y cuerpos de seguridad, sin petición o requerimiento por parte de sus ministerios ni de las unidades.', 'valor' => false, 'pregunta_id' => 91],
            ['texto' => 'Pueden apoyarse entre ellas y con las fuerzas y cuerpos de seguridad, a petición de estas.', 'valor' => false, 'pregunta_id' => 91],

            ['texto' => 'Nunca.', 'valor' => false, 'pregunta_id' => 92],
            ['texto' => 'Estando de servicio y en ausencia de las fuerzas y cuerpos de seguridad.', 'valor' => false, 'pregunta_id' => 92],
            ['texto' => 'Siempre en ausencia de las fuerzas y cuerpos de seguridad.', 'valor' => false, 'pregunta_id' => 92],
            ['texto' => 'Nunca darán cuenta de su actuación a sus mandos superiores.', 'valor' => false, 'pregunta_id' => 92],

            ['texto' => 'Su realización puede ser compatible con otras guardias, dependiendo de sus características y naturaleza.', 'valor' => false, 'pregunta_id' => 93],
            ['texto' => 'Las guardias de honor, además de regirse por lo establecido para las guardias de seguridad, lo harán también por sus normas especificas.', 'valor' => false, 'pregunta_id' => 93],
            ['texto' => 'Una unidad que realiza una guardia de seguridad en una instalación ajena se denomina destacamento de seguridad.', 'valor' => false, 'pregunta_id' => 93],

            ['texto' => 'El plan de seguridad puede incluir seguridad privada.', 'valor' => false, 'pregunta_id' => 94],
            ['texto' => 'No llevara acreditación visual que les acredite como guardia de seguridad.', 'valor' => false, 'pregunta_id' => 94],
            ['texto' => 'Deben estar apoyadas por un reten y medidas y medios de carácter tecnico.', 'valor' => false, 'pregunta_id' => 94],

            ['texto' => 'Se designara un único Cabo.', 'valor' => false, 'pregunta_id' => 95],
            ['texto' => 'Puede designarse a un soldado.', 'valor' => false, 'pregunta_id' => 95],
            ['texto' => 'Dependerán del jefe de la unidad de seguridad.', 'valor' => false, 'pregunta_id' => 95],

            ['texto' => 'Se refiere al representante de servicio que ejerce dicha función.', 'valor' => false, 'pregunta_id' => 96],
            ['texto' => 'Se refiere al ejercicio de la autoridad.', 'valor' => false, 'pregunta_id' => 96],
            ['texto' => 'Se refiere al personal que ocupa ese cargo responsabilidad sindical.', 'valor' => false, 'pregunta_id' => 96],
            ['texto' => 'Se refiere al ejercicio del capitán jefe de la compañía.', 'valor' => false, 'pregunta_id' => 96],


            ['texto' => 'Es el conjunto de leyes que regulan la vida de las unidades.', 'valor' => false, 'pregunta_id' => 97],
            ['texto' => 'Es el conjunto de normas y procedimientos que regulan las normas de comportamiento en el desplazamiento de las unidades.', 'valor' => false, 'pregunta_id' => 97],
            ['texto' => 'Es el conjunto de normas y procedimientos que regulan las actividades de una unidad.', 'valor' => false, 'pregunta_id' => 97],
            ['texto' => 'Es el conjunto de normas y procedimientos que regulan la vida de las unidades.', 'valor' => false, 'pregunta_id' => 97],

            ['texto' => 'Son aquellos componentes de la estructura orgánica del E.T. que desarrollan una función técnico-facultativa.', 'valor' => false, 'pregunta_id' => 98],
            ['texto' => 'Son aquellos componentes de la estructura orgánica del E.T. que llevan a cabo principalmente actividades de información.', 'valor' => false, 'pregunta_id' => 98],
            ['texto' => 'Son aquellos componentes de la estructura orgánica del Ministerio de Defensa que posibilita la generación de organizaciones operativas.', 'valor' => false, 'pregunta_id' => 98],
            ['texto' => 'Son aquellos componentes de la estructura orgánica del E.T. que posibilita la generación de organizaciones operativas.', 'valor' => false, 'pregunta_id' => 98],


            ['texto' => 'Con carácter titular o accidental.', 'valor' => false, 'pregunta_id' => 99],
            ['texto' => 'Con carácter titular, accidental o interino.', 'valor' => false, 'pregunta_id' => 99],
            ['texto' => 'Con carácter titular, accidental, interino o de suplencia.', 'valor' => false, 'pregunta_id' => 99],
            ['texto' => 'Con carácter titular o interino.', 'valor' => false, 'pregunta_id' => 99],

            ['texto' => 'Jerarquizada, disciplinada y cohesionada.', 'valor' => false, 'pregunta_id' => 100],
            ['texto' => 'Jerarquizada, disciplinada y legislativa.', 'valor' => false, 'pregunta_id' => 100],
            ['texto' => 'Jerarquizada, legislativa y cohesionada.', 'valor' => false, 'pregunta_id' => 100],
            ['texto' => 'Jerarquizada, disciplinada y legislativa.', 'valor' => false, 'pregunta_id' => 100],

            ['texto' => 'La sucesión de mando.', 'valor' => false, 'pregunta_id' => 101],
            ['texto' => 'La acción de mando.', 'valor' => false, 'pregunta_id' => 101],
            ['texto' => 'La continuidad del mando.', 'valor' => false, 'pregunta_id' => 101],

            ['texto' => 'Cuartel general.', 'valor' => false, 'pregunta_id' => 102],
            ['texto' => 'Mando de canarias.', 'valor' => false, 'pregunta_id' => 102],
            ['texto' => 'MADOC.', 'valor' => false, 'pregunta_id' => 102],
            ['texto' => 'Brigada castillejos.', 'valor' => false, 'pregunta_id' => 102],

            ['texto' => 'Las unidades pueden o no, tener definida su plantilla.', 'valor' => false, 'pregunta_id' => 103],
            ['texto' => 'Las que posibilitan la generación de organización operativa se denominan unidades.', 'valor' => false, 'pregunta_id' => 103],
            ['texto' => 'Los que desarrollan un función técnico-facultativa son los organismos.', 'valor' => false, 'pregunta_id' => 103],
            ['texto' => 'Las que posibilitan la generación de organización operativa se denominan centros o organismos.', 'valor' => false, 'pregunta_id' => 103],

            ['texto' => 'La relación y actualización corresponderá al jefe de seguridad.', 'valor' => false, 'pregunta_id' => 104],
            ['texto' => 'Las visitas de inspección comprobaran que está actualizado.', 'valor' => false, 'pregunta_id' => 104],
            ['texto' => 'Los centros y organismos no dispondrán del correspondiente libro.', 'valor' => false, 'pregunta_id' => 104],
            ['texto' => 'Las visitas de inspección de vez en cuando comprobaran que está actualizado.', 'valor' => false, 'pregunta_id' => 104],

            ['texto' => 'En un lugar inapreciable ondeara la bandera nacional.', 'valor' => false, 'pregunta_id' => 105],
            ['texto' => 'Se denomina Establecimiento al recinto militar donde se alojan, en', 'valor' => false, 'pregunta_id' => 105],
            ['texto' => 'general con carácter permanente, una o varias unidades.', 'valor' => false, 'pregunta_id' => 105],
            ['texto' => 'Se denomina Base a la propiedad o conjunto de propiedades adscritas al Ejército de Tierra, no necesariamente con continuidad de servicios para su sostenimiento.', 'valor' => false, 'pregunta_id' => 105],

            ['texto' => 'El E.T. es una organización jerarquizada, disciplinada y cohesionada.', 'valor' => false, 'pregunta_id' => 106],
            ['texto' => 'Se ejerce la autoridad mediante la coacción del mando.', 'valor' => false, 'pregunta_id' => 106],
            ['texto' => 'La autoridad tiene las implicaciones contempladas en el libro de', 'valor' => false, 'pregunta_id' => 106],
            ['texto' => 'organización.', 'valor' => false, 'pregunta_id' => 106],

            ['texto' => 'Se ejercerá el mando con carácter interino cuando se asuma el mismo por ausencia del titular o accidental.', 'valor' => false, 'pregunta_id' => 107],
            ['texto' => 'El que ejerce el mando con carácter interino tiene las mismas atribuciones y responsabilidades que el que lo ejerce con carácter titular.', 'valor' => false, 'pregunta_id' => 107],
            ['texto' => 'Se ejercerá con carácter titular cuando se asuma con carácter titular por cese o fallecimiento.', 'valor' => false, 'pregunta_id' => 107],

            ['texto' => 'Solo se anotara en la hoja de servicios del interesado la sucesión con carácter interino.', 'valor' => false, 'pregunta_id' => 108],
            ['texto' => 'Cuando no exista personal con la capacidad profesional específica requerida, se podrá ser nombrado personal en la reserva.', 'valor' => false, 'pregunta_id' => 108],
            ['texto' => 'El Libro de Organización y el LNRI deberá incluir los criterios de sucesión de mando de la unidad o instalación, respectivamente.', 'valor' => false, 'pregunta_id' => 108],

            ['texto' => 'Se rigen por el libro de organización.', 'valor' => false, 'pregunta_id' => 109],
            ['texto' => 'En unidades alojadas en una misma instalación, se regula de forma unitaria.', 'valor' => false, 'pregunta_id' => 109],
            ['texto' => 'Se regula de forma múltiple entre las unidades alojadas en una misma instalación.', 'valor' => false, 'pregunta_id' => 109],
            ['texto' => 'En unidades alojadas en una o varias instalaciones, se regula de forma unitaria.', 'valor' => false, 'pregunta_id' => 109],

            ['texto' => 'En las visitas de inspección, se verificara la actualización.', 'valor' => false, 'pregunta_id' => 110],
            ['texto' => 'La actualización del mismo le corresponde al jefe de seguridad.', 'valor' => false, 'pregunta_id' => 110],
            ['texto' => 'El LNRI no establece las normas que se refieren al régimen de vida.', 'valor' => false, 'pregunta_id' => 110],
            ['texto' => 'En las visitas de inspección, se procederá a actualizar con nuevas medisas de seguridad.', 'valor' => false, 'pregunta_id' => 110],

            ['texto' => 'Estos actos estarán presididos por los principios de seguridad, altanería y eficacia.', 'valor' => false, 'pregunta_id' => 111],
            ['texto' => 'Para los actos que se organicen en el ámbito de las propias unidades,', 'valor' => false, 'pregunta_id' => 111],
            ['texto' => 'no se emitirán las correspondientes órdenes.', 'valor' => false, 'pregunta_id' => 111],
            ['texto' => 'En maniobras los actos de régimen interior se ajustaran a la situación exigida.', 'valor' => false, 'pregunta_id' => 111],


            ['texto' => 'La unidad de servicios llevara a cabo la gestión y el mantenimiento de los locales.', 'valor' => false, 'pregunta_id' => 112],
            ['texto' => 'Los servicios pueden ser prestados por personal civil de una empresa externa que este contratada.', 'valor' => false, 'pregunta_id' => 112],
            ['texto' => 'Cada instalación contara con una unidad de servicio de entidad y organización adecuada.', 'valor' => false, 'pregunta_id' => 112],
            ['texto' => 'Cada instalación contara con varias unidades de servicio de entidad y organización adecuada.', 'valor' => false, 'pregunta_id' => 112],


            ['texto' => 'Al frente de cada servicio habrá un oficial.', 'valor' => false, 'pregunta_id' => 113],
            ['texto' => 'El LNRI establecerá las condiciones en que las unidades alojadas ueden apoyar a la unidad de servicios.', 'valor' => false, 'pregunta_id' => 113],
            ['texto' => 'Todos los servicios de la instalación están encuadrados en la unidad de servicios.', 'valor' => false, 'pregunta_id' => 113],
            ['texto' => 'El LNRI siempre establecerá las condiciones en que las unidades alojadas pueden apoyar a la unidad de servicios.', 'valor' => false, 'pregunta_id' => 113],

            ['texto' => 'Para apoyar a las personas, con los de seguridad, sistema de telecomunicaciones e información.', 'valor' => false, 'pregunta_id' => 114],
            ['texto' => 'Para apoyar a las infraestructuras, con los de explotación y mantenimiento de infraestructuras.', 'valor' => false, 'pregunta_id' => 114],
            ['texto' => 'Para apoyar a las unidades, con los de alimentación, alojamiento, sanidad, asistencia religiosa.', 'valor' => false, 'pregunta_id' => 114],

            ['texto' => 'La prestación de una guardia podrá exigir dedicación exclusiva o ser compatible, total o parcialmente con las obligaciones del destino.', 'valor' => false, 'pregunta_id' => 115],
            ['texto' => 'Se autoriza un periodo de descanso superiora una jornada laboral a la finalización de aquellas guardias que exijan presencia ininterrumpida en su unidad de 24horas.', 'valor' => false, 'pregunta_id' => 115],
            ['texto' => 'Tiene la condición de guardia de seguridad las comisiones y otros servicios similares prestados por rotación y periodos de duración limitada.', 'valor' => false, 'pregunta_id' => 115],

            ['texto' => 'Por su naturaleza, pueden ser guardias aeronáuticas.', 'valor' => false, 'pregunta_id' => 116],
            ['texto' => 'Las guardias de honor se consideran de seguridad.', 'valor' => false, 'pregunta_id' => 116],
            ['texto' => 'Son guardias de orden las que garantizan la continuidad de la acción del mando dentro del horario habitual de trabajo.', 'valor' => false, 'pregunta_id' => 116],
            ['texto' => 'Tienen carácter ordinario las guardias que se establecen habitualmente y extraordinario aquellas que satisfacen, ocasionalmente, alguna necesidad del servicio específica.', 'valor' => false, 'pregunta_id' => 116],
            
            ['texto' => 'Estas guardias se regirán por esta O.M. y por el libro de organización.', 'valor' => false, 'pregunta_id' => 117],
            ['texto' => 'siempre participar en la ejecución de los planes relacionados con la alerta y concentración de las unidades en las que se presta esta guardia.', 'valor' => false, 'pregunta_id' => 117],
            ['texto' => 'Sus cometidos generales son aquellos que le permiten dar continuidad a la acción del mando y el mantenimiento de la paz.', 'valor' => false, 'pregunta_id' => 117],
            ['texto' => 'Podrán participar en la ejecución de los planes relacionados con la alerta y concentración de las unidades en las que se presta esta guardia.', 'valor' => false, 'pregunta_id' => 117],

            ['texto' => 'Un capitán de cuartel por unidad tipo regimiento o agrupación, o por batallón o grupo no encuadrados en aquellos.', 'valor' => false, 'pregunta_id' => 118],
            ['texto' => 'Uno o, en su caso, varios suboficial de cuartel, según necesidades, por unidad tipo batallón o grupo.', 'valor' => false, 'pregunta_id' => 118],
            ['texto' => 'Tropa de cuartel, según necesidades de la unidad en la que se preste esta guardia.', 'valor' => false, 'pregunta_id' => 118],
            ['texto' => 'B y C son correctas.', 'valor' => false, 'pregunta_id' => 118],

            ['texto' => 'El personal de Tropa de Cuartel dependerá del oficial de cuartel en todo lo relativo a su guardia.', 'valor' => false, 'pregunta_id' => 119],
            ['texto' => 'Esta guardia puede durar hasta 96 horas.', 'valor' => false, 'pregunta_id' => 119],
            ['texto' => 'Como norma general, los componentes de esta guardia no pernoctaran en la instalación.', 'valor' => false, 'pregunta_id' => 119],
            ['texto' => 'Esta guardia puede durar hasta 86 horas.', 'valor' => false, 'pregunta_id' => 119],

            ['texto' => 'El cabo de cuartel cuidara que se haga buen uso de los locales o dependencias asignadas, vigilando que se cumplan las normas sobre permanencia, utilización y limpieza.', 'valor' => false, 'pregunta_id' => 120],
            ['texto' => 'El imaginaria dependerá del cuartelero.', 'valor' => false, 'pregunta_id' => 120],
            ['texto' => 'El cuartelero dependerá del cabo de cuartel.', 'valor' => false, 'pregunta_id' => 120],
            ['texto' => 'El imaginaria dependerá del capitán de cuartel.', 'valor' => false, 'pregunta_id' => 120],

            ['texto' => 'Fuera del horario habitual de trabajo dependerá del cabo de cuartel.', 'valor' => false, 'pregunta_id' => 121],
            ['texto' => 'En el libro de organización figurara el personal que presta cada guardia sus cometidos.', 'valor' => false, 'pregunta_id' => 121],
            ['texto' => 'Los operadores de las guardias CIS. Tiene consideración de Centinela.', 'valor' => false, 'pregunta_id' => 121],

            ['texto' => 'El nombramiento se basa en el principio de equidad.', 'valor' => false, 'pregunta_id' => 122],
            ['texto' => 'Cuando los oficiales y suboficiales no sean suficientes para una buena rotación, podrá designar a personal de empleos inferiores.', 'valor' => false, 'pregunta_id' => 122],
            ['texto' => 'Se respetarán rigurosamente los turnos y la duración de las guardias, que no podrá ser modificadas o alteradas.', 'valor' => false, 'pregunta_id' => 122],

            ['texto' => 'El nombramiento del personal de tropa será normalmente atribución del jefe de la unidad tipo compañía.', 'valor' => false, 'pregunta_id' => 123],
            ['texto' => 'El Libro de Organización establecerá el procedimiento por el cual se', 'valor' => false, 'pregunta_id' => 123],
            ['texto' => 'produzca y publique el nombramiento de las diferentes guardias.', 'valor' => false, 'pregunta_id' => 123],
            ['texto' => 'Quien nombre una guardia podrá permitir, con perjuicio del servicio, el intercambio de fechas para la prestación de la misma entre los integrados en el correspondiente turno.', 'valor' => false, 'pregunta_id' => 123],

            ['texto' => 'En caso de coincidencia prevalece antes la guardia aeronáutica que la de los servicios.', 'valor' => false, 'pregunta_id' => 124],
            ['texto' => 'En una guardia igual o inferior a 24hrs, cuando se haya recurrido al imaginaria, se dará por cumplida al que haya prestado al menos la mitad de la duración de la misma.', 'valor' => false, 'pregunta_id' => 124],
            ['texto' => 'Se podrán prestar más de 2 guardias seguidas siempre y cuando la duración de una de ellas sea inferior a 24hrs.', 'valor' => false, 'pregunta_id' => 124],
            ['texto' => 'Se podrán prestar más de 3 guardias seguidas siempre y cuando la duración de una de ellas sea inferior a 24hrs.', 'valor' => false, 'pregunta_id' => 124],

            ['texto' => 'Cuando exista alguna limitación legal o normativa, o no posean la aptitud psicofísica requerida.', 'valor' => false, 'pregunta_id' => 125],
            ['texto' => 'Los casos especificados por los jefes de unidad o instalación.', 'valor' => false, 'pregunta_id' => 125],
            ['texto' => 'Todos los militares realizaran las guardias que en su categoría y empleo pudieran corresponderle.', 'valor' => false, 'pregunta_id' => 125],
            ['texto' => 'Cuando exista alguna limitación legal o normativa, o no posean la actitud mental requerida.', 'valor' => false, 'pregunta_id' => 125],

            ['texto' => 'El nombramiento del personal de tropa será normalmente atribución del jefe de la unidad tipo compañía.', 'valor' => false, 'pregunta_id' => 126],
            ['texto' => 'El libro de organización establecerá el procedimiento por el cual se produzca y publique el nombramiento de las diferentes guardias.', 'valor' => false, 'pregunta_id' => 126],
            ['texto' => 'Quien nombre una guardia podrá permitir, con prejuicio al servicio, el intercambio de fechas para la prestación de la misma entre los integrados en el correspondiente turno.', 'valor' => false, 'pregunta_id' => 126],
            ['texto' => 'El nombramiento del personal de tropa será siempre del jefe del organismo tipo compañía.', 'valor' => false, 'pregunta_id' => 126],

            ['texto' => 'Tiene por objeto regular el funcionamiento de las unidades.', 'valor' => false, 'pregunta_id' => 127],
            ['texto' => 'Regula la aportación adicional de recursos humanos a las FAS', 'valor' => false, 'pregunta_id' => 127],
            ['texto' => 'Es de aplicación a todos aquellos militares que asumen la obligación de defender al rey y a la constitución.', 'valor' => false, 'pregunta_id' => 127],
            ['texto' => 'Es de aplicación a todos aquellos militares que asumen la obligación de defender al rey.', 'valor' => false, 'pregunta_id' => 127],

            ['texto' => 'Esta ley no se aplica a los alumnos a los centros de Formación porque', 'valor' => false, 'pregunta_id' => 128],
            ['texto' => 'aun no han adquirido la condición de militar.', 'valor' => false, 'pregunta_id' => 128],
            ['texto' => 'Esta ley reguila la orgánica de las unidades.', 'valor' => false, 'pregunta_id' => 128],
            ['texto' => 'Esta ley regula la aportación adicional de recursos humanos a las FAS.', 'valor' => false, 'pregunta_id' => 128],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 129],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 129],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 129],

            ['texto' => 'Los militares de tropa y marinería podrán accederé a la condición de militar de carrera en la forma que se especifica en la ley de la carrera EBS.', 'valor' => false, 'pregunta_id' => 130],
            ['texto' => 'Los extranjeros en situación de residencia legal podrán vincularse a las FAS únicamente como militares de tropa y marinería.', 'valor' => false, 'pregunta_id' => 130],
            ['texto' => 'Los militares de tropa y marinería podrán accederé a la condición de militar de carrera en la forma que se especifica en la ley de la carrera militar.', 'valor' => false, 'pregunta_id' => 130],


            ['texto' => 'Los españoles podrán vincularse como militares de carrera o como militares de tropa.', 'valor' => false, 'pregunta_id' => 131],
            ['texto' => 'Son militares de carrera los que adquieren su condición en la escala de suboficiales o la escala de oficiales.', 'valor' => false, 'pregunta_id' => 131],
            ['texto' => 'Los militares de complemento son oficiales que establecen su relación', 'valor' => false, 'pregunta_id' => 131],
            ['texto' => 'de servicios mediante compromisos de carácter temporal.', 'valor' => false, 'pregunta_id' => 131],

            ['texto' => 'Un cabo puede ser militar de carrera.', 'valor' => false, 'pregunta_id' => 132],
            ['texto' => 'Ls extranjeros en situación de residencial legal podrán vincularse a las', 'valor' => false, 'pregunta_id' => 132],
            ['texto' => 'FAS como militares de tropa y marinería y como militares de carrera.', 'valor' => false, 'pregunta_id' => 132],
            ['texto' => 'Los reservistas, aun cuando se incorpores a las FAS, no tendrán la consideración de militar.', 'valor' => false, 'pregunta_id' => 132],

            ['texto' => 'Compromiso inicial, renovable hasta completar un máximo de 5 años.', 'valor' => false, 'pregunta_id' => 133],
            ['texto' => 'A la condición de permanente se podrá acceder durante la vigencia del compromiso de larga duración.', 'valor' => false, 'pregunta_id' => 133],
            ['texto' => 'La relación de servicios profesionales con las FAS es una relación', 'valor' => false, 'pregunta_id' => 133],
            ['texto' => 'jurídico-militar de carácter especial.', 'valor' => false, 'pregunta_id' => 133],

            ['texto' => 'Todo militar tiene el derecho de prestar ante la banderea juramento o promesa de defender a España.', 'valor' => false, 'pregunta_id' => 134],
            ['texto' => 'El acto de juramento o promesa ante la bandera de España será público.', 'valor' => false, 'pregunta_id' => 134],
            ['texto' => 'El término”soldados” será el usado en la formula independiente de', 'valor' => false, 'pregunta_id' => 134],
            ['texto' => 'quien vaya a prestar juramento promesa.', 'valor' => false, 'pregunta_id' => 134],

            ['texto' => 'El compromiso inicial podrá renovarse por periodos de 2 o 3 años, ajustando en todo caso la última renovación hasta alcanzar un máximo de 6 años de servicio.', 'valor' => false, 'pregunta_id' => 135],
            ['texto' => 'Para las renovaciones de compromiso será potestativo haber sido evaluado previamente.', 'valor' => false, 'pregunta_id' => 135],
            ['texto' => 'Las condiciones, requisitos y procedimientos para las renovaciones de', 'valor' => false, 'pregunta_id' => 135],
            ['texto' => 'compromiso se establecerán por el JEME.', 'valor' => false, 'pregunta_id' => 135],

            ['texto' => 'Este compromiso lo podrán suscribir los que tengan más de 6 años de servicio.', 'valor' => false, 'pregunta_id' => 136],
            ['texto' => 'A los militares profesionales de tropa y marinería con este compromiso les corresponde el grupo C de clasificación de los funcionarios al servicio de las Administraciones públicas.', 'valor' => false, 'pregunta_id' => 136],
            ['texto' => 'A partir del inicio de este compromiso se devengaran trienios, computándose a estos efectos el tiempo de servicio desde la fecha del compromiso inicial.', 'valor' => false, 'pregunta_id' => 136],

            ['texto' => 'La prima de servicio prestados atribuida como consecuencia de la resolución del compromiso por insuficiencia de condiciones psicofísicas será compatible con la pensión vitalicia que por esta misma causa le pudiera corresponder.', 'valor' => false, 'pregunta_id' => 137],
            ['texto' => 'Este compromiso se puede finalizar a petición propia con un preaviso de seis meses.', 'valor' => false, 'pregunta_id' => 137],
            ['texto' => 'Los que finalicen este compromiso por accederé a la Guardia Civil y no lo completen, podrán reincorporarse.', 'valor' => false, 'pregunta_id' => 137],

            ['texto' => 'Por asignación de vacante.', 'valor' => false, 'pregunta_id' => 138],
            ['texto' => 'Por no superar la formación específica de la especialidad asignada.', 'valor' => false, 'pregunta_id' => 138],
            ['texto' => 'Por perdida de la aptitud psicofísica necesaria para desarrollar su', 'valor' => false, 'pregunta_id' => 138],
            ['texto' => 'especialidad.', 'valor' => false, 'pregunta_id' => 138],

            ['texto' => 'A los que lleven al menos cinco años de servicios se les facilitara la promoción interna.', 'valor' => false, 'pregunta_id' => 139],
            ['texto' => 'Se les reservara al menos 80% de las plazas convocadas.', 'valor' => false, 'pregunta_id' => 139],
            ['texto' => 'Se les facilitara la participación en los diferentes procesos de promoción a la enseñanza militar de formación para la incorporación a las escalas de oficiales, con la reserva de plazas que establezca el Ministerio de Defensa', 'valor' => false, 'pregunta_id' => 139],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 140],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 140],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 140],

            ['texto' => 'Todo militar tienen derecho de prestar ante la bandera juramento o promesa de defender a España.', 'valor' => false, 'pregunta_id' => 141],
            ['texto' => 'El acto de juramento ante la bandera de España será público.', 'valor' => false, 'pregunta_id' => 141],
            ['texto' => 'El término “soldados “será el usado en la formula independiente de quien vaya a prestar juramento o promesa.', 'valor' => false, 'pregunta_id' => 141],
            ['texto' => 'El acto de juramento ante la bandera de España será privado.', 'valor' => false, 'pregunta_id' => 141],


            ['texto' => 'Se adquiere automáticamente al cumplir los 45 años y tener 20 años de servicio.', 'valor' => false, 'pregunta_id' => 142],
            ['texto' => 'Si entro con más de 27 años puede ampliar su compromiso hasta los', 'valor' => false, 'pregunta_id' => 142],
            ['texto' => 'La condición de reservista de especial disponibilidad se mantendrá', 'valor' => false, 'pregunta_id' => 142],
            ['texto' => 'hasta cumplir los 65 años, no siendo posible su renuncia', 'valor' => false, 'pregunta_id' => 142],

            ['texto' => 'En situaciones de crisis, corresponde al Ministerio de Defensa, a propuesta del Consejo de Ministros, con carácter excepcional, la incorporación a las FAS de reservistas de especial disponibilidad.', 'valor' => false, 'pregunta_id' => 143],
            ['texto' => 'El Consejo de Ministros establecerá los medios y aplicara los procedimientos adecuados que permitan la incorporación de los reservistas de especial disponibilidad cuando sean activados.', 'valor' => false, 'pregunta_id' => 143],
            ['texto' => 'Cuando sea activado y se incorpore, recuperará la condición de militar, mantendrá el empleo y la especialidad y estará sujeto al régimen de los militares profesionales de tropa y marinería.', 'valor' => false, 'pregunta_id' => 143],

            ['texto' => 'El militar profesional ejerce funciones operativas, técnicas, logísticas y representativas.', 'valor' => false, 'pregunta_id' => 144],
            ['texto' => 'Por medio de acciones de gestión se ponen en práctica los planes establecidos actuando en cumplimiento de órdenes concretas o siguiendo procedimientos preestablecidos.', 'valor' => false, 'pregunta_id' => 144],
            ['texto' => 'La sustitución de la Fuerza de los ejércitos se aplica cuando la acción del mando alcanza su máxima y especial responsabilidad.', 'valor' => false, 'pregunta_id' => 144],
            ['texto' => 'La acción del mando alcanza su máxima y especial responsabilidad cuando se aplica la preparación y empleo de la Fuerza de los ejércitos.', 'valor' => false, 'pregunta_id' => 144],

            ['texto' => 'El militar profesional ejerce funciones operativas, técnicas, logísticas y representativas.', 'valor' => false, 'pregunta_id' => 145],
            ['texto' => 'Por medio de acciones de gestión se ponen en práctica los planes establecidos actuando en cumplimiento de órdenes concretas o siguiendo procedimientos preestablecidos.', 'valor' => false, 'pregunta_id' => 145],
            ['texto' => 'La sustitución de la Fuerza de los ejércitos se aplica cuando la acción del mando alcanza su máxima y especial responsabilidad.', 'valor' => false, 'pregunta_id' => 145],
            ['texto' => 'Alcanza su máxima y especial responsabilidad cuando se aplica la preparación y empleo de la Fuerza de los ejércitos.', 'valor' => false, 'pregunta_id' => 145],

            ['texto' => 'operativas, técnicas, logísticas, administrativas y docentes.', 'valor' => false, 'pregunta_id' => 146],
            ['texto' => 'operativas, técnicas, logísticas y administrativas.', 'valor' => false, 'pregunta_id' => 146],
            ['texto' => 'operativas, técnicas y logísticas.', 'valor' => false, 'pregunta_id' => 146],

            ['texto' => 'Se ejerce la definición de acciones y la determinación de los objetivos.', 'valor' => false, 'pregunta_id' => 147],
            ['texto' => 'Mediante acciones de gestión se aplican los medios puestos a disposición para alcanzar unos objetivos concretos de la forma más rentable y eficiente.', 'valor' => false, 'pregunta_id' => 147],
            ['texto' => 'Por medio de acciones administrativas se ponen en prácticas los planes establecidos actuando en cumplimiento de órdenes concretas o siguiendo procedimientos preestablecidos.', 'valor' => false, 'pregunta_id' => 147],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 148],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 148],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 148],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 149],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 149],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 149],

            ['texto' => 'El escalafón es el tiempo transcurrido en el primer empleo de una escala desde la fecha de su concesión.', 'valor' => false, 'pregunta_id' => 150],
            ['texto' => 'La precedencia de los militares estará determinada por la antigüedad, y a igualdad de esta, por escalafón.', 'valor' => false, 'pregunta_id' => 150],
            ['texto' => 'En esta ley se denomina jefe al que ejerce el mando o dirección de una unidad, centro u organismo (UCO).', 'valor' => false, 'pregunta_id' => 150],

            ['texto' => 'El empleo honorifico se puede conceder a tras el fallecimiento.', 'valor' => false, 'pregunta_id' => 151],
            ['texto' => 'Serán considerados a efectos de derechos pasivos.', 'valor' => false, 'pregunta_id' => 151],
            ['texto' => 'La incidencia para la concesión de empleos con carácter honorifico', 'valor' => false, 'pregunta_id' => 151],
            ['texto' => 'corresponderá al jefe de la unidad.', 'valor' => false, 'pregunta_id' => 151],

            ['texto' => 'La ceración, extinción o integración de cuerpo y escalas se efectuará por Orden Ministerial.', 'valor' => false, 'pregunta_id' => 152],
            ['texto' => 'Los cuerpos de carácter común son para dar respuesta a necesidades generales de las FAS.', 'valor' => false, 'pregunta_id' => 152],
            ['texto' => 'Dentro de cada cuerpo puede haber una o varias escalas de oficiales.', 'valor' => false, 'pregunta_id' => 152],

            ['texto' => 'Cuerpos específicos del E.T.', 'valor' => false, 'pregunta_id' => 153],
            ['texto' => 'Cuerpo Jurídico Militar del E.T.', 'valor' => false, 'pregunta_id' => 153],
            ['texto' => 'Cuerpo de Infantería de Marina del E.T.', 'valor' => false, 'pregunta_id' => 153],
            ['texto' => 'Cuerpo de Intendencia del E.T.', 'valor' => false, 'pregunta_id' => 153],
 
            ['texto' => 'Cuerpo músicas.', 'valor' => false, 'pregunta_id' => 154],
            ['texto' => 'Cuerpo militar de intervención.', 'valor' => false, 'pregunta_id' => 154],
            ['texto' => 'Cuerpo de Intendencia del E.T.', 'valor' => false, 'pregunta_id' => 154],

            ['texto' => 'A partir de determinados empleos los miembros de cada escala adaptaran o reorientaran su perfil profesional, adquiriendo una nueva especialidad.', 'valor' => false, 'pregunta_id' => 155],
            ['texto' => 'Las especialidades se adquirirán al acceder a la escala correspondiente y realizar la formación oportuna para la obtención de la especialidad.', 'valor' => false, 'pregunta_id' => 155],
            ['texto' => 'Podrán existir otras especialidades y aptitudes, que serán fijadas por el Ministerio de Defensa.', 'valor' => false, 'pregunta_id' => 155],

            ['texto' => 'Los cometidos de su cuerpo, las facultades de su escalay especialidad y su empleo.', 'valor' => false, 'pregunta_id' => 156],
            ['texto' => 'Los cometidos de su cuerpo, las aptitudes adquiridas con su especialidad y el nivel académico alcanzado.', 'valor' => false, 'pregunta_id' => 156],
            ['texto' => 'Las aptitudes adquiridas con su especialidad, el nivel académico alcanzado y su empleo.', 'valor' => false, 'pregunta_id' => 156],

            ['texto' => 'La enseñanza en las FAS comprende la enseñanza de perfeccionamiento.', 'valor' => false, 'pregunta_id' => 157],
            ['texto' => 'Comprende la capacidad terminal del militar en su ámbito profesional, su formación continuada y la permanente actualización de sus conocimientos.', 'valor' => false, 'pregunta_id' => 157],
            ['texto' => 'La formación está encaminada al correcto desempeño de sus cometidos y al adecuado ejercicio de sus funciones facultades.', 'valor' => false, 'pregunta_id' => 157],

            ['texto' => 'Con esta formación se encamina a los militares de tropa y marinería a que obtengan el título de técnico de formación profesional de grado medio.', 'valor' => false, 'pregunta_id' => 158],
            ['texto' => 'Tienen como finalidad atender las necesidades derivadas de la organización y preparación de las unidades y de su empleo en las operaciones.', 'valor' => false, 'pregunta_id' => 158],
            ['texto' => 'Tiene como finalidad preparar al militar para la obtención de su especialidad.', 'valor' => false, 'pregunta_id' => 158],

            ['texto' => 'Incluye títulos del sistema educativo general y específicos militares.', 'valor' => false, 'pregunta_id' => 159],
            ['texto' => 'Incluye los altos estudios de la defensa Nacional.', 'valor' => false, 'pregunta_id' => 159],
            ['texto' => 'Incluye las enseñanzas que permiten reorientar la carrera.', 'valor' => false, 'pregunta_id' => 159],

            ['texto' => 'Se reservaran plazas para los centro docentes militares de formación para el acceso a las escalas de oficiales a los militares de tropa y marinería de los empleos de cabo y cabo 1º.', 'valor' => false, 'pregunta_id' => 160],
            ['texto' => 'Para los militares que quieran cambiar de escala no se les valorara el empleo obtenido en su escala actual.', 'valor' => false, 'pregunta_id' => 160],
            ['texto' => 'Los procesos para el cambio de escala podrán ser con fases de enseñanza a distancia.', 'valor' => false, 'pregunta_id' => 160],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 161],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 161],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 161],

            ['texto' => 'El primer empleo militar de cada escala de oficiales o de suboficiales será conferido por el Ministerio de Defensa y refrendado por el Rey.', 'valor' => false, 'pregunta_id' => 162],
            ['texto' => 'La condición de militar de carrera se adquiere automáticamente al incorporarse al centro docente militar para el acceso a la condición de oficial.', 'valor' => false, 'pregunta_id' => 162],
            ['texto' => 'El personal de tropa y marinería también puede adquirir la condición de militar de carrera.', 'valor' => false, 'pregunta_id' => 162],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 163],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 163],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 163],

            ['texto' => 'Los ascensos por clasificación se efectuaran entre aquellos que lo soliciten en el orden obtenido en el correspondiente proceso selectivo.', 'valor' => false, 'pregunta_id' => 164],
            ['texto' => 'Debe potenciar el merito de sus miembros e incentivar su preparación académica.', 'valor' => false, 'pregunta_id' => 164],
            ['texto' => 'Los ascensos se producirán siempre que se reúnan las condiciones y con ocasión de vacante excepto, los ascenso por antigüedad.', 'valor' => false, 'pregunta_id' => 164],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 165],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 165],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 165],

            ['texto' => 'Para cualquier ascenso hay que ser evaluados.', 'valor' => false, 'pregunta_id' => 166],
            ['texto' => 'Para cualquier ascenso hay que superar un curso de actualización.', 'valor' => false, 'pregunta_id' => 166],
            ['texto' => 'Para cualquier ascenso hay que tener cumplidos en el anterior tiempo de servicios y de permanencia en determinados destinos.', 'valor' => false, 'pregunta_id' => 166],

            ['texto' => 'Los destinos de concurso de meritos son aquellos que se asignana teniendo en cuenta los meritos que posean en relación con los requisitos exigidos para el puesto.', 'valor' => false, 'pregunta_id' => 167],
            ['texto' => 'Los destinos de libre designación son aquellos que no precisan condiciones profesionales de idoneidad.', 'valor' => false, 'pregunta_id' => 167],
            ['texto' => 'Los destinos de provisión por antigüedad con los que se asignan por orden de escalafón entre todos los interesados son necesidad de ningún requisito previamente exigido.', 'valor' => false, 'pregunta_id' => 167],


            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 168],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 168],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 168],

            ['texto' => 'El tiempo permaneció en esta situación no será computable a efectos de tiempo de servicio, trienios y derechos pasivos.', 'valor' => false, 'pregunta_id' => 169],
            ['texto' => 'Sean elegidos como candidatos a elecciones para órganos representativos públicos en ejercicio del derecho de sufragio pasivo o resulten elegidos en las mismas.', 'valor' => false, 'pregunta_id' => 169],
            ['texto' => 'Sean autorizados por el Ministerio de Defensa para realizar una misión por periodo determinado superior a seis meses en organismos internacionales, Gobiernos o entidades Públicas extranjeras o en programas de cooperación internacional.', 'valor' => false, 'pregunta_id' => 169],

            ['texto' => 'En la situación de excedencia voluntaria por interés particular se podrá permanecer un máximo de 2 años.', 'valor' => false, 'pregunta_id' => 170],
            ['texto' => 'En la situación de excedencia por cuidados de familiares tendrá una duración máxima de 3 años.', 'valor' => false, 'pregunta_id' => 170],
            ['texto' => 'En la situación de excedencia por agrupación familiar se podrá permanecer un máximo de 3 años.', 'valor' => false, 'pregunta_id' => 170],

            ['texto' => 'Los alumnos podrán pasar a retiro por incapacidad permanente para toda profesión u oficio.', 'valor' => false, 'pregunta_id' => 171],
            ['texto' => 'Los militares de carrera pueden pasar a esta situación por jubilación voluntaria en la legislación de Clases Pasivas del Estado.', 'valor' => false, 'pregunta_id' => 171],
            ['texto' => 'Los militares profesionales pueden pasar a esta situación por inutilidad permanente para el servicio.', 'valor' => false, 'pregunta_id' => 171],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 172],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 172],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 172],

            ['texto' => 'El militar de carrera que quiera renunciar a su condición de militar sin tener cumplido los tiempos establecidos deberá resarcir económicamente al estado efectuar un preaviso de dos meses.', 'valor' => false, 'pregunta_id' => 173],
            ['texto' => 'No se podrá conceder la renuncia al militar de carrera que no tiene los tiempos cumplidos hasta que no se abone la cuantía que se determine como indemnización.', 'valor' => false, 'pregunta_id' => 173],
            ['texto' => 'Para fijar la cuantía de indemnización se tendrá en cuenta los tiempos de servicio y los cursos de especialización realizados.', 'valor' => false, 'pregunta_id' => 173],

            ['texto' => 'Durante los tres primeros años se puede resolver el compromiso por el ingreso como militar profesional.', 'valor' => false, 'pregunta_id' => 174],
            ['texto' => 'Durante los tres primeros años se puede resolver el compromiso a petición expresa del interesado por circunstancias extraordinarias.', 'valor' => false, 'pregunta_id' => 174],
            ['texto' => 'Durante los teres primeros años se puede resolver el compromiso por perdida de la nacionalidad española.', 'valor' => false, 'pregunta_id' => 174],


            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 175],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 175],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 175],


            ['texto' => 'Son faltas disciplinarias las acciones y omisiones, dolosas o imprudentes, previstas en esta Ley', 'valor' => false, 'pregunta_id' => 176],
            ['texto' => 'Las faltas disciplinarias pueden ser leves y graves.', 'valor' => false, 'pregunta_id' => 176],
            ['texto' => 'La comisión de falas disciplinarias dara lugar a la imposición de las sanciones establecidas en esta ley.', 'valor' => false, 'pregunta_id' => 176],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 177],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 177],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 177],

            ['texto' => 'Omitir por imprudencia la adopción de las medidas a su alcance para evitar o perseguir la infracción para sus subordinados de los deberes establecidos por el derecho internacional aplicable en los conflictos armados.', 'valor' => false, 'pregunta_id' => 178],
            ['texto' => 'El descuido en la instrucción o preparación personal cuando ocasione perjuicio al servicio.', 'valor' => false, 'pregunta_id' => 178],
            ['texto' => 'El incumplimiento de las normas sobre incompatibilidades cuando ello dé lugar a una situación de incompatibilidad.', 'valor' => false, 'pregunta_id' => 178],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 179],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 179],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 179],

            ['texto' => 'Tras 1 año.', 'valor' => false, 'pregunta_id' => 180],
            ['texto' => 'Tras 2 años.', 'valor' => false, 'pregunta_id' => 180],
            ['texto' => 'Tras 3 años.', 'valor' => false, 'pregunta_id' => 180],
            ['texto' => 'Tras 18 meses.', 'valor' => false, 'pregunta_id' => 180],

            ['texto' => 'Mínimo de un mes y máximo de un año.', 'valor' => false, 'pregunta_id' => 181],
            ['texto' => 'Mínimo de 1 mes y máximo de 2 años.', 'valor' => false, 'pregunta_id' => 181],
            ['texto' => 'Mínimo de 2 meses y un máximo de 2 años.', 'valor' => false, 'pregunta_id' => 181],

            ['texto' => 'De 5 a 15 años.', 'valor' => false, 'pregunta_id' => 182],
            ['texto' => 'De 10 a 20 años.', 'valor' => false, 'pregunta_id' => 182],
            ['texto' => 'De 15 a 25 años.', 'valor' => false, 'pregunta_id' => 182],
            ['texto' => 'De 3 a 5 años.', 'valor' => false, 'pregunta_id' => 182],

            ['texto' => 'Un medio.', 'valor' => false, 'pregunta_id' => 183],
            ['texto' => 'Un tercio.', 'valor' => false, 'pregunta_id' => 183],
            ['texto' => 'Un quinto.', 'valor' => false, 'pregunta_id' => 183],

            ['texto' => 'Sus superiores directos.', 'valor' => false, 'pregunta_id' => 184],
            ['texto' => 'Su jefe de Unidad.', 'valor' => false, 'pregunta_id' => 184],
            ['texto' => 'Cualquiera de empleo superior.', 'valor' => false, 'pregunta_id' => 184],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 185],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 185],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 185],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 186],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 186],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 186],

            ['texto' => 'De 3 meses a 3 años de prisión.', 'valor' => false, 'pregunta_id' => 187],
            ['texto' => 'De 6 meses a 3 años de prisión.', 'valor' => false, 'pregunta_id' => 187],
            ['texto' => 'De 5 meses a 5 años de prisión.', 'valor' => false, 'pregunta_id' => 187],
            ['texto' => 'De 3 meses a 5 años de prisión.', 'valor' => false, 'pregunta_id' => 187],

            ['texto' => 'De 3 meses a 3 años de prisión.', 'valor' => false, 'pregunta_id' => 188],
            ['texto' => 'De 6 meses a 3 años de prisión.', 'valor' => false, 'pregunta_id' => 188],
            ['texto' => 'De 6 meses a 5 años de prisión.', 'valor' => false, 'pregunta_id' => 188],

            ['texto' => 'De 6 meses a 4 años de prisión.', 'valor' => false, 'pregunta_id' => 189],
            ['texto' => 'De 6 meses a 3 años de prisión.', 'valor' => false, 'pregunta_id' => 189],
            ['texto' => 'De 6 meses a 5 años de prisión.', 'valor' => false, 'pregunta_id' => 189],
            ['texto' => 'De 6 meses a 1 años de prisión.', 'valor' => false, 'pregunta_id' => 189],

            ['texto' => 'De 6 meses a 1 año.', 'valor' => false, 'pregunta_id' => 190],
            ['texto' => 'De 6 meses a 2 años.', 'valor' => false, 'pregunta_id' => 190],
            ['texto' => 'De 6 meses a 3 años.', 'valor' => false, 'pregunta_id' => 190],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 191],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 191],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 191],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 192],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 192],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 192],

            ['texto' => 'De 3 años y un día a 5 años de prisión.', 'valor' => false, 'pregunta_id' => 193],
            ['texto' => 'De 5 años y un día a 10 años de prisión.', 'valor' => false, 'pregunta_id' => 193],
            ['texto' => 'De 3 años y un día a 10 años de prisión.', 'valor' => false, 'pregunta_id' => 193],

            ['texto' => 'De 2 a 8 años de prisión.', 'valor' => false, 'pregunta_id' => 194],
            ['texto' => 'De 5 a 15 años de prisión.', 'valor' => false, 'pregunta_id' => 194],
            ['texto' => 'De 4 meses a 4 años de prisión.', 'valor' => false, 'pregunta_id' => 194],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 195],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 195],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 195],

            ['texto' => 'IGE.', 'valor' => false, 'pregunta_id' => 196],
            ['texto' => 'MALOG.', 'valor' => false, 'pregunta_id' => 196],
            ['texto' => 'Dirección de asuntos económicos.', 'valor' => false, 'pregunta_id' => 196],
            ['texto' => 'MACAN', 'valor' => false, 'pregunta_id' => 196],

            ['texto' => 'La jefatura de apoyo para la acción conjunta.', 'valor' => false, 'pregunta_id' => 197],
            ['texto' => 'La asesoría jurídica.', 'valor' => false, 'pregunta_id' => 197],
            ['texto' => 'La intervención delegada.', 'valor' => false, 'pregunta_id' => 197],
            ['texto' => 'La división de planes.', 'valor' => false, 'pregunta_id' => 197],

            ['texto' => 'En una organizativa y otra funcional.', 'valor' => false, 'pregunta_id' => 198],
            ['texto' => 'Una de mando y otra de ejecución.', 'valor' => false, 'pregunta_id' => 198],
            ['texto' => 'Una orgánica y otra operativa.', 'valor' => false, 'pregunta_id' => 198],
            ['texto' => 'Una principal y otra secundaria.', 'valor' => false, 'pregunta_id' => 198],

            ['texto' => 'Ministerio de Defensa.', 'valor' => false, 'pregunta_id' => 199],
            ['texto' => 'Jemad.', 'valor' => false, 'pregunta_id' => 199],
            ['texto' => 'Jefe del Estado Mayor del Ejército de Tierra.', 'valor' => false, 'pregunta_id' => 199],
            ['texto' => 'A y B son correctas.', 'valor' => false, 'pregunta_id' => 199],

            ['texto' => 'La Ley orgánica 5/2005 de 17 de noviembre.', 'valor' => false, 'pregunta_id' => 200],
            ['texto' => 'La Ley orgánica 5/2005 de 15 de noviembre.', 'valor' => false, 'pregunta_id' => 200],
            ['texto' => 'La Ley orgánica 7/2005 de 17 de noviembre.', 'valor' => false, 'pregunta_id' => 200],
            ['texto' => 'La Ley orgánica 5/2005 de 15 de noviembre.', 'valor' => false, 'pregunta_id' => 200],

            ['texto' => 'Presidente del Gobierno.', 'valor' => false, 'pregunta_id' => 201],
            ['texto' => 'Ministerio de Defensa.', 'valor' => false, 'pregunta_id' => 201],
            ['texto' => 'Jefe del Estado Mayor de la defensa.', 'valor' => false, 'pregunta_id' => 201],
            ['texto' => 'Jemad.', 'valor' => false, 'pregunta_id' => 201],

            ['texto' => 'Los órganos de asistencia técnica.', 'valor' => false, 'pregunta_id' => 202],
            ['texto' => 'Los órganos de historia y cultura militar.', 'valor' => false, 'pregunta_id' => 202],
            ['texto' => 'Los órganos de historia y cultura militar.', 'valor' => false, 'pregunta_id' => 202],
            ['texto' => 'La A, B, y C son correctas.', 'valor' => false, 'pregunta_id' => 202],

            ['texto' => 'El estado mayor.', 'valor' => false, 'pregunta_id' => 203],
            ['texto' => 'La asesoría jurídica.', 'valor' => false, 'pregunta_id' => 203],
            ['texto' => 'El mando conjunto de ciberdefensa', 'valor' => false, 'pregunta_id' => 203],
            ['texto' => 'El gabinete del jefe de estado Mayor.', 'valor' => false, 'pregunta_id' => 203],

            ['texto' => 'Presidente del gobierno.', 'valor' => false, 'pregunta_id' => 204],
            ['texto' => 'Ministro de defensa.', 'valor' => false, 'pregunta_id' => 204],
            ['texto' => 'Jemad.', 'valor' => false, 'pregunta_id' => 204],
            ['texto' => 'Jefe del estado Mayor del ET.', 'valor' => false, 'pregunta_id' => 204],

            ['texto' => 'La división de operaciones.', 'valor' => false, 'pregunta_id' => 205],
            ['texto' => 'El cuartel general del estado Mayor de la defensa.', 'valor' => false, 'pregunta_id' => 205],
            ['texto' => 'El mando de operaciones.', 'valor' => false, 'pregunta_id' => 205],
            ['texto' => 'El mando conjunto de ciber-defensa.', 'valor' => false, 'pregunta_id' => 205],

            ['texto' => 'La división de operaciones.', 'valor' => false, 'pregunta_id' => 206],
            ['texto' => 'La división de logística.', 'valor' => false, 'pregunta_id' => 206],
            ['texto' => 'La división de planes.', 'valor' => false, 'pregunta_id' => 206],
            ['texto' => 'El mando conjunto de ciber-defensa.', 'valor' => false, 'pregunta_id' => 206],

            ['texto' => 'En la asesoría jurídica.', 'valor' => false, 'pregunta_id' => 207],
            ['texto' => 'En el estado Mayor de cada ejército.', 'valor' => false, 'pregunta_id' => 207],
            ['texto' => 'En el mando de operaciones.', 'valor' => false, 'pregunta_id' => 207],
            ['texto' => 'En el centro de inteligencia de las FAS.', 'valor' => false, 'pregunta_id' => 207],

            ['texto' => 'Presidente del gobierno', 'valor' => false, 'pregunta_id' => 208],
            ['texto' => 'Jefe del estado Mayor del ejército del aire', 'valor' => false, 'pregunta_id' => 208],
            ['texto' => 'Ministro de defensa', 'valor' => false, 'pregunta_id' => 208],
            ['texto' => 'Jemad', 'valor' => false, 'pregunta_id' => 208],

            ['texto' => 'A los reservistas incorporados.', 'valor' => false, 'pregunta_id' => 209],
            ['texto' => 'A los alumnos de la enseñanza militar de formación.', 'valor' => false, 'pregunta_id' => 209],
            ['texto' => 'Al militar en situación de suspenso de su condición.', 'valor' => false, 'pregunta_id' => 209],

            ['texto' => 'Se imposibilitara la igualdad entre el hombre y la mujer, especialmente en el acceso.', 'valor' => false, 'pregunta_id' => 210],
            ['texto' => 'En las FAS habrá discriminación por razón de nacimiento, origen racial o étnico.', 'valor' => false, 'pregunta_id' => 210],
            ['texto' => 'Se promoverán las medidas necesarias para garantizar la igualdad.', 'valor' => false, 'pregunta_id' => 210],
            ['texto' => 'Se imposibilitara la igualdad de la mujer, especialmente en el acceso.', 'valor' => false, 'pregunta_id' => 210],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 211],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 211],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 211],

            ['texto' => 'Como primer y mas fundamental deber, pondrá todo su empeño en preservar la seguridad y bienestar de los ciudadanos durante la actuación de las FAS.', 'valor' => false, 'pregunta_id' => 212],
            ['texto' => 'El que ejerza mando reafirmara su liderazgo procurando conseguir el apoyo y cooperación de sus subordinados por el prestigio adquirido con su empleo, preparación y subyugación.', 'valor' => false, 'pregunta_id' => 212],
            ['texto' => 'La disciplina, factor de cohesión que obliga a mandar con responsabilidad y a obedecer lo mandado, será practicada y exigida en las FAS como norma de actuación.', 'valor' => false, 'pregunta_id' => 212],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 213],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 213],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 213],

            ['texto' => 'El registro personal de los militares, de sus taquillas y pertenencias que estuvieran en la unidad no requerirá del consentimiento del afectado ni resolución judicial.', 'valor' => false, 'pregunta_id' => 214],
            ['texto' => 'Los datos relativos a los miembros de las FAS no estarán sujetos a la legislación sobre protección de datos de carácter personal.', 'valor' => false, 'pregunta_id' => 214],
            ['texto' => 'El militar tiene derecho a la inviolabilidad del domicilio ubicado dentro de unidades.', 'valor' => false, 'pregunta_id' => 214],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 215],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 215],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 215],

            ['texto' => 'El militar podrá pronunciarse públicamente y efectuar propaganda a favor o en contra de las asociaciones políticas.', 'valor' => false, 'pregunta_id' => 216],
            ['texto' => 'El militar tiene derecho a la libertad de expresión en los términos establecidos en la constitución.', 'valor' => false, 'pregunta_id' => 216],
            ['texto' => 'Los militares en el ejercicio de la libertad de expresión no estarán sujetos a ningún límite.', 'valor' => false, 'pregunta_id' => 216],

            ['texto' => 'No podrá organizar ni participar en reuniones o manifestaciones de carácter político.', 'valor' => false, 'pregunta_id' => 217],
            ['texto' => 'Podrá organizar, participar, asistir a lugares de transito publico a manifestaciones o reuniones de carácter político.', 'valor' => false, 'pregunta_id' => 217],
            ['texto' => 'Las reuniones que se celebren en las unidades no deberán de estar previa y expresamente autorizada por sus jefes.', 'valor' => false, 'pregunta_id' => 217],

            ['texto' => 'Los militares no tienen derecho a crear asociaciones y asociarse libremente para la consecución de fines lícitos.', 'valor' => false, 'pregunta_id' => 218],
            ['texto' => 'El ejercicio de este derecho cuando tenga como fin la defensa de sus intereses profesionales y los derechos establecidos en esta Ley orgánica, se ajustara a lo dispuesto en el título II.', 'valor' => false, 'pregunta_id' => 218],
            ['texto' => 'Las asociaciones de miembros de las fuerzas armadas podrán llevar a cabo actividades políticas y sindicales.', 'valor' => false, 'pregunta_id' => 218],
            ['texto' => 'El ejercicio de este derecho cuando tenga como fin la defensa de sus intereses profesionales y los derechos establecidos en esta Ley orgánica, se ajustara a lo dispuesto en el título III, capítulo I.', 'valor' => false, 'pregunta_id' => 218],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 219],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 219],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 219],

            ['texto' => 'El militar podrá ejercer el derecho de petición individual y colectivamente, en los supuestos y cion la formalidad que señala la ley orgánica 4/2001 de 12 de noviembre.', 'valor' => false, 'pregunta_id' => 220],
            ['texto' => 'Son de objeto de este derecho aquellas solicitudes quejas o sugerencias para cuya satisfacción el ordenamiento jurídico establezca.', 'valor' => false, 'pregunta_id' => 220],
            ['texto' => 'El militar podrá ejercer el derecho de petición solo individualmente, en los supuestos y con las formalidades que señala la ley orgánica 4/2001 de 12 de noviembre.', 'valor' => false, 'pregunta_id' => 220],
            ['texto' => 'El militar podrá ejercer el derecho de petición solo individualmente, en los supuestos y con las formalidades que señala la ley orgánica 4/2002 de 11 de noviembre.', 'valor' => false, 'pregunta_id' => 220],

            ['texto' => 'Individualmente y colectivamente acuerdo con lo previsto en la Ley Orgánica 3/1981, de 6 de abril.', 'valor' => false, 'pregunta_id' => 221],
            ['texto' => 'Individual y directamente previa autorización de sus jefes.', 'valor' => false, 'pregunta_id' => 221],
            ['texto' => 'Individual y directamente.', 'valor' => false, 'pregunta_id' => 221],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 222],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 222],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 222],

            ['texto' => 'Solo en la formación.', 'valor' => false, 'pregunta_id' => 223],
            ['texto' => 'Solo en la de perfeccionamiento.', 'valor' => false, 'pregunta_id' => 223],
            ['texto' => 'Tanto en la de formación como en la de perfeccionamiento.', 'valor' => false, 'pregunta_id' => 223],
            ['texto' => 'Tanto en la de formación como en la de adiestramiento.', 'valor' => false, 'pregunta_id' => 223],

            ['texto' => 'Al militar que se le reconozca una incapacidad que conlleve una limitación será informado del régimen jurídico aplicable.', 'valor' => false, 'pregunta_id' => 224],
            ['texto' => 'Al militar que se le reconozca una incapacidad que conlleve una limitación para ocupar determinados destinos, se le garantiza el principio de igualdad.', 'valor' => false, 'pregunta_id' => 224],
            ['texto' => 'Al militar que se le reconozca una incapacidad que conlleve una limitación deberá ser objeto de especial protección, en razón de los riesgos específicos.', 'valor' => false, 'pregunta_id' => 224],

            ['texto' => 'El militar está sujeto a la legislación sobre secretos oficiales y materias clasificadas.', 'valor' => false, 'pregunta_id' => 225],
            ['texto' => 'El militar podrá difundir cierta información por ciertos medios sin prejuicio de las fuerzas armadas.', 'valor' => false, 'pregunta_id' => 225],
            ['texto' => 'Guardara la debida discreción sobre hechos o datos clasificados sin que pueda difundirlos solo para beneficio propio de su unidad.', 'valor' => false, 'pregunta_id' => 225],

            ['texto' => 'Los militares estarán en disponibilidad en la jornada de trabajo según las características del destino.', 'valor' => false, 'pregunta_id' => 226],
            ['texto' => 'Los militares tienen derecho a disfrutar de sus permisos, vacaciones y licencias establecidas con carácter individual.', 'valor' => false, 'pregunta_id' => 226],
            ['texto' => 'La aplicación del criterio de necesidades del servicio de hará siempre de forma justificada, motivada y colectivamente.', 'valor' => false, 'pregunta_id' => 226],
            ['texto' => 'Los militares tienen derecho a disfrutar de sus permisos, vacaciones y licencias establecidas con carácter general.', 'valor' => false, 'pregunta_id' => 226],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 227],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 227],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 227],

            ['texto' => 'Los militares que estén en las situaciones administrativas en las que tengan suspendida su condición militar, no podrá vestir el uniforme en actos militares y sociales.', 'valor' => false, 'pregunta_id' => 228],
            ['texto' => 'Los militares que estén en las situaciones administrativas en las que tenga suspendida su condición militar, solo podrán vestir el uniforme solo cuando se les autorice.', 'valor' => false, 'pregunta_id' => 228],
            ['texto' => 'Las normas generales de uniformidad y las limitaciones o autorizaciones en el uso del mismo seran establecidas por orden del Ministerio de Defensa.', 'valor' => false, 'pregunta_id' => 228],

            ['texto' => 'En la Ley 53/1984.', 'valor' => false, 'pregunta_id' => 229],
            ['texto' => 'En la Ley 54/1983.', 'valor' => false, 'pregunta_id' => 229],
            ['texto' => 'En la Ley 54/1984.', 'valor' => false, 'pregunta_id' => 229],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 230],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 230],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 230],
            ['texto' => 'Nunca velara por la salud de otros.', 'valor' => false, 'pregunta_id' => 230],

            ['texto' => 'MAPER.', 'valor' => false, 'pregunta_id' => 231],
            ['texto' => 'MADOC.', 'valor' => false, 'pregunta_id' => 231],
            ['texto' => 'DIEN.', 'valor' => false, 'pregunta_id' => 231],

            ['texto' => 'Ministerio de Justicia.', 'valor' => false, 'pregunta_id' => 232],
            ['texto' => 'Ministerio de Defensa.', 'valor' => false, 'pregunta_id' => 232],
            ['texto' => 'Ministerio del Interior.', 'valor' => false, 'pregunta_id' => 232],

            ['texto' => 'Exclusivo de militares activos.', 'valor' => false, 'pregunta_id' => 233],
            ['texto' => 'Militares retirados o que tengan reconocido una pensión de actitud.', 'valor' => false, 'pregunta_id' => 233],
            ['texto' => 'Militares, retirados y reconocidos en una pensión de inutilidad.', 'valor' => false, 'pregunta_id' => 233],
            ['texto' => 'Militares activos, retirados y reconocidos una pensión de inutilidad.', 'valor' => false, 'pregunta_id' => 233],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 234],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 234],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 234],
            ['texto' => 'Están integrados en la mutua.', 'valor' => false, 'pregunta_id' => 234],

            ['texto' => 'Se establecerán planes de calidad de vida, de carácter global, dirigidos a todas las categorías y se prestara apoyo especifico a los militares que sean destacados fuera del lugar de estacionamiento habitual de su unidad.', 'valor' => false, 'pregunta_id' => 235],
            ['texto' => 'Dentro de las de apoyo a la movilidad geográfica no se protegerá a los hijos la escolarización de sus hijos cuando deban trasladarse de residencia.', 'valor' => false, 'pregunta_id' => 235],
            ['texto' => 'La administración General del Estado se llevara a cabo las iniciativas necesarias para convenios de colaboración con las comunidades autónomas y ayuntamientos.', 'valor' => false, 'pregunta_id' => 235],

            ['texto' => 'Respetar el principio de neutralidad política y sindical y no podrán incluir referencias políticas o ideológicas.', 'valor' => false, 'pregunta_id' => 236],
            ['texto' => 'Respetar el principio de neutralidad política y sindical y podrán incluir referencias políticas o ideológicas.', 'valor' => false, 'pregunta_id' => 236],
            ['texto' => 'Respetar el principio de neutralidad política y sindical y deberán incluir us referencias políticas o ideológicas.', 'valor' => false, 'pregunta_id' => 236],

            ['texto' => 'El cumplimiento de las misiones de las Fuerzas Armadas.', 'valor' => false, 'pregunta_id' => 237],
            ['texto' => 'Desarrollo de las operaciones.', 'valor' => false, 'pregunta_id' => 237],
            ['texto' => 'Ambas son correctas.', 'valor' => false, 'pregunta_id' => 237],

            ['texto' => 'En el Consejo de Personal de las Fuerzas Armadas.', 'valor' => false, 'pregunta_id' => 238],
            ['texto' => 'En el Consejo de Ministros.', 'valor' => false, 'pregunta_id' => 238],
            ['texto' => 'No tienen interlocución con ningún Consejo.', 'valor' => false, 'pregunta_id' => 238],

            ['texto' => 'De carácter asesor.', 'valor' => false, 'pregunta_id' => 239],
            ['texto' => 'De carácter consultivo.', 'valor' => false, 'pregunta_id' => 239],
            ['texto' => 'Ambas son correctas.', 'valor' => false, 'pregunta_id' => 239],

            ['texto' => 'Efectuar análisis y propuestas de actuación sobre el ejercicio de los derechos de los miembros de las fuerzas armadas.', 'valor' => false, 'pregunta_id' => 240],
            ['texto' => 'Elaborar de oficio informes y partes personales de la carrera del militar.', 'valor' => false, 'pregunta_id' => 240],
            ['texto' => 'Proponer medidas que ayuden a la conciliación de la vida profesional, personal y familiar de los militares.', 'valor' => false, 'pregunta_id' => 240],

            ['texto' => '5 miembros elegidos por congreso de los diputaos y otros 4 por el senado.', 'valor' => false, 'pregunta_id' => 241],
            ['texto' => '4 miembros elegidos por el congreso de los diputados y 4 por el senado.', 'valor' => false, 'pregunta_id' => 241],
            ['texto' => '3 miembros elegidos por el congreso de los diputados y 3 por el senado.', 'valor' => false, 'pregunta_id' => 241],
            ['texto' => '5 miembros elegidos por congreso de los diputaos y otros 5 por el senado.', 'valor' => false, 'pregunta_id' => 241],

            ['texto' => 'A título individual.', 'valor' => false, 'pregunta_id' => 242],
            ['texto' => 'Colectivo.', 'valor' => false, 'pregunta_id' => 242],
            ['texto' => 'En ambos casos es válido.', 'valor' => false, 'pregunta_id' => 242],
            ['texto' => 'Al jefe de la unidad tipo compañía.', 'valor' => false, 'pregunta_id' => 242],


            ['texto' => 'Podrán referirse a materias relacionadas con la política de seguridad y defensa.', 'valor' => false, 'pregunta_id' => 243],
            ['texto' => 'No podrán referirse a materias relacionadas con las inspecciones de política de seguridad y defensa.', 'valor' => false, 'pregunta_id' => 243],
            ['texto' => 'Según sea el ámbito podrán referirse a política de seguridad y defensa.', 'valor' => false, 'pregunta_id' => 243],
            ['texto' => 'No podrán referirse a materias relacionadas con las decisiones de política de seguridad y defensa.', 'valor' => false, 'pregunta_id' => 243],

            ['texto' => 'MAPER.', 'valor' => false, 'pregunta_id' => 244],
            ['texto' => 'MADOC.', 'valor' => false, 'pregunta_id' => 244],
            ['texto' => 'Jefe de Unidad.', 'valor' => false, 'pregunta_id' => 244],
            ['texto' => 'Jefe de la brigada.', 'valor' => false, 'pregunta_id' => 244],

            ['texto' => '1 Año.', 'valor' => false, 'pregunta_id' => 245],
            ['texto' => '3 Meses.', 'valor' => false, 'pregunta_id' => 245],
            ['texto' => '6 Meses.', 'valor' => false, 'pregunta_id' => 245],
            ['texto' => '3 Trimestres.', 'valor' => false, 'pregunta_id' => 245],

            ['texto' => 'Verbalmente.', 'valor' => false, 'pregunta_id' => 246],
            ['texto' => 'Escrito.', 'valor' => false, 'pregunta_id' => 246],
            ['texto' => 'Las anteriores son correctas.', 'valor' => false, 'pregunta_id' => 246],
            ['texto' => 'A través de una llamada de teléfono.', 'valor' => false, 'pregunta_id' => 246],


            ['texto' => '1 Mes.', 'valor' => false, 'pregunta_id' => 247],
            ['texto' => '2 Meses.', 'valor' => false, 'pregunta_id' => 247],
            ['texto' => '3 Meses.', 'valor' => false, 'pregunta_id' => 247],
            ['texto' => '6 Meses.', 'valor' => false, 'pregunta_id' => 247],



            ['texto' => 'Fabricados de un material que evite los rebotes.', 'valor' => false, 'pregunta_id' => 248],
            ['texto' => 'Fabricados de cualquier material pues no existe la posibilidad de rebote con la nuevo modelo de munición.', 'valor' => false, 'pregunta_id' => 248],
            ['texto' => 'Según el modelo de la munición los blancos serán de un modelo u otro.', 'valor' => false, 'pregunta_id' => 248],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 249],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 249],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 249],
            ['texto' => 'Siempre será supervisada por el técnico experto en armamento de la UCO', 'valor' => false, 'pregunta_id' => 249],


            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 250],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 250],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 250],
            ['texto' => 'No es necesario pasar revista ya que al terminar el ejercicio de tiro el', 'valor' => false, 'pregunta_id' => 250],
            ['texto' => 'Cierre suele quedarse atrás y se ve que no hay cartucho en la recamara', 'valor' => false, 'pregunta_id' => 250],

            ['texto' => '1200 dpm.', 'valor' => false, 'pregunta_id' => 251],
            ['texto' => '500 dpm.', 'valor' => false, 'pregunta_id' => 251],
            ['texto' => '1300 dpm.', 'valor' => false, 'pregunta_id' => 251],
            ['texto' => '1000 dpm.', 'valor' => false, 'pregunta_id' => 251],

            ['texto' => 'Mecanismo de disparo y seguridad.', 'valor' => false, 'pregunta_id' => 252],
            ['texto' => 'Extractor.', 'valor' => false, 'pregunta_id' => 252],
            ['texto' => 'Porta-percutor y percutor.', 'valor' => false, 'pregunta_id' => 252],

            ['texto' => 'Mecanismo de Alimentación.', 'valor' => false, 'pregunta_id' => 253],
            ['texto' => 'Mecanismo de Cierre.', 'valor' => false, 'pregunta_id' => 253],
            ['texto' => 'Mecanismo de Disparo.', 'valor' => false, 'pregunta_id' => 253],

            ['texto' => 'Por semiacerrojamiento de rodillos.', 'valor' => false, 'pregunta_id' => 254],
            ['texto' => 'Acerrojamiento de rodillos.', 'valor' => false, 'pregunta_id' => 254],
            ['texto' => 'Por toma de gases en la cabeza de cierre.', 'valor' => false, 'pregunta_id' => 254],

            ['texto' => 'Percutor.', 'valor' => false, 'pregunta_id' => 255],
            ['texto' => 'Porta percutor.', 'valor' => false, 'pregunta_id' => 255],
            ['texto' => 'Manguito expulsor.', 'valor' => false, 'pregunta_id' => 255],
            ['texto' => 'A y B son correctas.', 'valor' => false, 'pregunta_id' => 255],

            ['texto' => '8000 mts.', 'valor' => false, 'pregunta_id' => 256],
            ['texto' => '6000 mts.', 'valor' => false, 'pregunta_id' => 256],
            ['texto' => '4000 mts.', 'valor' => false, 'pregunta_id' => 256],
            ['texto' => '1500 mts.', 'valor' => false, 'pregunta_id' => 256],

            ['texto' => '8000.', 'valor' => false, 'pregunta_id' => 257],
            ['texto' => '4000.', 'valor' => false, 'pregunta_id' => 257],
            ['texto' => '1200.', 'valor' => false, 'pregunta_id' => 257],

            ['texto' => 'Bipode.', 'valor' => false, 'pregunta_id' => 258],
            ['texto' => 'Guardamano refrigerador.', 'valor' => false, 'pregunta_id' => 258],
            ['texto' => 'Marco soporte.', 'valor' => false, 'pregunta_id' => 258],
            ['texto' => 'Punto de mira.', 'valor' => false, 'pregunta_id' => 258],

            ['texto' => 'Mecanismo de percusión.', 'valor' => false, 'pregunta_id' => 259],
            ['texto' => 'Mecanismo de alimentación.', 'valor' => false, 'pregunta_id' => 259],
            ['texto' => 'Mecanismo de cierre.', 'valor' => false, 'pregunta_id' => 259],

            ['texto' => '250 y 750.', 'valor' => false, 'pregunta_id' => 260],
            ['texto' => '550 y 950.', 'valor' => false, 'pregunta_id' => 260],
            ['texto' => '350 y 650.', 'valor' => false, 'pregunta_id' => 260],
            ['texto' => '250 y 550.', 'valor' => false, 'pregunta_id' => 260],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 261],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 261],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 261],
            ['texto' => 'Solo a veces.', 'valor' => false, 'pregunta_id' => 261],

            ['texto' => '2 estrías a dextrosum.', 'valor' => false, 'pregunta_id' => 262],
            ['texto' => '4 estrías a dextrosum.', 'valor' => false, 'pregunta_id' => 262],
            ['texto' => '4 estrías a sinextrosum.', 'valor' => false, 'pregunta_id' => 262],
            ['texto' => '2 estrías a sinextrosum.', 'valor' => false, 'pregunta_id' => 262],

            ['texto' => 'Un regulador de cadencia.', 'valor' => false, 'pregunta_id' => 263],
            ['texto' => 'Un cambio de cierre con distintos pesos.', 'valor' => false, 'pregunta_id' => 263],
            ['texto' => 'No se puede regular la cadencia.', 'valor' => false, 'pregunta_id' => 263],
            ['texto' => 'Regular la cadencia con el dedo pulgar.', 'valor' => false, 'pregunta_id' => 263],

            ['texto' => '2 minutos.', 'valor' => false, 'pregunta_id' => 264],
            ['texto' => '3 minutos.', 'valor' => false, 'pregunta_id' => 264],
            ['texto' => '5 minutos.', 'valor' => false, 'pregunta_id' => 264],
            ['texto' => '1 minutos.', 'valor' => false, 'pregunta_id' => 264],

            ['texto' => '45º.', 'valor' => false, 'pregunta_id' => 265],
            ['texto' => '90º.', 'valor' => false, 'pregunta_id' => 265],
            ['texto' => 'Es indistinto.', 'valor' => false, 'pregunta_id' => 265],

            ['texto' => 'Biela.', 'valor' => false, 'pregunta_id' => 266],
            ['texto' => 'Trinquetes.', 'valor' => false, 'pregunta_id' => 266],
            ['texto' => 'Corredera.', 'valor' => false, 'pregunta_id' => 266],
            ['texto' => 'El alza.', 'valor' => false, 'pregunta_id' => 266],

            ['texto' => 'Mecanismo de montaje.', 'valor' => false, 'pregunta_id' => 267],
            ['texto' => 'Mecanismo de alimentación.', 'valor' => false, 'pregunta_id' => 267],
            ['texto' => 'Mecanismo de cierre.', 'valor' => false, 'pregunta_id' => 267],
            ['texto' => 'Mecanismos de avance.', 'valor' => false, 'pregunta_id' => 267],

            ['texto' => 'para todo por sorpresa.', 'valor' => false, 'pregunta_id' => 268],
            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 268],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 268],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 268],

            ['texto' => '100°° a +200°°.', 'valor' => false, 'pregunta_id' => 269],

            ['texto' => '+150°° a -100°°.', 'valor' => false, 'pregunta_id' => 269],
            ['texto' => '-150°° a +100°°.', 'valor' => false, 'pregunta_id' => 269],
            ['texto' => '-125ºº a +150ºº.', 'valor' => false, 'pregunta_id' => 269],

            ['texto' => 'Incrementador de retroceso.', 'valor' => false, 'pregunta_id' => 270],
            ['texto' => 'Casquillo guía.', 'valor' => false, 'pregunta_id' => 270],
            ['texto' => 'Brocal de guerra.', 'valor' => false, 'pregunta_id' => 270],
            ['texto' => 'El muelle recuperador.', 'valor' => false, 'pregunta_id' => 270],

            ['texto' => 'Pesada.', 'valor' => false, 'pregunta_id' => 271],
            ['texto' => 'Media.', 'valor' => false, 'pregunta_id' => 271],
            ['texto' => 'Ligera.', 'valor' => false, 'pregunta_id' => 271],

            ['texto' => 'Es un arma semiautomática con sistema de accionamiento por gas.', 'valor' => false, 'pregunta_id' => 272],
            ['texto' => 'Dispara con posición de cierre cerrado.', 'valor' => false, 'pregunta_id' => 272],
            ['texto' => 'Tiene cierre de cabeza rotatoria y alimentación por cordón expandido.', 'valor' => false, 'pregunta_id' => 272],
            ['texto' => 'Dispara con posición de cierre abierto.', 'valor' => false, 'pregunta_id' => 272],

            ['texto' => 'Se puede usar por una sola persona.', 'valor' => false, 'pregunta_id' => 273],
            ['texto' => 'Dispone de un trípode integrado.', 'valor' => false, 'pregunta_id' => 273],
            ['texto' => 'En el estado de “cargado” ya se encuentra un cartucho en la recámara.', 'valor' => false, 'pregunta_id' => 273],
            ['texto' => 'Siempre se usara por dos personas.', 'valor' => false, 'pregunta_id' => 273],

            ['texto' => '1200 metros.', 'valor' => false, 'pregunta_id' => 274],
            ['texto' => '1000 metros.', 'valor' => false, 'pregunta_id' => 274],
            ['texto' => '800 metros.', 'valor' => false, 'pregunta_id' => 274],
            ['texto' => '1100 metros.', 'valor' => false, 'pregunta_id' => 274],

            ['texto' => 'Con sistema de accionamiento por gas.', 'valor' => false, 'pregunta_id' => 275],
            ['texto' => 'Bloqueo de rodillos.', 'valor' => false, 'pregunta_id' => 275],
            ['texto' => 'Semi-acerrojamiento de cierre.', 'valor' => false, 'pregunta_id' => 275],

            ['texto' => '800 metros.', 'valor' => false, 'pregunta_id' => 276],
            ['texto' => '1000 metros.', 'valor' => false, 'pregunta_id' => 276],
            ['texto' => '1200 metros.', 'valor' => false, 'pregunta_id' => 276],
            ['texto' => '200 metros.', 'valor' => false, 'pregunta_id' => 276],

            ['texto' => '200 cartuchos.', 'valor' => false, 'pregunta_id' => 277],
            ['texto' => '100 cartuchos.', 'valor' => false, 'pregunta_id' => 277],
            ['texto' => '50 cartuchos.', 'valor' => false, 'pregunta_id' => 277],
            ['texto' => '150 cartuchos.', 'valor' => false, 'pregunta_id' => 277],

            ['texto' => 'En el cajón de mecanismos.', 'valor' => false, 'pregunta_id' => 278],
            ['texto' => 'En el sistema de alimentación.', 'valor' => false, 'pregunta_id' => 278],
            ['texto' => 'Caja de fijación.', 'valor' => false, 'pregunta_id' => 278],
            ['texto' => 'En el sistema de refrigeración.', 'valor' => false, 'pregunta_id' => 278],

            ['texto' => 'Solamente cuando la ametralladora se encuentra desarmada.', 'valor' => false, 'pregunta_id' => 279],
            ['texto' => 'Solamente cuando la ametralladora se encuentra armada.', 'valor' => false, 'pregunta_id' => 279],
            ['texto' => 'Se encuentre tanto armada como desarmada.', 'valor' => false, 'pregunta_id' => 279],
            ['texto' => 'Siempre cuando la ametralladora se encuentra desarmada.', 'valor' => false, 'pregunta_id' => 279],

            ['texto' => '...el cierre, cañón, empuñadura, guardamanos…', 'valor' => false, 'pregunta_id' => 280],
            ['texto' => '...el cañón, empuñadura, guardamanos, corredera…', 'valor' => false, 'pregunta_id' => 280],
            ['texto' => '...cierre, cañón, corredera, empuñadura…', 'valor' => false, 'pregunta_id' => 280],
            ['texto' => '...el cañón, empuñadura, guardamanos, corredera y cierre…', 'valor' => false, 'pregunta_id' => 280],

            ['texto' => '200 disparos.', 'valor' => false, 'pregunta_id' => 281],
            ['texto' => '100 disparos.', 'valor' => false, 'pregunta_id' => 281],
            ['texto' => '400 disparos.', 'valor' => false, 'pregunta_id' => 281],
            ['texto' => '450 disparos.', 'valor' => false, 'pregunta_id' => 281],

            ['texto' => 'La existencia de un cartucho en la teja de alimentación.', 'valor' => false, 'pregunta_id' => 282],
            ['texto' => 'La existencia de un cartucho en la recamara.', 'valor' => false, 'pregunta_id' => 282],
            ['texto' => 'La inexistencia de munición en el arma.', 'valor' => false, 'pregunta_id' => 282],

            ['texto' => 'Cierre de cabeza rotatoria plana.', 'valor' => false, 'pregunta_id' => 283],
            ['texto' => 'Cierre de cabeza rotatoria de 3 salientes.', 'valor' => false, 'pregunta_id' => 283],
            ['texto' => 'Cierre de cabeza rotatoria de 2 salientes.', 'valor' => false, 'pregunta_id' => 283],

            ['texto' => 'El resalte de retención delantera.', 'valor' => false, 'pregunta_id' => 284],
            ['texto' => 'En el resalte de retención central.', 'valor' => false, 'pregunta_id' => 284],
            ['texto' => 'En el resalte de retención central y trasera.', 'valor' => false, 'pregunta_id' => 284],

            ['texto' => 'Con la teja de alimentación de uso normal.', 'valor' => false, 'pregunta_id' => 285],
            ['texto' => 'La utilización de un a teja de alimentación de cartuchos de ejercicio.', 'valor' => false, 'pregunta_id' => 285],
            ['texto' => 'No es posible la utilización de salvas.', 'valor' => false, 'pregunta_id' => 285],

            ['texto' => 'En la mitad delantera del cañón', 'valor' => false, 'pregunta_id' => 286],
            ['texto' => 'En la mitad trasera del cañón.', 'valor' => false, 'pregunta_id' => 286],
            ['texto' => 'La disposición más atrasada del cañón.', 'valor' => false, 'pregunta_id' => 286],

            ['texto' => 'Contiene una lámpara de tritio.', 'valor' => false, 'pregunta_id' => 287],
            ['texto' => 'Si una lámpara está rota o existe la posibilidad de que se haya roto, contactar con el consejo de Seguridad Nacional (CNS).', 'valor' => false, 'pregunta_id' => 287],
            ['texto' => 'Los cartuchos de fogueo se deben disparar con el brocal de salvas enroscado y sin la teja de alimentación de cartuchos.', 'valor' => false, 'pregunta_id' => 287],

            ['texto' => '4000 bolas.', 'valor' => false, 'pregunta_id' => 288],
            ['texto' => '3500 bolas.', 'valor' => false, 'pregunta_id' => 288],
            ['texto' => '3000 bolas.', 'valor' => false, 'pregunta_id' => 288],

            ['texto' => 'Es de retardo tipo palanca.', 'valor' => false, 'pregunta_id' => 289],
            ['texto' => 'La envuelta de fragmentación se pondrá dependiendo de si es ofensiva o defensiva.', 'valor' => false, 'pregunta_id' => 289],
            ['texto' => 'La espoleta es de retardo eléctrico.', 'valor' => false, 'pregunta_id' => 289],

            ['texto' => 'Retardo electrónico', 'valor' => false, 'pregunta_id' => 290],
            ['texto' => 'Detonador desalineado.', 'valor' => false, 'pregunta_id' => 290],
            ['texto' => 'Palanca de seguridad.', 'valor' => false, 'pregunta_id' => 290],
            ['texto' => 'Palanca de retardo.', 'valor' => false, 'pregunta_id' => 290],

            ['texto' => 'Son proyectiles explosivos lanzados a mano.', 'valor' => false, 'pregunta_id' => 291],
            ['texto' => 'Sirve para prolongar la acción de las armas', 'valor' => false, 'pregunta_id' => 291],
            ['texto' => 'Curvo contra objetos desinfectados y ligeramente protegidos.', 'valor' => false, 'pregunta_id' => 291],
            ['texto' => 'Produce efectos materiales y morales.', 'valor' => false, 'pregunta_id' => 291],

            ['texto' => '3 segundos.', 'valor' => false, 'pregunta_id' => 292],
            ['texto' => '3.5 segundos.', 'valor' => false, 'pregunta_id' => 292],
            ['texto' => '4.5 segundos.', 'valor' => false, 'pregunta_id' => 292],
            ['texto' => '4 segundos.', 'valor' => false, 'pregunta_id' => 292],

            ['texto' => 'Almacena energía eléctrica.', 'valor' => false, 'pregunta_id' => 293],
            ['texto' => 'La energía necesaria para su funcionamiento no se genera hasta después del lanzamiento.', 'valor' => false, 'pregunta_id' => 293],
            ['texto' => 'Doble retardo electrónico de gran fiabilidad y precisión.', 'valor' => false, 'pregunta_id' => 293],
            ['texto' => 'Elementos externos de seguridad perfectamente integrados y adaptados a la forma exterior de la granada.', 'valor' => false, 'pregunta_id' => 293],

            ['texto' => 'Ofensiva.', 'valor' => false, 'pregunta_id' => 294],
            ['texto' => 'Defensiva.', 'valor' => false, 'pregunta_id' => 294],
            ['texto' => 'Tanto ofensiva como defensiva.', 'valor' => false, 'pregunta_id' => 294],

            ['texto' => 'AHL-LLI.', 'valor' => false, 'pregunta_id' => 295],
            ['texto' => 'LLI-ALH.', 'valor' => false, 'pregunta_id' => 295],
            ['texto' => 'ALH-LLI.', 'valor' => false, 'pregunta_id' => 295],

            ['texto' => '500 Grs.', 'valor' => false, 'pregunta_id' => 296],
            ['texto' => '450 Grs.', 'valor' => false, 'pregunta_id' => 296],
            ['texto' => '400 Grs.', 'valor' => false, 'pregunta_id' => 296],

            ['texto' => '10 mts.', 'valor' => false, 'pregunta_id' => 297],
            ['texto' => '15 mts.', 'valor' => false, 'pregunta_id' => 297],
            ['texto' => '20 mts.', 'valor' => false, 'pregunta_id' => 297],

            ['texto' => 'Cuerpo metálico que se fragmenta en trozos de metralla en la explosión.', 'valor' => false, 'pregunta_id' => 298],
            ['texto' => 'Su funcionamiento es eléctrico, a percusión o automatico.', 'valor' => false, 'pregunta_id' => 298],
            ['texto' => 'Su carga es explosiva.', 'valor' => false, 'pregunta_id' => 298],

            ['texto' => '1 mm.', 'valor' => false, 'pregunta_id' => 299],
            ['texto' => '1.5 mm.', 'valor' => false, 'pregunta_id' => 299],
            ['texto' => '2 mm.', 'valor' => false, 'pregunta_id' => 299],

            ['texto' => 'Lanzadores tanto por diestros como zurdos.', 'valor' => false, 'pregunta_id' => 300],
            ['texto' => 'Solo lanzadores diestros.', 'valor' => false, 'pregunta_id' => 300],
            ['texto' => 'Solo lanzadores zurdos.', 'valor' => false, 'pregunta_id' => 300],

            ['texto' => 'Defensiva se el radio de acción es inferior al alcance.', 'valor' => false, 'pregunta_id' => 301],
            ['texto' => 'Pueden lanzarse hasta una distancia de 20 o 30 metros según la potencia y destreza del tirador.', 'valor' => false, 'pregunta_id' => 301],
            ['texto' => 'Cualquier granada ofensiva puede ser empleada en la defensiva.', 'valor' => false, 'pregunta_id' => 301],

            ['texto' => 'Es la denominada ALH-LLL.', 'valor' => false, 'pregunta_id' => 302],
            ['texto' => 'Es un dispositivo eléctrico que controla el estado de seguridad.', 'valor' => false, 'pregunta_id' => 302],
            ['texto' => 'La energía eléctrica no se genera hasta después del lanzamiento.', 'valor' => false, 'pregunta_id' => 302],

            ['texto' => '4.5 seg.', 'valor' => false, 'pregunta_id' => 303],
            ['texto' => '4 seg.', 'valor' => false, 'pregunta_id' => 303],
            ['texto' => '3.5 se.', 'valor' => false, 'pregunta_id' => 303],

            ['texto' => '10 años.', 'valor' => false, 'pregunta_id' => 304],
            ['texto' => '15 años.', 'valor' => false, 'pregunta_id' => 304],
            ['texto' => '20 años.', 'valor' => false, 'pregunta_id' => 304],


            ['texto' => '136mm.', 'valor' => false, 'pregunta_id' => 305],
            ['texto' => '127mm.', 'valor' => false, 'pregunta_id' => 305],
            ['texto' => '29 mm.', 'valor' => false, 'pregunta_id' => 305],
            ['texto' => '173mm.', 'valor' => false, 'pregunta_id' => 305],

            ['texto' => 'Recamara y anima.', 'valor' => false, 'pregunta_id' => 306],
            ['texto' => 'Recamara.', 'valor' => false, 'pregunta_id' => 306],
            ['texto' => 'Recamara y anima estriada.', 'valor' => false, 'pregunta_id' => 306],
            ['texto' => 'Recamara y gatillo.', 'valor' => false, 'pregunta_id' => 306],

            ['texto' => '4.', 'valor' => false, 'pregunta_id' => 307],
            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 307],
            ['texto' => '6.', 'valor' => false, 'pregunta_id' => 307],

            ['texto' => 'Polímero total, poliamidico.', 'valor' => false, 'pregunta_id' => 308],
            ['texto' => 'Polímero integral, polimero .', 'valor' => false, 'pregunta_id' => 308],
            ['texto' => 'Polímero, poliamidico.', 'valor' => false, 'pregunta_id' => 308],
            ['texto' => 'Polímero integral, poliamidico.', 'valor' => false, 'pregunta_id' => 308],

            ['texto' => 'Seguros de caída.', 'valor' => false, 'pregunta_id' => 309],
            ['texto' => 'Seguro automatico de aguja.', 'valor' => false, 'pregunta_id' => 309],
            ['texto' => 'Seguro bloqueo.', 'valor' => false, 'pregunta_id' => 309],
            ['texto' => 'Seguro de aleta y des-martillado.', 'valor' => false, 'pregunta_id' => 309],

            ['texto' => '30mts.', 'valor' => false, 'pregunta_id' => 310],
            ['texto' => '60mts.', 'valor' => false, 'pregunta_id' => 310],
            ['texto' => '40mts.', 'valor' => false, 'pregunta_id' => 310],
            ['texto' => '50mts.', 'valor' => false, 'pregunta_id' => 310],

            ['texto' => 'Sistema de desamartillado.', 'valor' => false, 'pregunta_id' => 311],
            ['texto' => 'Sistema de seguridad activo y pasivo.', 'valor' => false, 'pregunta_id' => 311],
            ['texto' => 'Todas son correctas.', 'valor' => false, 'pregunta_id' => 311],
            ['texto' => 'Martillos a la vista.', 'valor' => false, 'pregunta_id' => 311],

            ['texto' => 'Autonomía de fuego (15 disparos).', 'valor' => false, 'pregunta_id' => 312],
            ['texto' => 'Ambidiestra casi en su totalidad.', 'valor' => false, 'pregunta_id' => 312],
            ['texto' => 'Fabricada con una mezcla de plástico poliamidico y fibra de vidrio (polímero integral).', 'valor' => false, 'pregunta_id' => 312],
            ['texto' => 'Todas son correctas.', 'valor' => false, 'pregunta_id' => 312],

            ['texto' => 'Calibre 9X12mm Parabelum.', 'valor' => false, 'pregunta_id' => 313],
            ['texto' => 'Calibre 9X12mm Parabelum.', 'valor' => false, 'pregunta_id' => 313],
            ['texto' => 'Calibre 9X12mm Parabelum.', 'valor' => false, 'pregunta_id' => 313],
            ['texto' => 'Calibre 9X12mm Parabelum.', 'valor' => false, 'pregunta_id' => 313],

            ['texto' => 'Velocidad inicial aproximada 355m/seg.', 'valor' => false, 'pregunta_id' => 314],
            ['texto' => 'Velocidad inicial aproximada 360m/seg.', 'valor' => false, 'pregunta_id' => 314],
            ['texto' => 'Velocidad inicial aproximada 365m/seg.', 'valor' => false, 'pregunta_id' => 314],
            ['texto' => 'Velocidad inicial aproximada 320m/seg.', 'valor' => false, 'pregunta_id' => 314],

            ['texto' => 'Pistola por percusión.', 'valor' => false, 'pregunta_id' => 315],
            ['texto' => 'Pistola semiautomática.', 'valor' => false, 'pregunta_id' => 315],
            ['texto' => 'Pistola automática.', 'valor' => false, 'pregunta_id' => 315],
            ['texto' => 'Todas son incorrectas.', 'valor' => false, 'pregunta_id' => 315],

            ['texto' => 'Acerraojamiento rígido por rodillos de bloqueo.', 'valor' => false, 'pregunta_id' => 316],
            ['texto' => 'Acerrrojamiento semirrígido por rodillos de bloqueo.', 'valor' => false, 'pregunta_id' => 316],
            ['texto' => 'Acerrojamiento por interposición de bloque de la recámara.', 'valor' => false, 'pregunta_id' => 316],
            ['texto' => 'Acerrojamiento semirrígido por interposición de bloqueo de la recamara.', 'valor' => false, 'pregunta_id' => 316],

            ['texto' => 'Desbloqueo por corto retroceso basculante del cañón con sistema de amortiguación.', 'valor' => false, 'pregunta_id' => 317],
            ['texto' => 'Bloqueo por largo retroceso basculante del cañón con sistema de amortiguación.', 'valor' => false, 'pregunta_id' => 317],
            ['texto' => 'Bloqueo por largo retroceso basculante del cañón con sistema de amortiguación.', 'valor' => false, 'pregunta_id' => 317],
            ['texto' => 'Desbloqueo por largo retroceso basculante del cañón con sistema de amortiguación.', 'valor' => false, 'pregunta_id' => 317],

            ['texto' => 'Mecanismo de disparo de doble acción.', 'valor' => false, 'pregunta_id' => 318],
            ['texto' => 'Mecanismo de disparo simple/doble acción.', 'valor' => false, 'pregunta_id' => 318],
            ['texto' => 'Mecanismo de disparo simple/doble/triple acción.', 'valor' => false, 'pregunta_id' => 318],
            ['texto' => 'Mecanismo de disparo de simple acción.', 'valor' => false, 'pregunta_id' => 318],

            ['texto' => 'Martillo oculto.', 'valor' => false, 'pregunta_id' => 319],
            ['texto' => 'Martillo oculto/a la vista.', 'valor' => false, 'pregunta_id' => 319],
            ['texto' => 'Martillo a la vista.', 'valor' => false, 'pregunta_id' => 319],
            ['texto' => 'Ninguna correcta.', 'valor' => false, 'pregunta_id' => 319],

            ['texto' => 'Todas son incorrectas.', 'valor' => false, 'pregunta_id' => 320],
            ['texto' => 'Sistema de amartillado.', 'valor' => false, 'pregunta_id' => 320],
            ['texto' => 'Sin sistema de martillo.', 'valor' => false, 'pregunta_id' => 320],
            ['texto' => 'Sistema de desamartillado.', 'valor' => false, 'pregunta_id' => 320],

            ['texto' => 'Sistemas de seguridad automáticos/manuales.', 'valor' => false, 'pregunta_id' => 321],
            ['texto' => 'Sistemas de seguridad activos/pasivos.', 'valor' => false, 'pregunta_id' => 321],
            ['texto' => 'Sistemas de seguridad activos.', 'valor' => false, 'pregunta_id' => 321],
            ['texto' => 'Sistemas de seguridad activos.', 'valor' => false, 'pregunta_id' => 321],

            ['texto' => 'Ambidiestra en su totalidad.', 'valor' => false, 'pregunta_id' => 322],
            ['texto' => 'Ambidiestro casi en su totalidad.', 'valor' => false, 'pregunta_id' => 322],
            ['texto' => 'En el armamento no existe.', 'valor' => false, 'pregunta_id' => 322],
            ['texto' => 'Sólo apta para diestros.', 'valor' => false, 'pregunta_id' => 322],

            ['texto' => 'Seguro automático de la aguja.', 'valor' => false, 'pregunta_id' => 323],
            ['texto' => 'Seguro de caída.', 'valor' => false, 'pregunta_id' => 323],
            ['texto' => 'Seguro de bloqueo.', 'valor' => false, 'pregunta_id' => 323],
            ['texto' => 'Seguro de distancia.', 'valor' => false, 'pregunta_id' => 323],

            ['texto' => 'Seguro automático de la aguja.', 'valor' => false, 'pregunta_id' => 324],
            ['texto' => 'Seguro de caída.', 'valor' => false, 'pregunta_id' => 324],
            ['texto' => 'La A y B son correcta.', 'valor' => false, 'pregunta_id' => 324],

            ['texto' => 'Seguro automático de la aguja.', 'valor' => false, 'pregunta_id' => 325],
            ['texto' => 'Seguro de caída.', 'valor' => false, 'pregunta_id' => 325],
            ['texto' => 'Seguro de bloqueo.', 'valor' => false, 'pregunta_id' => 325],
            ['texto' => 'Seguro de aleta y desamartillado.', 'valor' => false, 'pregunta_id' => 325],

            ['texto' => 'Elementos de puntería.', 'valor' => false, 'pregunta_id' => 326],
            ['texto' => 'Seguro de aleta y desamartillado.', 'valor' => false, 'pregunta_id' => 326],
            ['texto' => 'Mecanismo de disparo.', 'valor' => false, 'pregunta_id' => 326],
            ['texto' => 'Alojamiento del cargador.', 'valor' => false, 'pregunta_id' => 326],

            ['texto' => '109 milímetros.', 'valor' => false, 'pregunta_id' => 327],
            ['texto' => '127 milímetros.', 'valor' => false, 'pregunta_id' => 327],
            ['texto' => '91 milímetros.', 'valor' => false, 'pregunta_id' => 327],
            ['texto' => '136 milímetros.', 'valor' => false, 'pregunta_id' => 327],

            ['texto' => 'Modo automático.', 'valor' => false, 'pregunta_id' => 328],
            ['texto' => 'Modo repetición.', 'valor' => false, 'pregunta_id' => 328],
            ['texto' => 'Modo simple acción.', 'valor' => false, 'pregunta_id' => 328],
            ['texto' => 'Modo doble acción.', 'valor' => false, 'pregunta_id' => 328],

            ['texto' => 'De un solo tiro.', 'valor' => false, 'pregunta_id' => 329],
            ['texto' => 'Semiautomática.', 'valor' => false, 'pregunta_id' => 329],
            ['texto' => 'De repetición.', 'valor' => false, 'pregunta_id' => 329],
            ['texto' => 'Automática.', 'valor' => false, 'pregunta_id' => 329],

            ['texto' => '150 metros.', 'valor' => false, 'pregunta_id' => 330],
            ['texto' => '70 metros.', 'valor' => false, 'pregunta_id' => 330],
            ['texto' => '90 metros.', 'valor' => false, 'pregunta_id' => 330],
            ['texto' => '50 metros.', 'valor' => false, 'pregunta_id' => 330],

            ['texto' => '34 milímetros.', 'valor' => false, 'pregunta_id' => 331],
            ['texto' => '39 milímetros.', 'valor' => false, 'pregunta_id' => 331],
            ['texto' => '15 milímetros.', 'valor' => false, 'pregunta_id' => 331],
            ['texto' => '29 milímetros.', 'valor' => false, 'pregunta_id' => 331],

            ['texto' => 'Guía del recuperador.', 'valor' => false, 'pregunta_id' => 332],
            ['texto' => 'Casquillo amortiguador.', 'valor' => false, 'pregunta_id' => 332],
            ['texto' => 'Resorte recuperador.', 'valor' => false, 'pregunta_id' => 332],
            ['texto' => 'Todas son correctas.', 'valor' => false, 'pregunta_id' => 332],

            ['texto' => '95 gramos.', 'valor' => false, 'pregunta_id' => 333],
            ['texto' => '45 gramos.', 'valor' => false, 'pregunta_id' => 333],
            ['texto' => '85 gramos.', 'valor' => false, 'pregunta_id' => 333],
            ['texto' => '65 gramos.', 'valor' => false, 'pregunta_id' => 333],

            ['texto' => 'Si rayado es poligonal, cuyo paso es de 250 milímetros, seis caras a dextrógiro (a derechas)', 'valor' => false, 'pregunta_id' => 334],
            ['texto' => 'Se rayado es poligonal, cuyo paso es de 250 milímetros, seis caras a dextrógiro (a izquierdas)', 'valor' => false, 'pregunta_id' => 334],
            ['texto' => 'Su rayado es poligonal, cuyo paso es de 250 milímetros, cuatro caras a dextrógiro(a derechas)', 'valor' => false, 'pregunta_id' => 334],
            ['texto' => 'Su rayado es poligonal, cuyo paso es de 250 milímetros, cuatro caras a dextrógiro (a izquierdas)', 'valor' => false, 'pregunta_id' => 334],

            ['texto' => 'Más de 3000 kg/cm2.', 'valor' => false, 'pregunta_id' => 335],
            ['texto' => 'Más de 5000 kg/cm2.', 'valor' => false, 'pregunta_id' => 335],
            ['texto' => 'Más de 3500 kg/cm2.', 'valor' => false, 'pregunta_id' => 335],
            ['texto' => 'Menos de 3000 kg/cm2.', 'valor' => false, 'pregunta_id' => 335],

            ['texto' => '20 disparos.', 'valor' => false, 'pregunta_id' => 336],
            ['texto' => '15 disparos.', 'valor' => false, 'pregunta_id' => 336],
            ['texto' => '13 disparos.', 'valor' => false, 'pregunta_id' => 336],
            ['texto' => '12 disparos.', 'valor' => false, 'pregunta_id' => 336],

            ['texto' => '455 gramos.', 'valor' => false, 'pregunta_id' => 337],
            ['texto' => '465 gramos.', 'valor' => false, 'pregunta_id' => 337],
            ['texto' => '645 gramos.', 'valor' => false, 'pregunta_id' => 337],
            ['texto' => '654 gramos.', 'valor' => false, 'pregunta_id' => 337],

            ['texto' => '9 x 19 milímetros pallaberum.', 'valor' => false, 'pregunta_id' => 338],
            ['texto' => '9 x 19 milímetros parabellum.', 'valor' => false, 'pregunta_id' => 338],
            ['texto' => '19 x 9 milímetros pallaberum.', 'valor' => false, 'pregunta_id' => 338],
            ['texto' => '19 x 9 milímetros parabellum.', 'valor' => false, 'pregunta_id' => 338],

            ['texto' => 'Indicador de cartucho en recámara al tacto (extractor).', 'valor' => false, 'pregunta_id' => 339],
            ['texto' => 'Martillo a la vista.', 'valor' => false, 'pregunta_id' => 339],
            ['texto' => 'Indicador de temperatura del cañón.', 'valor' => false, 'pregunta_id' => 339],
            ['texto' => 'Indicador cantidad de munición en cargador.', 'valor' => false, 'pregunta_id' => 339],

            ['texto' => '157 milímetros.', 'valor' => false, 'pregunta_id' => 340],
            ['texto' => '127 milímetros.', 'valor' => false, 'pregunta_id' => 340],
            ['texto' => '153 milímetros.', 'valor' => false, 'pregunta_id' => 340],
            ['texto' => '173 milímetros.', 'valor' => false, 'pregunta_id' => 340],

            ['texto' => 'Recámara.', 'valor' => false, 'pregunta_id' => 341],
            ['texto' => 'Percusión.', 'valor' => false, 'pregunta_id' => 341],
            ['texto' => 'Anima.', 'valor' => false, 'pregunta_id' => 341],
            ['texto' => 'La A y C son correctas.', 'valor' => false, 'pregunta_id' => 341],

            ['texto' => 'Alojamiento del cargador.', 'valor' => false, 'pregunta_id' => 342],
            ['texto' => 'Extracción.', 'valor' => false, 'pregunta_id' => 342],
            ['texto' => 'Expulsión.', 'valor' => false, 'pregunta_id' => 342],
            ['texto' => 'Seguro de bloqueo.', 'valor' => false, 'pregunta_id' => 342],

            ['texto' => 'Extracción.', 'valor' => false, 'pregunta_id' => 343],
            ['texto' => 'Elementos de puntería.', 'valor' => false, 'pregunta_id' => 343],
            ['texto' => 'Recuperación y amortiguación.', 'valor' => false, 'pregunta_id' => 343],
            ['texto' => 'Resorte recuperador.', 'valor' => false, 'pregunta_id' => 343],

            ['texto' => 'Extracción.', 'valor' => false, 'pregunta_id' => 344],
            ['texto' => 'Recámara.', 'valor' => false, 'pregunta_id' => 344],
            ['texto' => 'Percusión (a falta del martillo, considerado dentro del mecanismo de percusión).', 'valor' => false, 'pregunta_id' => 344],
            ['texto' => 'Recuperación y amortiguación.', 'valor' => false, 'pregunta_id' => 344],

            ['texto' => 'Indicador de temperatura del cañón.', 'valor' => false, 'pregunta_id' => 345],
            ['texto' => 'Indicador de cartucho en Recámara al tacto (extractor)', 'valor' => false, 'pregunta_id' => 345],
            ['texto' => 'Martillo a la vista.', 'valor' => false, 'pregunta_id' => 345],
            ['texto' => 'Indicador de cantidad de munición del cargador.', 'valor' => false, 'pregunta_id' => 345],

            ['texto' => '127 milímetros.', 'valor' => false, 'pregunta_id' => 346],
            ['texto' => '107 milímetros.', 'valor' => false, 'pregunta_id' => 346],
            ['texto' => '153 milímetros.', 'valor' => false, 'pregunta_id' => 346],
            ['texto' => '193 milímetros.', 'valor' => false, 'pregunta_id' => 346],

            ['texto' => '34 milímetros.', 'valor' => false, 'pregunta_id' => 347],
            ['texto' => '39 milímetros.', 'valor' => false, 'pregunta_id' => 347],
            ['texto' => '15 milímetros.', 'valor' => false, 'pregunta_id' => 347],
            ['texto' => '29 milímetros.', 'valor' => false, 'pregunta_id' => 347],

            ['texto' => '355 km/s.', 'valor' => false, 'pregunta_id' => 348],
            ['texto' => '553 m/s', 'valor' => false, 'pregunta_id' => 348],
            ['texto' => '353 m/s.', 'valor' => false, 'pregunta_id' => 348],
            ['texto' => '355 m/s.', 'valor' => false, 'pregunta_id' => 348],

            ['texto' => '20 disparos', 'valor' => false, 'pregunta_id' => 349],
            ['texto' => '15 disparos', 'valor' => false, 'pregunta_id' => 349],
            ['texto' => '13 disparos', 'valor' => false, 'pregunta_id' => 349],
            ['texto' => '12 disparos', 'valor' => false, 'pregunta_id' => 349],

            ['texto' => 'Modo tiro a tiro y automático.', 'valor' => false, 'pregunta_id' => 350],
            ['texto' => 'Modo repetición y doble repetición.', 'valor' => false, 'pregunta_id' => 350],
            ['texto' => 'Modo simple y doble acción.', 'valor' => false, 'pregunta_id' => 350],
            ['texto' => 'Modo seguro y modo acción.', 'valor' => false, 'pregunta_id' => 350],

            ['texto' => 'Rígido por interposición del bloqueo de la Recámara', 'valor' => false, 'pregunta_id' => 351],
            ['texto' => 'Rígido sin interposición del bloqueo de la Recámara', 'valor' => false, 'pregunta_id' => 351],
            ['texto' => 'Semirrígido por interposición del bloqueo de la Recámara', 'valor' => false, 'pregunta_id' => 351],
            ['texto' => 'Semirrígido sin interposición del bloqueo de la Recámara', 'valor' => false, 'pregunta_id' => 351],

            ['texto' => 'Es el estudio del proyectil en el interior del tubo, en la atmosfera y en el blanco.', 'valor' => false, 'pregunta_id' => 352],
            ['texto' => 'Es el estudio del proyectil en el exterior del tubo, en la atmosfera y en el blanco.', 'valor' => false, 'pregunta_id' => 352],
            ['texto' => 'Es el estudio del proyectil tanto en el interior como en el exterior del tubo, en la atmosfera ye en el blanco.', 'valor' => false, 'pregunta_id' => 352],
            ['texto' => 'Es el estudio del proyectil en el interior del tubo y en la atmosfera.', 'valor' => false, 'pregunta_id' => 352],

            ['texto' => 'Disparo es el conjunto de elementos que proporcionan la energía necesaria para el desplazamiento.', 'valor' => false, 'pregunta_id' => 353],
            ['texto' => 'Disparo es el conjunto de elementos con los que se logran la acción en lo subobjetivo.', 'valor' => false, 'pregunta_id' => 353],
            ['texto' => 'Disparo es el artificio de fuego que actúa la carga de proyección.', 'valor' => false, 'pregunta_id' => 353],
            ['texto' => 'Disparo es el conjunto de elementos con los que se logran la acción sobre el objetivo.', 'valor' => false, 'pregunta_id' => 353],

            ['texto' => 'Logran su efecto exclusivamente por la fuerza de choque.', 'valor' => false, 'pregunta_id' => 354],
            ['texto' => 'Logran su efecto con la fuerza perforante y la fuerza de choque.', 'valor' => false, 'pregunta_id' => 354],
            ['texto' => 'Logran su efecto exclusivamente por la fuerza perforante.', 'valor' => false, 'pregunta_id' => 354],
            ['texto' => 'No logran su efecto exclusivamente por la fuerza de choque.', 'valor' => false, 'pregunta_id' => 354],

            ['texto' => 'La carga de proyección explosiva se encuentra en el proyectil.', 'valor' => false, 'pregunta_id' => 355],
            ['texto' => 'En la bala se encuentra el culote donde se aloja la capsula fulminante que es la encargada de proyectarla.', 'valor' => false, 'pregunta_id' => 355],
            ['texto' => 'La bala se proyecta hacia adelante por la fuerza de la presión de gases de la carga de proyección.', 'valor' => false, 'pregunta_id' => 355],
            ['texto' => 'La bala se proyecta hacia adelante por la fuerza de la presión de gases y atmosfera 0.', 'valor' => false, 'pregunta_id' => 355],

            ['texto' => 'Rompedoras actúan por la fragmentación que se produce.', 'valor' => false, 'pregunta_id' => 356],
            ['texto' => 'Perforante tiene una carga interior de balines eléctricos.', 'valor' => false, 'pregunta_id' => 356],
            ['texto' => 'Especiales, como las de metralla, gramíneos o incendiarias.', 'valor' => false, 'pregunta_id' => 356],
            ['texto' => 'Rompedoras actúan por la fragmentación que se produce.', 'valor' => false, 'pregunta_id' => 356],

            ['texto' => 'Armas de cañón no excede de los 30cm.', 'valor' => false, 'pregunta_id' => 357],
            ['texto' => 'Carabina.', 'valor' => false, 'pregunta_id' => 357],
            ['texto' => 'Revolver.', 'valor' => false, 'pregunta_id' => 357],

            ['texto' => 'Carga de proyección y estopín.', 'valor' => false, 'pregunta_id' => 358],
            ['texto' => 'Tipo núcleo y carga de proyección.', 'valor' => false, 'pregunta_id' => 358],
            ['texto' => 'Proyectil y vaina.', 'valor' => false, 'pregunta_id' => 358],

            ['texto' => 'Es la que une el origen del tiro con el objetivo que desea batir.', 'valor' => false, 'pregunta_id' => 359],
            ['texto' => 'Es la tangente a la trayectoria en el origen.', 'valor' => false, 'pregunta_id' => 359],
            ['texto' => 'Es el formado por la línea de tiro y línea de situación.', 'valor' => false, 'pregunta_id' => 359],

            ['texto' => 'Es la de mayor distancia a la que el proyectil puede conseguir los efectos de destrucción.', 'valor' => false, 'pregunta_id' => 360],
            ['texto' => 'Es la de mayor distancia a la que un tirador d condiciones medias', 'valor' => false, 'pregunta_id' => 360],
            ['texto' => 'consigue un rendimiento del 33%.', 'valor' => false, 'pregunta_id' => 360],
            ['texto' => 'La mayor distancia a la que puede ser lanzado un proyectil.', 'valor' => false, 'pregunta_id' => 360],

            ['texto' => 'Directas.', 'valor' => false, 'pregunta_id' => 361],
            ['texto' => 'Perforantes.', 'valor' => false, 'pregunta_id' => 361],
            ['texto' => 'Especiales.', 'valor' => false, 'pregunta_id' => 361],

            ['texto' => 'Es la perpendicular al plano de tiro que contiene a la línea de situación.', 'valor' => false, 'pregunta_id' => 362],
            ['texto' => 'Es el formado por la línea de tiro y línea de situación.', 'valor' => false, 'pregunta_id' => 362],
            ['texto' => 'Es el formado por la línea de tiro y la de mira.', 'valor' => false, 'pregunta_id' => 362],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 363],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 363],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 363],

            ['texto' => 'Es el formado por las líneas de proyección y la horizontal de referencia.', 'valor' => false, 'pregunta_id' => 364],
            ['texto' => 'Es el formado por las líneas de situación y de proyección.', 'valor' => false, 'pregunta_id' => 364],
            ['texto' => 'Es el ángulo formado por el terreno con la horizontal.', 'valor' => false, 'pregunta_id' => 364],

            ['texto' => 'Números de impactos en el blanco en un minuto.', 'valor' => false, 'pregunta_id' => 365],
            ['texto' => 'Probabilidad de conseguir impactos sobre el.', 'valor' => false, 'pregunta_id' => 365],
            ['texto' => 'Es la relación entre el numero de impactos obtenidos sobre el blanco y', 'valor' => false, 'pregunta_id' => 365],
            ['texto' => 'el de disparos efectuados.', 'valor' => false, 'pregunta_id' => 365],

            ['texto' => 'Fijante.', 'valor' => false, 'pregunta_id' => 366],
            ['texto' => 'Enfilada.', 'valor' => false, 'pregunta_id' => 366],
            ['texto' => 'Inclinado.', 'valor' => false, 'pregunta_id' => 366],

            ['texto' => 'Tiro de siega.', 'valor' => false, 'pregunta_id' => 367],
            ['texto' => 'Tiro abierto.', 'valor' => false, 'pregunta_id' => 367],
            ['texto' => 'Tiro rasante.', 'valor' => false, 'pregunta_id' => 367],

            ['texto' => 'Aquel que es correcto y preciso.', 'valor' => false, 'pregunta_id' => 368],
            ['texto' => 'Es aquel que corresponde a un agrupamiento de pequeña magnitud.', 'valor' => false, 'pregunta_id' => 368],
            ['texto' => 'La que se manifiesta por la distribución sobre un zona, al efectuar con', 'valor' => false, 'pregunta_id' => 368],
            ['texto' => 'la misma arma, una serie de disparos.', 'valor' => false, 'pregunta_id' => 368],

            ['texto' => 'Aquel que es correcto y preciso.', 'valor' => false, 'pregunta_id' => 369],
            ['texto' => 'Es aquel que corresponde a un agrupamiento de pequeña magnitud.', 'valor' => false, 'pregunta_id' => 369],
            ['texto' => 'La que se manifiesta por la distribución sobre una zona, al efectuar, con', 'valor' => false, 'pregunta_id' => 369],
            ['texto' => 'la misma arma, una serie de disparos.', 'valor' => false, 'pregunta_id' => 369],

            ['texto' => '0.4.', 'valor' => false, 'pregunta_id' => 370],
            ['texto' => '0.25.', 'valor' => false, 'pregunta_id' => 370],
            ['texto' => '4.', 'valor' => false, 'pregunta_id' => 370],

            ['texto' => 'FCTN.', 'valor' => false, 'pregunta_id' => 371],
            ['texto' => 'CHAN.', 'valor' => false, 'pregunta_id' => 371],
            ['texto' => 'MENU/ENTER.', 'valor' => false, 'pregunta_id' => 371],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 372],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 372],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 372],

            ['texto' => 'Pelotón con escuadra.', 'valor' => false, 'pregunta_id' => 373],
            ['texto' => 'Pelotón con sección.', 'valor' => false, 'pregunta_id' => 373],
            ['texto' => 'Sección con escuadra.', 'valor' => false, 'pregunta_id' => 373],

            ['texto' => 'Para cambiar las funciones de cifrado/claro.', 'valor' => false, 'pregunta_id' => 374],
            ['texto' => 'Cambia los canales programados.', 'valor' => false, 'pregunta_id' => 374],
            ['texto' => 'No existe esta función.', 'valor' => false, 'pregunta_id' => 374],

            ['texto' => 'Puesto táctico.', 'valor' => false, 'pregunta_id' => 375],
            ['texto' => 'Modo vox.', 'valor' => false, 'pregunta_id' => 375],
            ['texto' => 'Modo murmullo.', 'valor' => false, 'pregunta_id' => 375],

            ['texto' => 'MODO murmullo que está relacionado con la sensibilidad del micrófono.', 'valor' => false, 'pregunta_id' => 376],
            ['texto' => 'Nos da la opción de activar el micrófono por la voz en lugar de pulsar el PTT1.', 'valor' => false, 'pregunta_id' => 376],
            ['texto' => 'Nos da la opción de transmitir en la malla de jefe de escuadra con jefe de pelotón.', 'valor' => false, 'pregunta_id' => 376],

            ['texto' => '5 minutos.', 'valor' => false, 'pregunta_id' => 377],
            ['texto' => '10 minutos.', 'valor' => false, 'pregunta_id' => 377],
            ['texto' => '15 minutos.', 'valor' => false, 'pregunta_id' => 377],

            ['texto' => 'FCTN.', 'valor' => false, 'pregunta_id' => 378],
            ['texto' => 'MENU/ENTER.', 'valor' => false, 'pregunta_id' => 378],
            ['texto' => 'CHAN.', 'valor' => false, 'pregunta_id' => 378],

            ['texto' => 'CHAN.', 'valor' => false, 'pregunta_id' => 379],
            ['texto' => 'MENU/ENTER.', 'valor' => false, 'pregunta_id' => 379],
            ['texto' => 'CDMR.', 'valor' => false, 'pregunta_id' => 379],

            ['texto' => '8 horas.', 'valor' => false, 'pregunta_id' => 380],
            ['texto' => '6 horas.', 'valor' => false, 'pregunta_id' => 380],
            ['texto' => '12 horas.', 'valor' => false, 'pregunta_id' => 380],

            ['texto' => 'Cargador de batería.', 'valor' => false, 'pregunta_id' => 381],
            ['texto' => 'Microauricular con doble PTT.', 'valor' => false, 'pregunta_id' => 381],
            ['texto' => 'Cable coaxial AP-125.', 'valor' => false, 'pregunta_id' => 381],

            ['texto' => 'Emisor-Receptor.', 'valor' => false, 'pregunta_id' => 382],
            ['texto' => 'Adaptador manual.', 'valor' => false, 'pregunta_id' => 382],
            ['texto' => 'Soporte vehicular.', 'valor' => false, 'pregunta_id' => 382],

            ['texto' => 'RX.', 'valor' => false, 'pregunta_id' => 383],
            ['texto' => 'POT.', 'valor' => false, 'pregunta_id' => 383],
            ['texto' => 'RELE.', 'valor' => false, 'pregunta_id' => 383],

            ['texto' => '4.', 'valor' => false, 'pregunta_id' => 384],
            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 384],
            ['texto' => '2.', 'valor' => false, 'pregunta_id' => 384],

            ['texto' => 'debemos de tener en su manejo para un mejor rendimiento y evitar', 'valor' => false, 'pregunta_id' => 385],
            ['texto' => 'averías?', 'valor' => false, 'pregunta_id' => 385],
            ['texto' => 'No encender el equipo sin tener la antena instalada.', 'valor' => false, 'pregunta_id' => 385],
            ['texto' => 'No conectar el micro-teléfono sin haber instalado previamente la', 'valor' => false, 'pregunta_id' => 385],
            ['texto' => 'antena.', 'valor' => false, 'pregunta_id' => 385],
            ['texto' => 'No conectar el DDI antes de encenderé.', 'valor' => false, 'pregunta_id' => 385],

            ['texto' => '4.', 'valor' => false, 'pregunta_id' => 386],
            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 386],
            ['texto' => '2.', 'valor' => false, 'pregunta_id' => 386],

            ['texto' => 'Hay conmutadores que trasladan su función.', 'valor' => false, 'pregunta_id' => 387],
            ['texto' => 'El visualizador es menor y de tipo de matriz de puntos.', 'valor' => false, 'pregunta_id' => 387],
            ['texto' => 'El tornillo de tierra cambia de posición.', 'valor' => false, 'pregunta_id' => 387],

            ['texto' => 'Teléfono propiamente dicho.', 'valor' => false, 'pregunta_id' => 388],
            ['texto' => 'Pilas recargables.', 'valor' => false, 'pregunta_id' => 388],
            ['texto' => 'Bolsa de transporte.', 'valor' => false, 'pregunta_id' => 388],

            ['texto' => 'Solo sirve para indicar la llamada.', 'valor' => false, 'pregunta_id' => 389],
            ['texto' => 'Sirve para comprobar la línea.', 'valor' => false, 'pregunta_id' => 389],
            ['texto' => 'Comprobar el nivel de las baterías.', 'valor' => false, 'pregunta_id' => 389],

            ['texto' => 'De forma intermitente y con rapidez.', 'valor' => false, 'pregunta_id' => 390],
            ['texto' => 'De forma permanente.', 'valor' => false, 'pregunta_id' => 390],
            ['texto' => 'Depende del modelo de TP-6N.', 'valor' => false, 'pregunta_id' => 390],

            ['texto' => 'RED LIBRE: Es el sistema más empleado en las redes de grandes unidades', 'valor' => false, 'pregunta_id' => 391],
            ['texto' => 'REDEDIRIGIDA: las estaciones de deberán obtener el permiso de la “DIRECTORA” antes de comunicarse entre sí.', 'valor' => false, 'pregunta_id' => 391],
            ['texto' => 'Las redes que las unidades establecen en operaciones se denominara “REDES RADIO DE OPERACIONES”.', 'valor' => false, 'pregunta_id' => 391],

            ['texto' => 'No efectuar transmisiones que no hayan sido ordenadas por la autoridad.', 'valor' => false, 'pregunta_id' => 392],
            ['texto' => 'No se puede violar el silencio radio ordenado por la directora.', 'valor' => false, 'pregunta_id' => 392],
            ['texto' => 'Hay que aumentar al máximo las llamadas de prueba o sintonías.', 'valor' => false, 'pregunta_id' => 392],

            ['texto' => 'Distintas estaciones dentro de una malla.', 'valor' => false, 'pregunta_id' => 393],
            ['texto' => 'Esta denominación no existe en transmisiones.', 'valor' => false, 'pregunta_id' => 393],
            ['texto' => 'Conjunto de estaciones que enlazan entre si habitualmente.', 'valor' => false, 'pregunta_id' => 393],

            ['texto' => 'Indicativo son palabras o frases a las que se le han asignado significados con el fin de acelerar y clarificar la transmisión de los mensajes.', 'valor' => false, 'pregunta_id' => 394],
            ['texto' => 'Corresponsales es el conjunto de estaciones que enlazan habitualmente entre si y utilizan una misma frecuencia.', 'valor' => false, 'pregunta_id' => 394],
            ['texto' => 'Voces-tipo son las palabras o frases a las que se le han asignado significados son el fin de acelerar y clarificar la transmisión de los mensajes.', 'valor' => false, 'pregunta_id' => 394],

            ['texto' => 'Violet.', 'valor' => false, 'pregunta_id' => 395],
            ['texto' => 'Vodka', 'valor' => false, 'pregunta_id' => 395],
            ['texto' => 'Victor.', 'valor' => false, 'pregunta_id' => 395],
            ['texto' => 'Victoria.', 'valor' => false, 'pregunta_id' => 395],

            ['texto' => 'A: Ambar.', 'valor' => false, 'pregunta_id' => 396],
            ['texto' => 'Ñ: Ñoño.', 'valor' => false, 'pregunta_id' => 396],
            ['texto' => 'Q: Quilo.', 'valor' => false, 'pregunta_id' => 396],

            ['texto' => '6 números, 3 letras y 2 números.', 'valor' => false, 'pregunta_id' => 397],
            ['texto' => '2 números, 3 letras y 6 números.', 'valor' => false, 'pregunta_id' => 397],
            ['texto' => '2 números, 3 letras y 2 números.', 'valor' => false, 'pregunta_id' => 397],

            ['texto' => 'Las unidades tipo batallón recibe este documento de su unidad superior.', 'valor' => false, 'pregunta_id' => 398],
            ['texto' => 'La IBT marca la norma hasta nivel pelotón.', 'valor' => false, 'pregunta_id' => 398],
            ['texto' => 'De entre los documentos que deben figurar en la IBT no esta un lenguaje convenido.', 'valor' => false, 'pregunta_id' => 398],

            ['texto' => 'Pozo de tirador.', 'valor' => false, 'pregunta_id' => 399],
            ['texto' => 'Pozo de tirador.', 'valor' => false, 'pregunta_id' => 399],
            ['texto' => 'Abrigo.', 'valor' => false, 'pregunta_id' => 399],
            ['texto' => 'Pozo de sección.', 'valor' => false, 'pregunta_id' => 399],

            ['texto' => 'Dormir 4 horas cada 24 horas.', 'valor' => false, 'pregunta_id' => 400],
            ['texto' => 'Dormir 8 horas de día.', 'valor' => false, 'pregunta_id' => 400],
            ['texto' => 'Dormir cuando se permita.', 'valor' => false, 'pregunta_id' => 400],
            ['texto' => 'Dormir cuando uno quiera.', 'valor' => false, 'pregunta_id' => 400],

            ['texto' => 'Referenciado.', 'valor' => false, 'pregunta_id' => 401],
            ['texto' => 'Protegido.', 'valor' => false, 'pregunta_id' => 401],
            ['texto' => 'Accesible.', 'valor' => false, 'pregunta_id' => 401],

            ['texto' => 'Ocultación.', 'valor' => false, 'pregunta_id' => 402],
            ['texto' => 'Cubierta.', 'valor' => false, 'pregunta_id' => 402],
            ['texto' => 'Camuflaje.', 'valor' => false, 'pregunta_id' => 402],
            ['texto' => 'Abrigo.', 'valor' => false, 'pregunta_id' => 402],

            ['texto' => 'Fijos.', 'valor' => false, 'pregunta_id' => 403],
            ['texto' => 'Móviles.', 'valor' => false, 'pregunta_id' => 403],
            ['texto' => 'Fijos y móviles.', 'valor' => false, 'pregunta_id' => 403],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 403],

            ['texto' => '2.', 'valor' => false, 'pregunta_id' => 404],
            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 404],
            ['texto' => '4.', 'valor' => false, 'pregunta_id' => 404],
            ['texto' => '5.', 'valor' => false, 'pregunta_id' => 404],

            ['texto' => 'Continuamente.', 'valor' => false, 'pregunta_id' => 405],
            ['texto' => 'Al principio.', 'valor' => false, 'pregunta_id' => 405],
            ['texto' => 'Después década combate.', 'valor' => false, 'pregunta_id' => 405],
            ['texto' => 'Solo si llueve.', 'valor' => false, 'pregunta_id' => 405],

            ['texto' => 'Realizar la observación en el sector marcado.', 'valor' => false, 'pregunta_id' => 406],
            ['texto' => 'Abrir fuego si tiene la mejor oportunidad para ello.', 'valor' => false, 'pregunta_id' => 406],
            ['texto' => 'Corregir el fuego propio para ayudar a su corrección.', 'valor' => false, 'pregunta_id' => 406],
            ['texto' => 'Realizar la observación sobre una zona asignada.', 'valor' => false, 'pregunta_id' => 406],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 407],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 407],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 407],
            ['texto' => 'Según se vea desde el observatorio donde están los generales dirigiendo la maniobra.', 'valor' => false, 'pregunta_id' => 407],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 408],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 408],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 408],
            ['texto' => 'Del descanso del guerrero.', 'valor' => false, 'pregunta_id' => 408],

            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 409],
            ['texto' => '2.', 'valor' => false, 'pregunta_id' => 409],
            ['texto' => '1.', 'valor' => false, 'pregunta_id' => 409],
            ['texto' => '5.', 'valor' => false, 'pregunta_id' => 409],

            ['texto' => 'Abrigo.', 'valor' => false, 'pregunta_id' => 410],
            ['texto' => 'Pozo tirador.', 'valor' => false, 'pregunta_id' => 410],
            ['texto' => 'Obra fortificada.', 'valor' => false, 'pregunta_id' => 410],
            ['texto' => 'Cubierta.', 'valor' => false, 'pregunta_id' => 410],

            ['texto' => '1 y 2.', 'valor' => false, 'pregunta_id' => 411],
            ['texto' => '3 y 4.', 'valor' => false, 'pregunta_id' => 411],
            ['texto' => '2 y 3.', 'valor' => false, 'pregunta_id' => 411],
            ['texto' => '3 y 5.', 'valor' => false, 'pregunta_id' => 411],

            ['texto' => 'Señales luminosas.', 'valor' => false, 'pregunta_id' => 412],
            ['texto' => 'Escritas.', 'valor' => false, 'pregunta_id' => 412],
            ['texto' => 'Por la actitud.', 'valor' => false, 'pregunta_id' => 412],

            ['texto' => 'Barreras.', 'valor' => false, 'pregunta_id' => 413],
            ['texto' => 'Concentraciones.', 'valor' => false, 'pregunta_id' => 413],
            ['texto' => 'Disperso.', 'valor' => false, 'pregunta_id' => 413],
            ['texto' => 'Concentrado.', 'valor' => false, 'pregunta_id' => 413],

            ['texto' => 'Debe proporcionarle al soldado los conocimientos y capacidad para permitirle actuar como combatiente dentro de una unidad.', 'valor' => false, 'pregunta_id' => 414],
            ['texto' => 'Ante todo el soldado a de ser uno más de la unidad, para ello ha de estar perfectamente instruido en combate de grupo.', 'valor' => false, 'pregunta_id' => 414],
            ['texto' => 'El terreno es el escenario donde tiene lugar el combate.', 'valor' => false, 'pregunta_id' => 414],

            ['texto' => 'Si.', 'valor' => false, 'pregunta_id' => 415],
            ['texto' => 'No.', 'valor' => false, 'pregunta_id' => 415],
            ['texto' => 'Dependiendo de las circunstancias.', 'valor' => false, 'pregunta_id' => 415],
            ['texto' => 'Nunca bajo ningún concepto.', 'valor' => false, 'pregunta_id' => 415],

            ['texto' => 'Simple.', 'valor' => false, 'pregunta_id' => 416],
            ['texto' => 'Continuo.', 'valor' => false, 'pregunta_id' => 416],
            ['texto' => 'Progresivo.', 'valor' => false, 'pregunta_id' => 416],
            ['texto' => 'A día de hoy no es necesario enmascararse, solo lo hacen los más veteranos.', 'valor' => false, 'pregunta_id' => 416],

            ['texto' => '30 minutos.', 'valor' => false, 'pregunta_id' => 417],
            ['texto' => '25 minutos.', 'valor' => false, 'pregunta_id' => 417],
            ['texto' => '15 minutos.', 'valor' => false, 'pregunta_id' => 417],
            ['texto' => '10 minutos.', 'valor' => false, 'pregunta_id' => 417],

            ['texto' => 'Consiste en confundirse con el terreno por medio de la disimulación y el engaño.', 'valor' => false, 'pregunta_id' => 418],
            ['texto' => 'El enmascaramiento propiamente dicho se refiere únicamente al combatiente y el equipo.', 'valor' => false, 'pregunta_id' => 418],
            ['texto' => 'La ocultación es modificar el aspecto de los medios propios de tal forma que se confundan con el aspecto del terreno.', 'valor' => false, 'pregunta_id' => 418],

            ['texto' => 'Dispersión.', 'valor' => false, 'pregunta_id' => 419],
            ['texto' => 'Cuerpo a tierra.', 'valor' => false, 'pregunta_id' => 419],
            ['texto' => 'Abrir fuego.', 'valor' => false, 'pregunta_id' => 419],
            ['texto' => 'Echarme el poncho encima.', 'valor' => false, 'pregunta_id' => 419],

            ['texto' => 'La climatología.', 'valor' => false, 'pregunta_id' => 420],
            ['texto' => 'El terreno.', 'valor' => false, 'pregunta_id' => 420],
            ['texto' => 'La situación del enemigo.', 'valor' => false, 'pregunta_id' => 420],

            ['texto' => 'Ocultación y densidad.', 'valor' => false, 'pregunta_id' => 421],
            ['texto' => 'Ocultación y orientación.', 'valor' => false, 'pregunta_id' => 421],
            ['texto' => 'Ocultación y enmascaramiento.', 'valor' => false, 'pregunta_id' => 421],
            ['texto' => 'Ocultación y desorientación.', 'valor' => false, 'pregunta_id' => 421],

            ['texto' => 'Acantonamiento.', 'valor' => false, 'pregunta_id' => 422],
            ['texto' => 'Campamento.', 'valor' => false, 'pregunta_id' => 422],
            ['texto' => 'Destacamento.', 'valor' => false, 'pregunta_id' => 422],

            ['texto' => 'Completa.', 'valor' => false, 'pregunta_id' => 423],
            ['texto' => 'Constante.', 'valor' => false, 'pregunta_id' => 423],
            ['texto' => 'Ilimitada.', 'valor' => false, 'pregunta_id' => 423],

            ['texto' => 'Ocultarse.', 'valor' => false, 'pregunta_id' => 424],
            ['texto' => 'Cegar.', 'valor' => false, 'pregunta_id' => 424],
            ['texto' => 'Cubierta.', 'valor' => false, 'pregunta_id' => 424],
            ['texto' => 'Ponchear.', 'valor' => false, 'pregunta_id' => 424],

            ['texto' => 'Señales luminosas.', 'valor' => false, 'pregunta_id' => 425],
            ['texto' => 'Escritas.', 'valor' => false, 'pregunta_id' => 425],
            ['texto' => 'Por actitud.', 'valor' => false, 'pregunta_id' => 425],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 426],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 426],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 426],

            ['texto' => 'Referenciado.', 'valor' => false, 'pregunta_id' => 427],
            ['texto' => 'Protegido.', 'valor' => false, 'pregunta_id' => 427],
            ['texto' => 'Accesible.', 'valor' => false, 'pregunta_id' => 427],
            ['texto' => 'Con protección.', 'valor' => false, 'pregunta_id' => 427],

            ['texto' => 'Orientación.', 'valor' => false, 'pregunta_id' => 428],
            ['texto' => 'Capacidad.', 'valor' => false, 'pregunta_id' => 428],
            ['texto' => 'Espesor.', 'valor' => false, 'pregunta_id' => 428],

            ['texto' => 'Detección, reconocimiento, identificación, localización, comunicación y adquisición.', 'valor' => false, 'pregunta_id' => 429],
            ['texto' => 'Reconocimiento, detección, identificación, localización, adquisición y comunicación.', 'valor' => false, 'pregunta_id' => 429],
            ['texto' => 'Detección, reconocimiento, identificación, localización, adquisición y comunicación.', 'valor' => false, 'pregunta_id' => 429],

            ['texto' => 'Completo.', 'valor' => false, 'pregunta_id' => 430],
            ['texto' => 'Intenso.', 'valor' => false, 'pregunta_id' => 430],
            ['texto' => 'Continuo.', 'valor' => false, 'pregunta_id' => 430],

            ['texto' => 'Pasivos.', 'valor' => false, 'pregunta_id' => 431],
            ['texto' => 'Activos.', 'valor' => false, 'pregunta_id' => 431],
            ['texto' => 'mixtos.', 'valor' => false, 'pregunta_id' => 431],

            ['texto' => 'Alerta.', 'valor' => false, 'pregunta_id' => 432],
            ['texto' => 'Alarma.', 'valor' => false, 'pregunta_id' => 432],
            ['texto' => 'Indistintamente.', 'valor' => false, 'pregunta_id' => 432],

            ['texto' => 'Disminuye la eficacia de las medidas de simulación.', 'valor' => false, 'pregunta_id' => 433],
            ['texto' => 'Disminuye las posibilidades de observación.', 'valor' => false, 'pregunta_id' => 433],
            ['texto' => 'Dificulta el ejercicio del mando.', 'valor' => false, 'pregunta_id' => 433],

            ['texto' => 'Angulo horizontal abarcado, no menor a 60º.', 'valor' => false, 'pregunta_id' => 434],
            ['texto' => 'Tener el número posibles de zonas desenfiladas.', 'valor' => false, 'pregunta_id' => 434],
            ['texto' => 'Posibilidad de hacer fuego a una distancia inferior a 300 metros.', 'valor' => false, 'pregunta_id' => 434],

            ['texto' => 'Mirar directamente al objetivo.', 'valor' => false, 'pregunta_id' => 435],
            ['texto' => 'Barrer con la vista el sector de observación.', 'valor' => false, 'pregunta_id' => 435],
            ['texto' => 'Cerrar un ojo ante la aparición de un foco luminoso.', 'valor' => false, 'pregunta_id' => 435],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 436],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 436],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 436],

            ['texto' => 'No inferior a 2 horas.', 'valor' => false, 'pregunta_id' => 437],
            ['texto' => 'No inferior a 1 hora.', 'valor' => false, 'pregunta_id' => 437],
            ['texto' => 'De 2 horas.', 'valor' => false, 'pregunta_id' => 437],

            ['texto' => 'Forma de C.', 'valor' => false, 'pregunta_id' => 438],
            ['texto' => 'Forma de D.', 'valor' => false, 'pregunta_id' => 438],
            ['texto' => 'No tiene forma.', 'valor' => false, 'pregunta_id' => 438],

            ['texto' => 'Ocultarse es eliminar o dificultar temporalmente la posibilidad de observación enemiga.', 'valor' => false, 'pregunta_id' => 439],
            ['texto' => 'Ocultarse es interponer una masa cubridora entre el enemigo y nosotros.', 'valor' => false, 'pregunta_id' => 439],
            ['texto' => 'Ocultarse es cubrirse de la vista del enemigo reduciendo silueta.', 'valor' => false, 'pregunta_id' => 439],

            ['texto' => 'Rápida.', 'valor' => false, 'pregunta_id' => 440],
            ['texto' => 'Completa.', 'valor' => false, 'pregunta_id' => 440],
            ['texto' => 'Sencilla.', 'valor' => false, 'pregunta_id' => 440],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 441],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 441],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 441],
            ['texto' => 'Sí, siempre que se mezcle con lejía.', 'valor' => false, 'pregunta_id' => 441],

            ['texto' => 'Después de una hora.', 'valor' => false, 'pregunta_id' => 442],
            ['texto' => 'Después de dos horas.', 'valor' => false, 'pregunta_id' => 442],
            ['texto' => 'Después de ocho horas.', 'valor' => false, 'pregunta_id' => 442],
            ['texto' => 'Nunca.', 'valor' => false, 'pregunta_id' => 442],

            ['texto' => 'Quitárselos guantes y después la capucha.', 'valor' => false, 'pregunta_id' => 443],
            ['texto' => 'Quitarse la capucha y después lo guantes', 'valor' => false, 'pregunta_id' => 443],
            ['texto' => 'No existe tal orden riguroso para quitarse el uniforme.', 'valor' => false, 'pregunta_id' => 443],
            ['texto' => 'Quitársela mascara lo primero para poder respirar mejor.', 'valor' => false, 'pregunta_id' => 443],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 444],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 444],
            ['texto' => 'Ninguna.', 'valor' => false, 'pregunta_id' => 444],
            ['texto' => 'Solamente ira colocada la máscara.', 'valor' => false, 'pregunta_id' => 444],

            ['texto' => 'Atropina.', 'valor' => false, 'pregunta_id' => 445],
            ['texto' => 'Anatropina.', 'valor' => false, 'pregunta_id' => 445],
            ['texto' => 'Anisotropía.', 'valor' => false, 'pregunta_id' => 445],
            ['texto' => 'Antigripales militares.', 'valor' => false, 'pregunta_id' => 445],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 446],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 446],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 446],
            ['texto' => 'Siempre.', 'valor' => false, 'pregunta_id' => 446],

            ['texto' => '1º colocamos la capucha por encima de la máscara antes que los guantes de algodón.', 'valor' => false, 'pregunta_id' => 447],
            ['texto' => '1º los guantes de algodón y después la chaquetilla por encima de la máscara.', 'valor' => false, 'pregunta_id' => 447],
            ['texto' => 'No existe tal orden riguroso de colocación.', 'valor' => false, 'pregunta_id' => 447],
            ['texto' => '1º nos colocamos los cubre-botas para no contaminar las botas militares.', 'valor' => false, 'pregunta_id' => 447],

            ['texto' => 'Neurotóxico tipo V.', 'valor' => false, 'pregunta_id' => 448],
            ['texto' => 'Neurotóxico tipo G.', 'valor' => false, 'pregunta_id' => 448],
            ['texto' => 'Neurotóxico tipo H.', 'valor' => false, 'pregunta_id' => 448],
            ['texto' => 'Neurotóxico tipo A.', 'valor' => false, 'pregunta_id' => 448],

            ['texto' => 'Luminosidad.', 'valor' => false, 'pregunta_id' => 449],
            ['texto' => 'Onda térmica.', 'valor' => false, 'pregunta_id' => 449],
            ['texto' => 'Onda de choque.', 'valor' => false, 'pregunta_id' => 449],
            ['texto' => 'Mucho humo.', 'valor' => false, 'pregunta_id' => 449],

            ['texto' => 'Ataque aéreo inminente.', 'valor' => false, 'pregunta_id' => 450],
            ['texto' => 'Presencia o llegada inminente de agentes químicos.', 'valor' => false, 'pregunta_id' => 450],
            ['texto' => 'El peligro a pasado.', 'valor' => false, 'pregunta_id' => 450],
            ['texto' => 'Ataque de artillera inminente.', 'valor' => false, 'pregunta_id' => 450],

            ['texto' => 'El librillo.', 'valor' => false, 'pregunta_id' => 451],
            ['texto' => 'El poncho.', 'valor' => false, 'pregunta_id' => 451],
            ['texto' => 'El dosímetro.', 'valor' => false, 'pregunta_id' => 451],
            ['texto' => 'las manoplas de limpieza.', 'valor' => false, 'pregunta_id' => 451],

            ['texto' => 'Marcha.', 'valor' => false, 'pregunta_id' => 452],
            ['texto' => 'Alarma.', 'valor' => false, 'pregunta_id' => 452],
            ['texto' => 'Alerta.', 'valor' => false, 'pregunta_id' => 452],
            ['texto' => 'De descanso.', 'valor' => false, 'pregunta_id' => 452],

            ['texto' => 'Respiratoria.', 'valor' => false, 'pregunta_id' => 453],
            ['texto' => 'Digestiva.', 'valor' => false, 'pregunta_id' => 453],
            ['texto' => 'Cutánea.', 'valor' => false, 'pregunta_id' => 453],
            ['texto' => 'La osea.', 'valor' => false, 'pregunta_id' => 453],

            ['texto' => 'Onda térmica.', 'valor' => false, 'pregunta_id' => 454],
            ['texto' => 'Onda de choque.', 'valor' => false, 'pregunta_id' => 454],
            ['texto' => 'Onda sísmica.', 'valor' => false, 'pregunta_id' => 454],
            ['texto' => 'Luminosidad.', 'valor' => false, 'pregunta_id' => 454],

            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 455],
            ['texto' => '2.', 'valor' => false, 'pregunta_id' => 455],
            ['texto' => '1.', 'valor' => false, 'pregunta_id' => 455],

            ['texto' => '1.', 'valor' => false, 'pregunta_id' => 456],
            ['texto' => '2.', 'valor' => false, 'pregunta_id' => 456],
            ['texto' => '3.', 'valor' => false, 'pregunta_id' => 456],

            ['texto' => 'Después de 2 horas.', 'valor' => false, 'pregunta_id' => 457],
            ['texto' => 'Después de 1 hora.', 'valor' => false, 'pregunta_id' => 457],
            ['texto' => 'Después de 8 horas.', 'valor' => false, 'pregunta_id' => 457],

            ['texto' => 'Protección mutua.', 'valor' => false, 'pregunta_id' => 458],
            ['texto' => 'Itinerarios estrechos.', 'valor' => false, 'pregunta_id' => 458],
            ['texto' => 'Escasa visibilidad.', 'valor' => false, 'pregunta_id' => 458],
            ['texto' => 'Estar concentrados.', 'valor' => false, 'pregunta_id' => 458],

            ['texto' => 'Orden de marcha.', 'valor' => false, 'pregunta_id' => 459],
            ['texto' => 'Orden de incursión.', 'valor' => false, 'pregunta_id' => 459],
            ['texto' => 'Orden de combate.', 'valor' => false, 'pregunta_id' => 459],
            ['texto' => 'Orden de aproximación.', 'valor' => false, 'pregunta_id' => 459],

            ['texto' => 'Se adopta cuando se considera probable el contacto con el enemigo.', 'valor' => false, 'pregunta_id' => 460],
            ['texto' => 'Prima la rapidez sobre la seguridad.', 'valor' => false, 'pregunta_id' => 460],
            ['texto' => 'La formación idónea es la guerrilla.', 'valor' => false, 'pregunta_id' => 460],
            ['texto' => 'Ese tipo de orden, es para los desfiles.', 'valor' => false, 'pregunta_id' => 460],

            ['texto' => 'Orden de aproximación.', 'valor' => false, 'pregunta_id' => 461],
            ['texto' => 'Orden de infiltración.', 'valor' => false, 'pregunta_id' => 461],
            ['texto' => 'Orden de marcha.', 'valor' => false, 'pregunta_id' => 461],
            ['texto' => 'Orden de combate.', 'valor' => false, 'pregunta_id' => 461],

            ['texto' => 'Un punto.', 'valor' => false, 'pregunta_id' => 462],
            ['texto' => 'Una zona.', 'valor' => false, 'pregunta_id' => 462],
            ['texto' => 'La escuadra/equipo no tienen entidad para realizar este tipo de misiones.', 'valor' => false, 'pregunta_id' => 462],
            ['texto' => 'A y B, son correctas.', 'valor' => false, 'pregunta_id' => 462],

            ['texto' => 'Se puede mover por todo tipo de terreno combinando el fuego y el movimiento.', 'valor' => false, 'pregunta_id' => 463],
            ['texto' => 'Puede cambiar instantáneamente de actitud (ofensiva o defensiva).', 'valor' => false, 'pregunta_id' => 463],
            ['texto' => 'Es una unidad hetereogenea.', 'valor' => false, 'pregunta_id' => 463],
            ['texto' => 'Es la unidad de menor tamaño.', 'valor' => false, 'pregunta_id' => 463],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 464],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 464],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 464],

            ['texto' => 'La zona de aproximación ZAP.', 'valor' => false, 'pregunta_id' => 465],
            ['texto' => 'Probable línea de asalto PLA.', 'valor' => false, 'pregunta_id' => 465],
            ['texto' => 'La zona de reunión ZRN.', 'valor' => false, 'pregunta_id' => 465],
            ['texto' => 'Zona de descanso.', 'valor' => false, 'pregunta_id' => 465],

            ['texto' => 'Se mueve por todo tipo de terrenocombinando el fuego y el movimiento.', 'valor' => false, 'pregunta_id' => 466],
            ['texto' => 'Es una unidad hetereogenea, em la que todos sus componenetes', 'valor' => false, 'pregunta_id' => 466],
            ['texto' => 'actuan de forma similar.', 'valor' => false, 'pregunta_id' => 466],
            ['texto' => 'Esta compuesta por un cabo y cuarto soldados.', 'valor' => false, 'pregunta_id' => 466],

            ['texto' => 'Es responsable de la moral, la salubridad, disciplina de sus subordinados.', 'valor' => false, 'pregunta_id' => 467],
            ['texto' => 'Velara por un constante enlace con el jefe de pelotón.', 'valor' => false, 'pregunta_id' => 467],
            ['texto' => 'En combate mantendrá una ferrea disciplinade fuego, sin importar el consumo de municion dentro de las distancias de empleo.', 'valor' => false, 'pregunta_id' => 467],

            ['texto' => 'El binomio.', 'valor' => false, 'pregunta_id' => 468],
            ['texto' => 'La escuadra.', 'valor' => false, 'pregunta_id' => 468],
            ['texto' => 'El pelotón.', 'valor' => false, 'pregunta_id' => 468],
            ['texto' => 'La sección.', 'valor' => false, 'pregunta_id' => 468],

            ['texto' => 'Avanzar por saltos.', 'valor' => false, 'pregunta_id' => 469],
            ['texto' => 'Descrestar.', 'valor' => false, 'pregunta_id' => 469],
            ['texto' => 'Infiltración.', 'valor' => false, 'pregunta_id' => 469],
            ['texto' => 'Ataque de frente.', 'valor' => false, 'pregunta_id' => 469],

            ['texto' => 'Protección mutua.', 'valor' => false, 'pregunta_id' => 470],
            ['texto' => 'Itinerarios estrechos.', 'valor' => false, 'pregunta_id' => 470],
            ['texto' => 'Escasa visibilidad.', 'valor' => false, 'pregunta_id' => 470],
            ['texto' => 'Infiltración.', 'valor' => false, 'pregunta_id' => 470],

            ['texto' => 'Grupo de Seguridad.', 'valor' => false, 'pregunta_id' => 471],
            ['texto' => 'Grupo de reconocimiento.', 'valor' => false, 'pregunta_id' => 471],
            ['texto' => 'El grupo de mando y enlace actua por si mismo.', 'valor' => false, 'pregunta_id' => 471],
            ['texto' => 'Grupo de asalto.', 'valor' => false, 'pregunta_id' => 471],

            ['texto' => 'Declinación.', 'valor' => false, 'pregunta_id' => 472],
            ['texto' => 'Orientación.', 'valor' => false, 'pregunta_id' => 472],
            ['texto' => 'Convergencia.', 'valor' => false, 'pregunta_id' => 472],
            ['texto' => 'Rumbo.', 'valor' => false, 'pregunta_id' => 472],

            ['texto' => 'Es el Angulo que forma el Norte magnético con la dirección opuesta BA.', 'valor' => false, 'pregunta_id' => 473],
            ['texto' => 'Es el Angulo que forma el Norte de la cuadricula con la dirección opuesta a AB.', 'valor' => false, 'pregunta_id' => 473],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 473],
            ['texto' => 'Dicho rumbo no es posible.', 'valor' => false, 'pregunta_id' => 473],

            ['texto' => 'Es una gran elevación del terreno respecto al que le rodea.', 'valor' => false, 'pregunta_id' => 474],
            ['texto' => 'Tiene forma aproximadamente cónica.', 'valor' => false, 'pregunta_id' => 474],
            ['texto' => 'Se reconoce por que las curvas de nivel envuelven a las de menos cota.', 'valor' => false, 'pregunta_id' => 474],

            ['texto' => 'Latitud y longitud.', 'valor' => false, 'pregunta_id' => 475],
            ['texto' => 'Dirección y distancia.', 'valor' => false, 'pregunta_id' => 475],
            ['texto' => 'X e Y.', 'valor' => false, 'pregunta_id' => 475],
            ['texto' => 'Se calculan con el mapa o el plano.', 'valor' => false, 'pregunta_id' => 475],

            ['texto' => 'Hacer coincidir el Norte de la Cuadricula con el Norte Geográfico.', 'valor' => false, 'pregunta_id' => 476],
            ['texto' => 'El Norte Magnético con el Norte Geográfico.', 'valor' => false, 'pregunta_id' => 476],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 476],
            ['texto' => 'Hacer coincidir el Norte de la Cuadricula con el norte magnético.', 'valor' => false, 'pregunta_id' => 476],

            ['texto' => 'Es la ciencia que estudia, presenta y escribe los accidentes de una parte de la superficie terrestre.', 'valor' => false, 'pregunta_id' => 477],
            ['texto' => 'Resuelve el problema de representar los accidentes que nos encontramos en el terreno que son bidimensionales en unos objetos que no.', 'valor' => false, 'pregunta_id' => 477],
            ['texto' => 'Asigna símbolos que representan los diferentes elementos naturales, pero resulta un problema el no poder representar elementos artificiales.', 'valor' => false, 'pregunta_id' => 477],
            ['texto' => 'Es la ciencia que estudia, representa y describe los accidentes de una parte de la superficie terrestre.', 'valor' => false, 'pregunta_id' => 477],

            ['texto' => 'Representa una expresión de terreno cuyos accidentes artificiales no llevan proporción ni escala fija para que sean visibles.', 'valor' => false, 'pregunta_id' => 478],
            ['texto' => 'El plano de comparación es el plano horizontal sobre el que las distintas líneas del terreno están determinadas por sus proyecciones.', 'valor' => false, 'pregunta_id' => 478],
            ['texto' => 'Los accidentes artificiales se van a representar usando los signos que mejor represente el elemento, para que no necesite ninguna explicación en el mismo Mapa.', 'valor' => false, 'pregunta_id' => 478],
            ['texto' => 'El plano de comparación es el plano vertical sobre el que las distintas líneas del terreno están determinadas por sus proyecciones.', 'valor' => false, 'pregunta_id' => 478],

            ['texto' => 'Son las diferentes líneas que resultan de cortar la zona a representar con planos imaginarios, separados entre si, por una distancia vertical dada.', 'valor' => false, 'pregunta_id' => 479],
            ['texto' => 'Son las diferentes líneas que resultan de cortar la zona a representar con planos primarios y secundarios para determinar una distancia dada.', 'valor' => false, 'pregunta_id' => 479],
            ['texto' => 'Son las diferentes líneas que resultan de representar un elemento elevado a través de unas distancias predeterminadas previas.', 'valor' => false, 'pregunta_id' => 479],
            ['texto' => 'Son las diferentes líneas que resultan de cortar la zona a representar con planos imaginarios, separados entre si, por una distancia horizontal dada.', 'valor' => false, 'pregunta_id' => 479],

            ['texto' => 'Entrantes, son ondulaciones del terreno que representan su convexidad al observador.', 'valor' => false, 'pregunta_id' => 480],
            ['texto' => 'Salientes, son ondulaciones del terreno que representan su concavidad al observador.', 'valor' => false, 'pregunta_id' => 480],
            ['texto' => 'Divisorias, son ondulaciones del terreno que representan su convexidad al observador.', 'valor' => false, 'pregunta_id' => 480],
            ['texto' => 'Divisorias, son ondulaciones del terreno que representan su concavidad al observador.', 'valor' => false, 'pregunta_id' => 480],

            ['texto' => 'Declinación.', 'valor' => false, 'pregunta_id' => 481],
            ['texto' => 'Orientación.', 'valor' => false, 'pregunta_id' => 481],
            ['texto' => 'Convergencia.', 'valor' => false, 'pregunta_id' => 481],
            ['texto' => 'Rumbo.', 'valor' => false, 'pregunta_id' => 481],

            ['texto' => 'Abscisas.', 'valor' => false, 'pregunta_id' => 482],
            ['texto' => 'Ordenadas.', 'valor' => false, 'pregunta_id' => 482],
            ['texto' => 'Vectoriales.', 'valor' => false, 'pregunta_id' => 482],
            ['texto' => 'Coordenadas.', 'valor' => false, 'pregunta_id' => 482],

            ['texto' => 'Es el ángulo que forma el Norte Cuadricula con una dirección.', 'valor' => false, 'pregunta_id' => 483],
            ['texto' => 'Es el ángulo que forma el Norte magnético con el Norte Cuadricula.', 'valor' => false, 'pregunta_id' => 483],
            ['texto' => 'Es el ángulo que forma el Norte magnético con un vértice del plano.', 'valor' => false, 'pregunta_id' => 483],
            ['texto' => 'Es el ángulo que forma el Norte magnético con una dirección.', 'valor' => false, 'pregunta_id' => 483],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 484],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 484],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 484],
            ['texto' => 'No existe dicha inclinación.', 'valor' => false, 'pregunta_id' => 484],

            ['texto' => 'Línea vertical.', 'valor' => false, 'pregunta_id' => 485],
            ['texto' => 'Línea horizontal.', 'valor' => false, 'pregunta_id' => 485],
            ['texto' => 'Indistintamente.', 'valor' => false, 'pregunta_id' => 485],
            ['texto' => 'Siempre la Z.', 'valor' => false, 'pregunta_id' => 485],

            ['texto' => 'X.', 'valor' => false, 'pregunta_id' => 486],
            ['texto' => 'Y.', 'valor' => false, 'pregunta_id' => 486],
            ['texto' => 'Z.', 'valor' => false, 'pregunta_id' => 486],
            ['texto' => 'XL.', 'valor' => false, 'pregunta_id' => 486],

            ['texto' => 'La referencia más clara y próxima al punto.', 'valor' => false, 'pregunta_id' => 487],
            ['texto' => 'Averiguar primero si el punto está por encima o por debajo del 6% de inclinación.', 'valor' => false, 'pregunta_id' => 487],
            ['texto' => 'La curva de nivel más lejana al punto.', 'valor' => false, 'pregunta_id' => 487],
            ['texto' => 'La curva de nivel más próxima al punto.', 'valor' => false, 'pregunta_id' => 487],

            ['texto' => 'Hacer coincidir el Norte Cuadricula con el Norte Geográfico.', 'valor' => false, 'pregunta_id' => 488],
            ['texto' => 'Hacer coincidir el Norte Cuadricula con el Norte magnético.', 'valor' => false, 'pregunta_id' => 488],
            ['texto' => 'El Norte magnético con el Norte geográfico.', 'valor' => false, 'pregunta_id' => 488],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 488],

            ['texto' => 'La Osa Mayor y la Osa Menor.', 'valor' => false, 'pregunta_id' => 489],
            ['texto' => 'La Osa Mayor y Casiopea.', 'valor' => false, 'pregunta_id' => 489],
            ['texto' => 'La Osa Menor y Casiopea.', 'valor' => false, 'pregunta_id' => 489],
            ['texto' => 'La Osa Mayor y centurión.', 'valor' => false, 'pregunta_id' => 489],

            ['texto' => 'Sexagesimal.', 'valor' => false, 'pregunta_id' => 490],
            ['texto' => 'Diezcesimal.', 'valor' => false, 'pregunta_id' => 490],
            ['texto' => 'Centesimal.', 'valor' => false, 'pregunta_id' => 490],

            ['texto' => 'Latitud y longitud.', 'valor' => false, 'pregunta_id' => 491],
            ['texto' => 'Dirección y distancia.', 'valor' => false, 'pregunta_id' => 491],
            ['texto' => 'X e Y.', 'valor' => false, 'pregunta_id' => 491],
            ['texto' => 'Grados centesimales.', 'valor' => false, 'pregunta_id' => 491],

            ['texto' => 'Sexagesimal.', 'valor' => false, 'pregunta_id' => 492],
            ['texto' => 'Centesimal.', 'valor' => false, 'pregunta_id' => 492],
            ['texto' => 'Milesimal.', 'valor' => false, 'pregunta_id' => 492],
            ['texto' => 'Sexogesimal.', 'valor' => false, 'pregunta_id' => 492],

            ['texto' => 'Verdadero.', 'valor' => false, 'pregunta_id' => 493],
            ['texto' => 'Falso.', 'valor' => false, 'pregunta_id' => 493],
            ['texto' => 'Ninguna de las anteriores.', 'valor' => false, 'pregunta_id' => 493],

            ['texto' => 'Latitud y longitud.', 'valor' => false, 'pregunta_id' => 494],
            ['texto' => 'Dirección y distancia.', 'valor' => false, 'pregunta_id' => 494],
            ['texto' => 'X e Y.', 'valor' => false, 'pregunta_id' => 494],
            ['texto' => 'Dirección y rumbo.', 'valor' => false, 'pregunta_id' => 494],
        ]);
    }
}
