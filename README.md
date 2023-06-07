# Ascenso a Cabo

## Proyecto final de Desarrollo de Aplicaciones Web, de los alumnos Daniel Fernandez Valcarce y Marc Sancho Santandreu

### Puesta en marcha del proyecto

Para poner el proyecto en marcha, se deben ejecutar varios comandos en la terminal, en el siguiente orden:

1. `php artisan migrate:fresh` para crear las tablas de la base de datos
2. `php artisan db:seed` para rellenar las tablas con datos de prueba
3. `php artisan app:actualizar-estadisticas` para actualizar las estadísticas de los usuarios

### Despliegue del proyecto

Actualmente el proyecto se encuentra desplegado en red, con el dominio [ascensoacabo.com](https://ascensoacabo.com). Para acceder a él, se debe crear una cuenta de usuario, o bien utilizar una de las siguientes:

- **E-mail**: `randion@cifpfbmoll.eu`
- **Contraseña**: `Secretos2023`

Este usuario tiene permisos de administrador.

# Proyecto de Preparación de Opositores al Ascenso a Cabo

## Resumen del Proyecto

El proyecto se centra en proporcionar una plataforma web para que los opositores al ascenso puedan prepararse a través de exámenes de práctica. Los usuarios pueden suscribirse mensualmente y acceder a una amplia variedad de tests.

## Características Principales

- **Landing Page**: Página inicial que presenta información sobre los servicios ofrecidos, precios y detalles relevantes.
- **Registro y Login**: Formularios de registro y inicio de sesión para que los usuarios puedan acceder a sus cuentas personales.
- **Dashboard**: Página de inicio que muestra estadísticas del usuario, como la nota media, número de exámenes realizados y las notas medias de otros suscriptores.
- **Selección de Exámenes**: Los usuarios pueden elegir entre exámenes específicos por tema, un examen general de todos los temas o un examen con las preguntas más frecuentemente falladas.
- **Formato de Exámenes**: Cada examen consta de 50 preguntas con 4 posibles respuestas, donde solo una es correcta. Se penaliza con -0.25 puntos por cada respuesta incorrecta y se suma 1 punto por cada respuesta correcta, aunque esto puede variar según la convocatoria.
- **Página de Usuarios**: Lista de todos los usuarios ordenados por su nota de mayor a menor. Al hacer clic en el nombre de un usuario, se accede a una página con más información, como las provincias a las que se presenta y los exámenes realizados, incluyendo la nota media.
- **Opciones de Usuario**: Página que permite a los usuarios cambiar su nombre, contraseña, provincias de oposición y restablecer sus estadísticas de exámenes y nota media.


## Introducción

### 1.1 Descripción general del proyecto

Este proyecto consiste en el desarrollo de una aplicación web utilizando las tecnologías Laravel, MySQL, Blade y Bootstrap. La aplicación tiene como objetivo principal proporcionar una plataforma en línea para ayudar a los opositores al ascenso en su preparación mediante exámenes de práctica. Los usuarios podrán acceder a una amplia variedad de pruebas y suscribirse mensualmente para obtener acceso completo a todas las funcionalidades del sistema.

### 1.2 Objetivos del proyecto

Los objetivos específicos del proyecto son los siguientes:

- Crear una plataforma web intuitiva y fácil de usar para los opositores al ascenso.
- Proporcionar exámenes de práctica actualizados y relevantes para la preparación de los usuarios.
- Permitir a los usuarios realizar un seguimiento de su progreso y obtener estadísticas detalladas sobre su desempeño.
- Ofrecer una experiencia de usuario atractiva y personalizable mediante una interfaz de usuario moderna y responsiva.

### 1.3 Alcance del proyecto

El alcance del proyecto incluye las siguientes funcionalidades y características principales:

- Página de inicio (Landing Page): Presentará información sobre los servicios ofrecidos, precios y detalles relevantes para los usuarios.
- Registro y inicio de sesión (Registro y Login): Se proporcionarán formularios de registro y acceso para que los usuarios puedan crear y acceder a sus cuentas personales.
- Panel de control (Dashboard): Se mostrarán estadísticas del usuario, como la nota media, número de exámenes realizados y las notas medias de otros suscriptores.
- Selección de exámenes: Los usuarios podrán elegir entre diferentes tipos de exámenes, como exámenes específicos por tema, un examen general de todos los temas o un examen con las preguntas más frecuentemente falladas.
- Formato de exámenes: Cada examen estará compuesto por 50 preguntas con 4 posibles respuestas, donde solo una será la correcta. El sistema aplicará una penalización de -0.25 puntos por cada respuesta incorrecta y sumará 1 punto por cada respuesta correcta, aunque esta configuración podrá variar según la convocatoria.
- Página de usuarios: Se mostrará una lista de todos los usuarios ordenados por su nota de mayor a menor. Al hacer clic en el nombre de un usuario, se accederá a una página con información detallada, como las provincias a las que se presenta y los exámenes realizados, incluyendo la nota media.
- Opciones de usuario: Se permitirá a los usuarios cambiar su nombre, contraseña, provincias de oposición y restablecer sus estadísticas de exámenes y nota media.

### 1.4 Metodología de desarrollo

Durante el desarrollo del proyecto se utilizará una metodología ágil, lo que permitirá un enfoque flexible y adaptativo a medida que se avance en las diferentes etapas del ciclo de vida del desarrollo de software. Se emplearán prácticas como la planificación iterativa, la entrega incremental y la retroalimentación continua para asegurar la calidad y el cumplimiento de los objetivos del proyecto.

### 1.5 Estructura de la documentación

La documentación del proyecto estará estructurada de la siguiente manera:

- Introducción: Esta sección proporcionará una visión general del proyecto, incluyendo una

 descripción general, los objetivos, el alcance, la metodología de desarrollo y la estructura de la documentación.
- Marco Teórico: Aquí se detallarán las tecnologías utilizadas en el proyecto, incluyendo Laravel como framework de desarrollo web, MySQL como sistema de gestión de bases de datos y Blade como motor de plantillas en Laravel.
- Análisis de Requisitos: En esta sección se identificarán y describirán los requisitos funcionales y no funcionales de la aplicación, así como los casos de uso principales que guiarán el desarrollo del sistema.
- Diseño de la Base de Datos: Se presentarán los modelos conceptual, lógico y físico de la base de datos, incluyendo las entidades, relaciones, tablas, atributos y restricciones necesarias para el correcto funcionamiento del sistema.
- Diseño de la Arquitectura del Software: Aquí se describirá la arquitectura general del sistema, incluyendo los componentes, capas y patrones arquitectónicos utilizados para el desarrollo de la aplicación web.
- Implementación: En esta sección se abordarán aspectos relacionados con la configuración del entorno de desarrollo, el desarrollo de funcionalidades específicas y las pruebas realizadas durante el proceso.
- Despliegue y Evaluación: Se explicarán los pasos necesarios para desplegar la aplicación web en un entorno de producción, así como una evaluación de los resultados obtenidos en comparación con los objetivos iniciales del proyecto.
- Conclusiones y Trabajo Futuro: Se presentarán las conclusiones obtenidas durante el desarrollo del proyecto, así como las limitaciones identificadas y las recomendaciones para mejoras futuras. También se plantearán posibles extensiones o mejoras adicionales para la aplicación web.
- Referencias: Se incluirá una lista de las fuentes consultadas durante el desarrollo del proyecto, como libros, artículos, tutoriales y documentación oficial.

Este es un resumen general del proyecto, y a partir de esta estructura se podrán desarrollar cada sección con mayor detalle.

## Marco Teórico

### 2.1 Laravel
Laravel es un framework de desarrollo web de código abierto ampliamente utilizado para crear aplicaciones web. Proporciona una estructura robusta y flexible para desarrollar aplicaciones web de alta calidad. Laravel sigue el patrón de arquitectura Modelo-Vista-Controlador (MVC), lo que facilita la separación de la lógica de negocio y la presentación. Además, Laravel ofrece una amplia gama de características, como enrutamiento, migraciones de bases de datos, autenticación de usuarios y generación de vistas, lo que acelera el desarrollo y mejora la eficiencia del proyecto.

### 2.2 MySQL
MySQL es un sistema de gestión de bases de datos relacional ampliamente utilizado en el desarrollo de aplicaciones web. Ofrece una amplia gama de funciones y capacidades para el almacenamiento, gestión y manipulación de datos. MySQL es conocido por su rendimiento, escalabilidad y confiabilidad, lo que lo convierte en una opción popular para proyectos web de diferentes tamaños. En este proyecto, MySQL se utilizará para almacenar y gestionar los datos relacionados con los usuarios, los exámenes, las respuestas y otras entidades relevantes.

### 2.3 Blade
Blade es un motor de plantillas integrado en Laravel que permite generar vistas de manera eficiente y sencilla. Blade ofrece una sintaxis intuitiva y legible que simplifica la creación de la interfaz de usuario. Proporciona características poderosas como herencia de plantillas, secciones, inclusiones y directivas condicionales, lo que permite una mayor modularidad y reutilización del código HTML. Con Blade, los desarrolladores pueden crear vistas dinámicas y personalizadas que se ajusten a las necesidades del proyecto.

En resumen, en el marco teórico se ha presentado una descripción de Laravel como framework de desarrollo web, destacando su arquitectura y características principales. Además, se ha introducido MySQL como sistema de gestión de bases de datos esencial en el desarrollo de la aplicación web. Por último, se ha mencionado Blade como motor de plantillas en Laravel y su función en la generación de vistas. Estos elementos son fundamentales para comprender la tecnología subyacente en la implementación del proyecto.

### 3. Análisis de Requisitos

En esta sección se detallarán los requisitos funcionales y no funcionales del proyecto, así como los casos de uso identificados.

#### 3.1 Requisitos funcionales

A continuación se enumeran los requisitos funcionales de la aplicación web:

##### Registro de usuarios:

Los usuarios podrán registrarse en la plataforma proporcionando su nombre, dirección de correo electrónico y contraseña.
Se verificará la validez de la dirección de correo electrónico y se evitará el registro de direcciones duplicadas.
Se enviará un correo electrónico de confirmación para activar la cuenta de usuario.

##### Inicio de sesión:

Los usuarios registrados podrán iniciar sesión en la plataforma utilizando su dirección de correo electrónico y contraseña.

##### Gestión de cuenta de usuario:

Los usuarios podrán modificar su nombre, dirección de correo electrónico y contraseña en su perfil de usuario.
Los usuarios podrán seleccionar las provincias de oposición en las que están interesados.
Los usuarios podrán restablecer sus estadísticas de exámenes y nota media.

##### Landing Page:

La página inicial proporcionará información sobre los servicios ofrecidos, precios y detalles relevantes de la plataforma.

##### Dashboard:

El panel de control mostrará estadísticas del usuario, como la nota media, número de exámenes realizados y las notas medias de otros suscriptores.

##### Selección de exámenes:

Los usuarios podrán elegir entre diferentes tipos de exámenes, incluyendo exámenes específicos por tema, un examen general de todos los temas y un examen con las preguntas más frecuentemente falladas.
Cada examen constará de 50 preguntas con 4 posibles respuestas, donde solo una es correcta.
Se penalizará con -0.25 puntos por cada respuesta incorrecta y se sumará 1 punto por cada respuesta correcta, aunque esto puede variar según la convocatoria.

##### Página de usuarios:

Se mostrará una lista de todos los usuarios ordenados por su nota de mayor a menor.
Al hacer clic en el nombre de un usuario, se accederá a una página con más información, como las provincias a las que se presenta y los exámenes realizados, incluyendo la nota media.

#### 3.2 Requisitos no funcionales

A continuación se describen los requisitos no funcionales de la aplicación web:

##### Rendimiento:

La aplicación debe ser capaz de manejar un alto volumen de usuarios concurrentes sin experimentar retrasos significativos en la respuesta.
El tiempo de carga de las páginas y la generación de exámenes debe ser rápido y eficiente.

##### Seguridad:

Los datos de los usuarios, como las contraseñas y la información personal, deben almacenarse de forma segura utilizando técnicas de encriptación adecuadas.
Se implementarán medidas de protección contra ataques de seguridad, como inyecciones SQL y ataques de cross-site scripting (XSS).

##### Usabilidad:

La interfaz de usuario debe ser intuitiva y fácil de usar, con una navegación clara y accesible.
Los formularios y elementos interactivos deben ser claros y estar correctamente validados para evitar errores por parte de los usuarios.

#### 3.3 Casos de Uso

A continuación se presentan los casos de uso principales de la aplicación web:

##### Registro de usuario:

El usuario se registra en la plataforma proporcionando su nombre, dirección de correo electrónico y contraseña.

##### Inicio de sesión:

El usuario inicia sesión en la plataforma utilizando su dirección de

 correo electrónico y contraseña.

##### Modificación de perfil de usuario:

El usuario modifica su nombre, dirección de correo electrónico o contraseña en su perfil de usuario.

##### Selección de provincias de oposición:

El usuario selecciona las provincias en las que está interesado para recibir exámenes relacionados.

##### Restablecimiento de estadísticas de exámenes y nota media:

El usuario restablece sus estadísticas de exámenes realizados y nota media a cero.

##### Elección de tipo de examen:

El usuario elige el tipo de examen que desea realizar: por tema, general o con preguntas más frecuentemente falladas.

##### Realización de examen:

El usuario realiza un examen, respondiendo a las preguntas presentadas y recibiendo una puntuación al finalizar.

##### Visualización de información de usuario:

El usuario consulta la información detallada de otro usuario, incluyendo las provincias de oposición y los exámenes realizados.

Estos son solo algunos de los requisitos y casos de uso principales que se han identificado para la aplicación web. A medida que el desarrollo avance, es posible que se identifiquen requisitos y casos de uso adicionales que deberán ser considerados.

## Diseño de la Base de Datos
   [Enlace al diagrama de Lucidchart](https://lucid.app/lucidchart/bc24bd8d-3ff0-4cae-97c7-562e7dd87987/edit?viewport_loc=740%2C-478%2C2956%2C1662%2C0_0&invitationId=inv_8a03058f-cfcf-44d3-9f72-57956a151867)
   

## 5. Diseño de la Arquitectura del Software

En esta sección, se describirá el diseño de la arquitectura del software de la aplicación web desarrollada con Laravel, MySQL y Blade.

### 5.1 Arquitectura del Sistema

La arquitectura del sistema sigue un enfoque de arquitectura MVC (Modelo-Vista-Controlador) proporcionado por el framework Laravel. Esta arquitectura permite una separación clara de las responsabilidades y facilita el mantenimiento y escalabilidad del sistema.

El sistema se divide en las siguientes capas:

- Capa de Modelo: Esta capa es responsable de interactuar con la base de datos MySQL y contiene los modelos que representan las entidades del sistema, como usuarios, exámenes y preguntas. Los modelos se encargan de realizar operaciones de consulta, inserción, actualización y eliminación en la base de datos.

- Capa de Vista: Esta capa utiliza el motor de plantillas Blade de Laravel para generar las vistas HTML que se muestran al usuario. Cada página web tiene su propia plantilla Blade, que define la estructura y los componentes visuales. Las vistas se combinan con los datos proporcionados por los controladores para generar la salida final.

- Capa de Controlador: Esta capa actúa como intermediario entre las vistas y los modelos. Los controladores reciben las solicitudes del usuario, procesan la lógica de negocio correspondiente y devuelven los datos necesarios para generar las respuestas. También gestionan la autenticación, autorización y validación de los datos de entrada.

- Capa de Rutas: Las rutas en Laravel definen las URL del sistema y establecen la correspondencia entre las URL y los controladores que deben manejar las solicitudes. Las rutas pueden tener parámetros para capturar valores variables en la URL, lo que permite construir URLs dinámicas.

### 5.2 Diseño de la Interfaz de Usuario

El diseño de la interfaz de usuario se realiza utilizando el motor de plantillas Blade de Laravel y el framework de diseño Bootstrap. Se sigue un enfoque responsivo para garantizar que la aplicación se adapte correctamente a diferentes dispositivos y tamaños de pantalla.

La interfaz de usuario se compone de diferentes vistas que incluyen:

- Página de Inicio: Presenta información sobre los servicios ofrecidos, precios y detalles relevantes para captar el interés de los usuarios y animarlos a registrarse.

- Formularios de Registro y Login: Permiten a los usuarios crear una cuenta o iniciar sesión en el sistema. Estos formularios incluyen campos para ingresar el nombre de usuario, contraseña y otros detalles relevantes.

- Dashboard: Es la página de inicio personalizada para los usuarios una vez que han iniciado sesión. Muestra estadísticas relevantes, como la nota media, número de exámenes realizados y las notas medias de otros suscriptores.

- Selección de Exámenes: Permite a los usuarios elegir

 entre exámenes específicos por tema, un examen general de todos los temas o un examen con las preguntas más frecuentemente falladas. Esta vista muestra una lista de los exámenes disponibles y permite al usuario seleccionar uno para comenzar.

- Formato de Exámenes: Cada examen consta de 50 preguntas con 4 posibles respuestas, donde solo una es correcta. Se muestra una pregunta a la vez, y el usuario selecciona la respuesta deseada. Al finalizar el examen, se muestra la puntuación obtenida y se proporciona retroalimentación sobre las respuestas correctas e incorrectas.

- Página de Usuarios: Lista todos los usuarios registrados ordenados por su nota de mayor a menor. Al hacer clic en el nombre de un usuario, se accede a una página con más información detallada, como las provincias a las que se presenta y los exámenes realizados, incluyendo la nota media.

- Opciones de Usuario: Permite a los usuarios cambiar su nombre, contraseña, provincias de oposición y restablecer sus estadísticas de exámenes y nota media. Esta vista ofrece opciones de personalización y configuración de la cuenta del usuario.

### 5.3 Diseño de Componentes y Módulos

El diseño de los componentes y módulos clave de la aplicación sigue las convenciones y patrones proporcionados por Laravel.

- Controladores: Los controladores son responsables de recibir las solicitudes del usuario, interactuar con los modelos correspondientes y devolver las respuestas adecuadas. Se encargan de la lógica de negocio y gestionan la autenticación, autorización y validación de los datos de entrada.

- Modelos: Los modelos representan las entidades del sistema y se utilizan para interactuar con la base de datos. Cada modelo define sus atributos y relaciones con otros modelos. Los modelos realizan operaciones de consulta, inserción, actualización y eliminación en la base de datos.

- Vistas: Las vistas utilizan el motor de plantillas Blade para generar la interfaz de usuario. Cada vista tiene su propia plantilla Blade, que define la estructura HTML y los componentes visuales. Las vistas pueden recibir datos de los controladores y utilizar estructuras de control y bucles para generar contenido dinámico.

El diseño de la arquitectura del software garantiza una separación adecuada de responsabilidades, facilita el mantenimiento y extensibilidad del sistema, y mejora la reutilización de código en diferentes partes de la aplicación.

## Implementación

### 6.1 Desarrollo de Funcionalidades

La aplicación también cuenta con una función de corrección automática de exámenes, lo que permite a los usuarios recibir una evaluación inmediata de su desempeño. Después de completar un examen, la aplicación compara las respuestas proporcionadas por el usuario con las respuestas correctas almacenadas en la base de datos. A partir de esta comparación, se calcula una nota final y se generan informes detallados que muestran los aciertos, fallos y la puntuación obtenida en cada bloque temático. Esta función proporciona retroalimentación instantánea y permite a los usuarios identificar sus áreas de fortaleza y debilidad, lo que les ayuda a enfocar su estudio de manera más efectiva.

La aplicación web para la oposición de ascenso a cabo del Ejército de Tierra brinda a los usuarios la oportunidad de practicar y evaluar sus conocimientos a través de exámenes realistas y una amplia base de datos de preguntas. La corrección automática de exámenes y los informes detallados ofrecen una retroalimentación inmediata, permitiendo a los usuarios medir su progreso y enfocar sus esfuerzos de estudio de manera eficiente. Esta herramienta digital se convierte en un recurso invaluable para aquellos que buscan prepararse de manera efectiva y maximizar sus posibilidades de éxito en la oposición al ascenso a cabo en el Ejército de Tierra.

A continuación se procede a explicar la función `submitTest()` que corrige los exámenes realizados:

```md
public function submitTest(Request $request)
{
    // Obtén las respuestas enviadas por el usuario desde el formulario
    $respuestasUsuario = $request->input('respuesta');

    // Obtén todas las respuestas de la base de datos
    $todasRespuestas = Respuesta::all();

    // Verifica si el usuario ha respondido al menos una pregunta
    if (empty($respuestasUsuario)) {
        // Redirige al usuario a alguna página para mostrar un mensaje de error
        return redirect()->route('examenes.index')->with('error', 'Debes responder al menos una pregunta.');
    }

    // Obtén todas las preguntas relacionadas con las respuestas
    $preguntas = Pregunta::whereIn('id', array_keys($respuestasUsuario))->get();

    // Realiza la comparación de respuestas y obtén los resultados en un arreglo
    $resultados = [];
    $notaFinal = 0;

    foreach ($respuestasUsuario as $preguntaId => $respuestaId) {
        //

 Busca la respuesta correspondiente en la base de datos
        $respuesta = $todasRespuestas->find($respuestaId);

        // Verifica si la respuesta existe y si su valor indica que es correcta
        $resultado = ($respuesta && $respuesta->valor) ? true : false;
        $resultados[$preguntaId] = $resultado;

        // Calcula la nota
        if ($resultado) {
            $notaFinal += 1; // Respuesta correcta suma 1 punto
            // Incrementa el campo "aciertos" de la pregunta
            $pregunta = Pregunta::find($preguntaId);
            $pregunta->aciertos += 1;
            $pregunta->save();
        } elseif ($respuestaId === null) {
            // Respuesta no contestada, no suma puntos ni resta
        } else {
            $notaFinal -= 0.25; // Respuesta incorrecta resta 0.25 puntos
            // Incrementa el campo "fallos" de la pregunta
            $pregunta = Pregunta::find($preguntaId);
            $pregunta->fallos += 1;
            $pregunta->save();
        }
    }

    // Guarda la nota final en la base de datos en base de 10
    $notaFinalPonderada = ($notaFinal * 2) / 10;
    $nota = new Nota();
    $nota->user_id = $request->user()->id;
    $nota->nota = $notaFinalPonderada;
    $nota->bloque_id = $preguntas[0]->bloque_id;
    $nota->save();

    // Añade uno al campo total_examenes del usuario
    $user = $request->user();
    $user->total_examenes += 1;

    // Calcula la nueva media de notas del usuario
    $media = $user->notas()->avg('nota');
    $user->media_notas = $media;

    $user->save();

    // Renderiza la vista 'respuestas' y pasa los resultados, la nota final, las preguntas y las respuestas del usuario como datos a la vista
    return view('submit', compact('resultados', 'notaFinal', 'preguntas', 'respuestasUsuario', 'notaFinalPonderada'));
}
```

El código proporcionado corresponde a la función `submitTest` en el contexto de la implementación de tu aplicación web para realizar exámenes de oposición al ascenso a cabo en el Ejército de Tierra. Esta función se encarga de procesar las respuestas enviadas por el usuario desde el formulario y calcular la nota final del examen.

En primer lugar, se obtienen las respuestas enviadas por el usuario desde el formulario mediante la variable `$respuestasUsuario`. A continuación, se obtienen todas las respuestas almacenadas en la base de datos mediante la variable `$todasRespuestas`.

Posteriormente, se verifica si el usuario ha respondido al menos una pregunta. En caso de que no se haya respondido ninguna pregunta, el usuario es redirigido a una página de error.

Luego, se obtienen todas las preguntas relacionadas con las respuestas seleccionadas por el usuario mediante la variable `$preguntas`. A continuación, se realiza la comparación de respuestas y se obtienen los resultados en un arreglo utilizando un bucle `foreach`.

Dentro del bucle `foreach`, se busca la respuesta correspondiente en la base de datos y se verifica si la respuesta existe y si su valor indica que es correcta. Dependiendo del resultado, se actualizan

 los campos "aciertos" o "fallos" de la pregunta y se calcula la nota final sumando o restando puntos.

Después de calcular la nota final, se guarda en la base de datos en una escala de 10 puntos mediante la variable `$notaFinalPonderada`. A continuación, se crea un objeto de la clase `Nota` y se guardan los datos correspondientes, como el ID del usuario, la nota final ponderada y el ID del bloque al que pertenece la primera pregunta.

Además, se actualiza el campo "total_examenes" del usuario sumando uno y se calcula la nueva media de notas del usuario.

Finalmente, se renderiza la vista 'submit' y se pasan los resultados, la nota final, las preguntas y las respuestas del usuario como datos a la vista.

### 6.2 Pruebas y depuración

Durante el desarrollo de la aplicación web para la oposición de ascenso a cabo en el Ejército de Tierra, se llevaron a cabo diversas pruebas y se implementaron estrategias de depuración para garantizar el correcto funcionamiento y la fiabilidad del sistema.

En cuanto a las pruebas realizadas, se llevaron a cabo pruebas unitarias, funcionales y de rendimiento. Las pruebas unitarias se enfocaron en verificar el funcionamiento individual de cada componente y función del sistema, asegurando que cumplieran con los requisitos especificados. Se crearon casos de prueba que abarcaban diferentes escenarios y se realizaron pruebas exhaustivas para detectar posibles errores y garantizar la coherencia del código.

Las pruebas funcionales se centraron en verificar el cumplimiento de los requisitos funcionales de la aplicación. Se simularon situaciones reales en las que los usuarios interactuarían con la aplicación y se evaluó el comportamiento del sistema, asegurándose de que todas las funcionalidades principales funcionaran correctamente.

Además, se llevaron a cabo pruebas de rendimiento para evaluar el rendimiento y la escalabilidad de la aplicación. Se realizaron pruebas de carga para simular un alto volumen de usuarios concurrentes y se analizó cómo respondía el sistema bajo estas condiciones. Esto permitió identificar posibles cuellos de botella y optimizar el rendimiento del sistema.

En cuanto a las estrategias de depuración, se utilizaron diversas técnicas para identificar y corregir errores en el código. Se implementaron logs detallados que registraban información relevante sobre el funcionamiento del sistema y se realizaron pruebas exhaustivas para identificar posibles problemas o comportamientos inesperados. Además, se utilizaron herramientas de depuración y monitoreo para rastrear y solucionar errores, lo que facilitó la identificación de problemas y la corrección rápida de los mismos.

En resumen, se llevaron a cabo pruebas exhaustivas que abarcaban diferentes niveles y aspectos del sistema, incluyendo pruebas unitarias, funcionales y de rendimiento. Estas pruebas permitieron identificar y corregir errores, garantizando así la calidad y el correcto funcionamiento de la aplicación web. Las estrategias de depuración utilizadas, como el registro de logs detallados y el uso de herramientas de depuración, fueron fundamentales para detectar y solucionar problemas de manera eficiente. Con estas prácticas, se logró desarrollar una aplicación robusta y confiable para la preparación de la oposición al ascenso a cabo en el Ejército de Tierra.

## Despliegue y Evaluación

### 7.1 Despliegue de la Aplicación

- Guía paso a paso sobre cómo desplegar la aplicación web en un entorno de producción, incluyendo la configuración del servidor web y la base de datos.

El despliegue de la aplicación web en un entorno de producción se llevó a cabo en un servidor Ubuntu de la marca OVH, utilizando Apache como servidor web y MySQL como base de datos. A continuación, se presenta una guía paso a paso sobre cómo se realizó el despliegue de la aplicación.

En primer lugar, se configuró el servidor web Apache en el servidor Ubuntu. Esto implicó la instalación de Apache y la realización de ajustes en los archivos de configuración para asegurar que la aplicación web se pudiera ejecutar correctamente. Se realizaron configuraciones como la creación de virtual hosts y la asignación de dominios y rutas adecuadas para acceder a la aplicación.

En cuanto a la base de datos, se instaló y configuró MySQL en el servidor Ubuntu. Se creó una nueva base de datos para la aplicación web y se establecieron los permisos de acceso necesarios. Además, se importaron las tablas y datos requeridos desde el entorno de desarrollo en Laravel, a la base de datos en el servidor de producción.

Una vez configurados el servidor web y la base de datos, se procedió a transferir los archivos de la aplicación web desde el entorno de desarrollo al servidor de producción. Esto incluyó los archivos del código fuente, las dependencias del proyecto y los recursos estáticos necesarios.

Además de la configuración y transferencia de archivos, se realizaron ajustes en las variables de entorno necesarias para el funcionamiento de la aplicación en el servidor de producción. Estas variables incluyeron la configuración de la conexión a la base de datos, las claves de seguridad y cualquier otra configuración específica de la aplicación.

Para garantizar el correcto funcionamiento de la aplicación en el entorno de producción, se realizaron configuraciones de permisos en el servidor. Se ajustaron los permisos de archivos y directorios para que la aplicación web tuviera los permisos adecuados de lectura, escritura y ejecución.

Una vez que la aplicación web estuvo desplegada, se llevaron a cabo pruebas exhaustivas para asegurarse de que todo funcionara correctamente en el entorno de producción. Se verificó el acceso a la aplicación a través del servidor web, se realizaron pruebas de funcionalidad y se comprobó la conexión y manipulación de datos en la base de datos MySQL.

En el proceso de despliegue de la aplicación web, también se utilizaron varios comandos para realizar tareas específicas. Por ejemplo, el comando `npm run build` se utilizó para construir la versión de producción de la aplicación, generando los archivos optimizados y minimizados necesarios.

Además, se utilizaron comandos relacionados con Apache2 para configurar y gestionar el servidor web. Entre ellos se encontraban comandos como `sudo systemctl start apache2`, `sudo systemctl stop apache2`, `sudo systemctl restart apache2` y `sudo systemctl enable apache2`. Estos comandos permitieron iniciar, detener, reiniciar y habilitar automáticamente el servicio de Apache2 en el servidor.

También se utilizaron comandos para establecer los permisos adecuados en el servidor Apache. Por ejemplo, el comando `sudo chown -R www-data:www-data /ruta/a/los

/archivos` permitió cambiar el propietario y el grupo de los archivos y directorios relevantes a `www-data`, el usuario y grupo predeterminados de Apache en Ubuntu. Asimismo, el comando `sudo chmod -R 755 /ruta/a/los/archivos` estableció los permisos adecuados de lectura, escritura y ejecución para el usuario propietario, y permisos de solo lectura para el grupo y otros.

En resumen, el despliegue de la aplicación web en un entorno de producción en un servidor Ubuntu de OVH requirió la configuración adecuada de Apache como servidor web y MySQL como base de datos. Se transfirieron los archivos de la aplicación, se configuraron las variables de entorno y se ajustaron los permisos necesarios. Las pruebas y verificaciones se llevaron a cabo para garantizar que la aplicación funcionara correctamente en el entorno de producción. Durante este proceso, se utilizaron comandos específicos como `npm run build` y comandos relacionados con Apache2 y los permisos de Apache. Estos pasos y comandos fueron esenciales para asegurar el despliegue exitoso y el correcto funcionamiento de la aplicación en el entorno de producción.

### 7.2 Evaluación y Resultados

- Análisis de los resultados obtenidos, comparando los objetivos iniciales con el estado final del proyecto.

Durante la fase de evaluación y resultados, se realizó un análisis exhaustivo para comparar los objetivos iniciales del proyecto con el estado final alcanzado. Los resultados obtenidos superaron las expectativas, especialmente en los aspectos de UX/UI y funcionalidades de la aplicación web.

En cuanto al aspecto de UX/UI, se implementaron mejoras significativas que contribuyeron a una experiencia de usuario más intuitiva, atractiva y satisfactoria. Se realizaron ajustes en el diseño de la interfaz, la disposición de elementos, el uso de colores y tipografías, así como en la navegación y la estructura de la información. Estas mejoras se reflejaron en una mayor facilidad de uso, una interfaz más agradable visualmente y una mejor usabilidad general de la aplicación.

En términos de funcionalidades, se lograron avances significativos que ampliaron y mejoraron la capacidad de la aplicación. Se implementaron nuevas características que cumplían con los requisitos del proyecto, brindando a los usuarios un conjunto más completo de herramientas y opciones. Además, se optimizaron las funcionalidades existentes para mejorar su rendimiento y eficiencia.

Al comparar los resultados obtenidos con los objetivos iniciales, se observó una alineación satisfactoria. La aplicación web logró proporcionar una experiencia de usuario mejorada, cumpliendo con los estándares de diseño y usabilidad establecidos. Asimismo, las funcionalidades implementadas superaron las expectativas, brindando a los usuarios un mayor valor y satisfacción.

En resumen, la evaluación de los resultados demostró que el proyecto obtuvo un éxito considerable. Los aspectos de UX/UI y funcionalidades mostraron mejoras significativas, superando las expectativas iniciales. Estos resultados positivos reflejan el esfuerzo y la dedicación del equipo de desarrollo en la creación de una aplicación web altamente funcional, atractiva y satisfactoria para los usuarios.

## Conclusiones y Trabajo Futuro

### 8.1 Conclusiones

En esta sección de conclusiones, se presenta un resumen de los principales hallazgos y logros del proyecto:

Durante el desarrollo y ejecución del proyecto, se lograron importantes avances y se alcanzaron diversos hitos significativos. A continuación, se destacan los principales hallazgos y logros obtenidos:

#### 1. Diseño y Experiencia de Usuario: Se realizó un enfoque centrado en el usuario, lo que permitió diseñar una interfaz intuitiva y atractiva. Los resultados demostraron una mejora notable en la experiencia de usuario, reflejada en una mayor facilidad de uso, interacción fluida y una estética visual agradable.

#### 2. Funcionalidades Implementadas: Se logró desarrollar e implementar de manera exitosa todas las funcionalidades principales establecidas en los objetivos del proyecto. La aplicación web permitió a los usuarios realizar exámenes para la oposición de ascenso a cabo del Ejército de Tierra de manera efectiva, proporcionando una plataforma completa y funcional.

#### 3. Mejora en los Resultados Esperados: Los resultados obtenidos superaron las expectativas iniciales en términos de usabilidad, rendimiento y satisfacción del usuario. El análisis de los resultados demostró que la aplicación web cumplió con los estándares establecidos, brindando una experiencia de usuario mejorada y logrando un alto nivel de funcionalidad.

#### 4. Aumento de la Eficiencia y Productividad: La aplicación web permitió optimizar el proceso de realización de exámenes para la oposición de ascenso a cabo. Los usuarios pudieron acceder de manera rápida y eficiente a los recursos necesarios, lo que resultó en un aumento de la productividad y una mejora en la eficiencia general del proceso de estudio.

En conclusión, el proyecto alcanzó los objetivos planteados, logrando importantes avances en el diseño, la experiencia de usuario y las funcionalidades implementadas. Los resultados obtenidos demostraron una mejora significativa en la usabilidad, rendimiento y satisfacción del usuario. La aplicación web proporcionó una plataforma efectiva para la preparación de exámenes de ascenso a cabo en el Ejército de Tierra, ofreciendo a los usuarios una herramienta completa y funcional. Estos logros reflejan el éxito del proyecto y el esfuerzo conjunto del equipo de desarrollo en la creación de una solución exitosa y satisfactoria para los usuarios.

### 8.2 Limitaciones y Recomendaciones

En el apartado de Limitaciones y Recomendaciones, se discuten las limitaciones encontradas durante el desarrollo del proyecto y se brindan recomendaciones para posibles mejoras futuras:

Durante el desarrollo de la aplicación web para la preparación de exámenes de ascenso a cabo en el Ejército de Tierra, se encontraron algunas limitaciones que afectaron el alcance y la implementación del proyecto. Las principales limitaciones identificadas fueron:

#### 1. Limitación de tiempo: La falta de tiempo fue un factor determinante que afectó la realización de ciertas funcionalidades y la implementación de características adicionales. El proyecto tuvo un plazo ajustado, lo que limitó la capacidad de explorar a fondo todas las posibilidades y mejoras potenciales.

#### 2. Limitación en sistemas de pago y suscripciones: Debido a que el proyecto no contaba con un marco empresarial y no estaba destinado a generar ingresos directos, no fue posible implementar un sistema de pago ni de suscripciones para acceder a funcionalidades adicionales o contenido premium. Esta limitación restringió la viabilidad de monetización del proyecto.

A pesar de estas limitaciones, existen recomendaciones para futuras mejoras y desarrollos:

##### 1. Ampliar funcionalidades: Para futuras versiones, se recomienda explorar la posibilidad de incorporar nuevas funcionalidades que puedan mejorar aún más la experiencia del usuario. Esto puede incluir características adicionales, como recursos de aprendizaje adicionales, estadísticas de progreso, posibilidad de realizar exámenes personalizados, entre otros.

##### 2. Integración con sistemas de pago: En caso de que se busque monetizar la aplicación en el futuro, se recomienda considerar la integración de un sistema de pago o suscripciones. Esto permitiría ofrecer contenido premium o funcionalidades avanzadas a los usuarios que deseen acceder a ellos.

##### 3. Optimización de rendimiento: Se sugiere realizar una evaluación exhaustiva del rendimiento de la aplicación web, identificando posibles puntos de mejora y optimización. Esto puede incluir la optimización de consultas a la base de datos, mejoras en la velocidad de carga de la aplicación y la implementación de técnicas de almacenamiento en caché.

##### 4. Obtener retroalimentación de los usuarios: Es importante recopilar comentarios y sugerencias de los usuarios para comprender sus necesidades y expectativas. La retroalimentación de los usuarios puede ser invaluable para orientar futuras mejoras y actualizaciones de la aplicación.

En resumen, el proyecto se vio limitado principalmente por restricciones de tiempo y la falta de un marco empresarial para implementar sistemas de pago y suscripciones. Sin embargo, se brindaron recomendaciones para futuras mejoras, como la ampliación de funcionalidades, la integración de sistemas de pago, la optimización del rendimiento y la obtención de retroalimentación de los usuarios. Estas recomendaciones pueden ser consideradas en desarrollos posteriores para enriquecer aún más la aplicación y satisfacer las necesidades de los usuarios.

### 8.3 Trabajo Futuro

En el apartado de Trabajo Futuro, se presentan propuestas para posibles extensiones o mejoras adicionales de la aplicación web de preparación de exámenes de ascenso a cabo en el Ejército de Tierra:

#### 1. Ampliación de contenidos: Se puede considerar la expansión del banco de preguntas y contenido disponible en la aplicación. Esto implica la creación de nuevos conjuntos de preguntas y material de estudio para abarcar un mayor rango de temas y áreas de conocimiento relevantes para la oposición de ascenso a cabo.

#### 2. Personalización de exámenes: Se podría implementar la opción de generar exámenes personalizados para los usuarios. Esto permitiría a los usuarios seleccionar las áreas específicas en las que desean enfocarse, establecer un límite de tiempo personalizado y adaptar el nivel de dificultad de las preguntas a sus necesidades individuales.

#### 3. Integración de recursos multimedia: Sería beneficioso incorporar recursos multimedia, como videos explicativos o material audiovisual complementario, para enriquecer el proceso de aprendizaje de los usuarios. Estos recursos pueden ayudar a mejorar la comprensión de conceptos complejos y brindar una experiencia de estudio más dinámica.

#### 4. Implementación de un sistema de seguimiento de progreso: Se podría desarrollar una funcionalidad que permita a los usuarios realizar un seguimiento de su progreso y rendimiento a lo largo del tiempo. Esto podría incluir estadísticas detalladas sobre el rendimiento en exámenes anteriores, el tiempo empleado en cada sección y áreas de mejora identificadas.

#### 5. Adaptación para dispositivos móviles: Considerar el desarrollo de una aplicación móvil complementaria o la adaptación de la aplicación web existente para que sea completamente compatible con dispositivos móviles. Esto permitiría a los usuarios acceder a la plataforma de estudio desde sus teléfonos inteligentes o tabletas, brindando mayor flexibilidad y comodidad.

Estas propuestas para trabajo futuro buscan enriquecer la aplicación web y ofrecer una experiencia de preparación de exámenes más completa y efectiva. Cada mejora adicional tiene como objetivo mejorar la usabilidad, el contenido y las funcionalidades de la aplicación, brindando a los usuarios una herramienta aún más valiosa en su proceso de preparación para la oposición de ascenso a cabo en el Ejército de Tierra.
