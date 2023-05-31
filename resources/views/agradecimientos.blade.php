<x-app-layout>
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
    <div class="container py-5 text-white">
        <h1 class="text-center mb-4">Página de Agradecimientos</h1>
        <p class="lead text-center">Quiero expresar mi agradecimiento a las siguientes personas:</p>
        <ul class="list-group list-group-flush mx-auto" style="max-width: 500px;">
            <li>
                A Eva VG y Patricia JD por ser mis pilares y por darme todo su amor y apoyo
                incondicional.
                Su presencia en mi vida ha sido fundamental para enfrentar los desafíos y alcanzar mis metas.
                Estoy infinitamente agradecido por su cariño, comprensión y sacrificio. Su amor inquebrantable
                me impulsa a seguir adelante y ser la mejor versión de mí mismo. Gracias por estar siempre a mi lado.
            </li>

            <li>A Marina OB de Marc S, quiero agradecerte de corazón por ser mi gran apoyo en mis proyectos. Tu
                presencia y apoyo incondicional han sido fundamentales para alcanzar mis metas y superar obstáculos.
                Tu confianza en mí y tu ánimo constante me han dado fuerzas para seguir adelante en momentos de duda. Tu
                visión y tus ideas han enriquecido mis proyectos, aportando una perspectiva única.
            </li>

            <li>
                A mi compañero de proyecto por ser una parte valiosa de este viaje. Su compromiso, colaboración y
                dedicación han sido fundamentales para el éxito de nuestro
                proyecto. Juntos hemos superado desafíos, compartido ideas y trabajado en equipo para alcanzar nuestras
                metas. Su apoyo y contribución han sido invaluables, y estoy agradecido por tener a alguien
                tan talentoso y comprometido a mi lado. ¡Gracias por ser parte de este increíble proyecto!
            </li>

            <li>
                A mis profesores de clase por su invaluable contribución al descubrimiento y desarrollo de mi pasión por
                la
                programación. Gracias a su dedicación, conocimiento y orientación, he encontrado
                mi camino en este fascinante mundo. Estaré eternamente agradecido por su inspiración y apoyo.
            </li>

            <li>
                A mis compañeros de profesión por su apoyo incondicional. Siempre han estado dispuestos a cubrirme en
                clase y han cambiado sus servicios para ayudarme. Estoy muy agradecido por su solidaridad y compromiso
            </li>

            <li>
                A mis compañeros de clase. A lo largo de nuestro tiempo
                juntos, hemos compartido risas, aprendizajes y momentos inolvidables. Han sido una fuente de apoyo,
                colaboración y motivación en cada paso del camino. Juntos hemos superado desafíos, hemos compartido
                conocimientos y hemos crecido como profesionales. Agradezco su amistad, su espíritu de equipo y la
                energía positiva que han aportado a nuestra experiencia educativa. Estoy realmente agradecido por tener
                la oportunidad de aprender y crecer junto a personas tan maravillosas como ustedes y espero que nuestros
                caminos no terminen de separarse nunca.
            </li>

            <li>
                A Manuel F. GA, por ser un modelo militar a seguir. Su dedicación, disciplina y valentía son
                inspiradoras y ejemplares.
                A lo largo de mi carrera, he tenido el privilegio de observar su liderazgo y profesionalismo. Su
                compromiso con el servicio,
                su ética de trabajo impecable y su habilidad para tomar decisiones difíciles con calma y sabiduría son
                cualidades que admiro y
                respeto profundamente. Agradezco su guía y mentoría, y estoy agradecido por el impacto positivo que ha
                tenido en mi vida profesional.
                Su ejemplo me motiva a esforzarme por alcanzar los más altos estándares y a contribuir de manera
                significativa en mi campo.
            </li>
        </ul>
    </div>
</x-app-layout>
<x-footer />
