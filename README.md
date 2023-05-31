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