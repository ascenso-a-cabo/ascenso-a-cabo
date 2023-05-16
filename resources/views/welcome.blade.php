<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ascenso a Cabo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap 5 (CSS y JS) -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="bg-warning">
            @if (Route::has('login'))
                <nav class="navbar navbar-expand-lg bg-dark d-flex">
                    <div class="container">
                        <img src="img/logoSinFondo.png" alt="">
                    </div>
                    <div class="d-flex justify-content-around px-4">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-light px-4">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                        @endif
                    @endauth
                    </div>
                </nav>
            @endif
            <div class="d-flex justify-content-center bg-warning">
                <x-carroussell></x-carroussell>
            </div>
            <section class="py-5 border-bottom" id="features">
                <h3 class="d-flex justify-content-center fw-folder">Tecnología y los mejores test de oposiciones para conseguir tu plaza de Cabo</h3>
                <div class="container my-5 d-flex justify-content-center">
                    <div class="row gx-5">
                        <div class="card col-lg-4 mb-5 mb-lg-0 hover bg-white px-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                            <h2 class="h4 fw-bolder">Tecnología</h2>
                            <p>Nuestro software basado en Inteligencia Artificial (IA) aprende del alumno mediante machine learning y diseña el itinerario de aprendizaje más eficaz para optimizar su estudio reduciendo tiempo y esfuerzo.</p>
                        </div>
                        <div class="card col-lg-4 mb-5 mb-lg-0 hover bg-white">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                            <h2 class="h4 fw-bolder">Método</h2>
                            <p>Más de 1.000 preguntas y test de diferentes bloques de estudio, actualizadas y revisadas a diario por un equipo editorial. Exámenes oficiales y simulacros para ensayar el día de la prueba y un sistema de evaluación para compararte en tiempo real con miles de opositores.</p>
                        </div>
                        <div class="card col-lg-4 hover bg-white">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                            <h2 class="h4 fw-bolder">Comunidad</h2>
                            <p>Nuestra amplia comunidad de usuarios nos permite realizar estadisticas continuas y actualizadas por destino, para que sepas en todo momento tu situación con respecto a tus competidores</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5 border-bottom bg-dark">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5 text-light">
                        <h2 class="fw-bolder">PAGA MENSUALMENTE</h2>
                        <p class="lead mb-0">Sin Matricula</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <!-- Pricing card free-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0 hover">
                                <div class="card-body p-5">
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">10€</span>
                                        <span class="text-muted">/ mes</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            <strong>1 usuario</strong>
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Examenes ilimitados
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Más de 1000 preguntas
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Compara resultados
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-x"></i>
                                            Estadisticas nacionales
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-x"></i>
                                            Estadisticas por destino
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-x"></i>
                                            Soporte continuo
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-outline-danger" href="#!">Registrarse</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5 border-bottom">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h2 class="fw-bolder">Testimonios de nuestros clientes</h2>
                        <p class="lead mb-0">A nuestros opositores les encanta</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <!-- Testimonial 1-->
                            <div class="card mb-4 hover">
                                <div class="card-body p-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                        <div class="ms-4">
                                            <p class="mb-1">Los test son practicamente iguales a los del examen oficial, me ha ayudado mucho, con tan poco tiempo para preparar el examen esto es esencial si quieres aprobar</p>
                                            <div class="small text-muted">- Javier Lago, A Coruña</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial 2-->
                            <div class="card hover">
                                <div class="card-body p-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                        <div class="ms-4">
                                            <p class="mb-1">Es un apoyo fantástico! Las preguntas están bien redactadas y actualizadas al temario actual.</p>
                                            <div class="small text-muted">- Mario Tatay, Barcelona</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <x-footer/>
    </body>
</html>

<style>
    .hover{
        transition: 0.5s;
    }
    .hover:hover{
        transform: scale(1.1);
    }
    </style>
