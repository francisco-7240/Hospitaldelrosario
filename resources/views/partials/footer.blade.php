
<!-- Footer -->
<footer
    class="relative bg-cover bg-center"
    style="background-color: #058d3e"
    data-aos="fade-in"
>

    <!-- Capa oscura -->
    <div class="absolute inset-0 bg-[#008f4c]"></div>

    <div class="relative z-10 border-t-4 border-primary">

        <div class="max-w-7xl mx-auto px-6 py-20">

            <div class="grid lg:grid-cols-3 gap-16">

                <!-- Logo y descripción -->
                <div data-aos="fade-right">

                    <img src="{{ asset('storage/logoblanco.png') }}"
                             alt="Logotipo institucional del Hospital del Rosario, Campoalegre Huila"
                             class="h-40 w-auto mt-6 sm:mt-0 ">

                    <p class="mt-8 text-gray-200 text-lg max-w-md leading-relaxed">
                        Centro de salud integral con servicios
                        médicos de excelencia al servicio de
                        la comunidad.
                    </p>

                    <!-- Redes -->
                    <div class="mt-10">

                        <h3 class="text-2xl font-semibold text-white mb-5">
                            Síguenos
                        </h3>

                        <div class="flex items-center justify-center gap-3 sm:justify-start">
                            <!-- Facebook -->
                            <a
                                aria-label="Red Facebook"
                                href="https://www.facebook.com/HospitaldelRosarioCampoalegre/"
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center
                                text-green-700 text-2xl hover:bg-primary transition">

                                <i class='bx bxl-facebook'></i>

                            </a>

                            <!-- Instagram -->
                            <a
                                aria-label="Red Instagram"
                                href="https://www.instagram.com/esehrosario/"
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center
                                text-green-700 text-2xl hover:bg-primary transition">

                                <i class='bx bxl-instagram'></i>

                            </a>

                            <!-- YouTube -->
                            <a
                                aria-label="Red YouTube"
                                href="https://www.youtube.com/channel/UC1Gahp7xlyqimpZiqcjM18Q/featured?view_as=subscriber"
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center
                                text-green-700 text-2xl hover:bg-primary transition">

                                <i class='bx bxl-youtube'></i>

                            </a>
            </div>
        </div>
    </div>


                <!-- Menú -->
                <div data-aos="fade-up">

                    <h3 class="text-3xl font-bold text-white mb-8">
                        Atención al Usuario
                    </h3>
                    <div class="mb-8 h-1 w-12 rounded-full bg-primary"></div>

                    <ul class="space-y-6 text-gray-200">

                        <li>
                            <p class="font-bold text-white">Horarios de Atención Area Administrativa y Asistencial:</p>
                            <p>Lunes a Viernes: 8:00 am a 12:00 pm – 2:00 pm a 6:00 pm</p>
                        </li>

                        <li>
                            <p class="font-bold text-white">Horario de Visitas:</p>
                            <p>Lunes a Domingos: 10:00 am a 11:00 pm – 4:00 pm a 5:00 pm</p>
                        </li>

                        <li>
                            <p class="font-bold text-white">Horario de Atención Servicio de Urgencias:</p>
                            <p>24 horas</p>
                        </li>

                        <li>
                            <p class="font-bold text-white">Horario Oficina de Atención al Usuario SIAU:</p>
                            <p>Lunes a Viernes: 07:00 am a 12:00 m – 2:00 pm a 5:00 pm</p>
                        </li>

                    </ul>

                </div>


                <!-- Contacto -->
                <div data-aos="fade-left">

                    <h3 class="text-3xl font-bold text-white mb-8">
                        Donde estamos ubicados
                    </h3>
                    <div class="mb-8 h-1 w-12 rounded-full bg-primary"></div>

                    <div class="space-y-6">

                        <!-- Dirección -->
                        <div class="flex gap-4">

                            <i class='bx bx-map text-primary text-3xl'></i>

                            <span class="text-gray-200 text-lg">
                                Carrera 9 # 32 - 50 Km 1 Via Neiva, Campoalegre, Colombia
                            </span>

                        </div>


                        <!-- Teléfono -->
                        <div class="flex gap-4">

                            <i class='bx bx-phone text-primary text-3xl'></i>

                            <span class="text-gray-200 text-lg">
                                +57 3178934013
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Línea inferior -->
        <div class="border-t border-white/10">

            <div class="max-w-7xl mx-auto px-6 py-6">

                <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                    <p class="text-gray-400 text-center md:text-left">
                        © {{ date('Y') }} E.S.E Hospital del Rosario - Campoalegre Huila. Todos los derechos reservados.
                    </p>

                    <div class="flex items-center gap-6">
                        <p class="text-slate-400">
                            Desarrollado por
                            <a href="https://sharrys.com/" class="font-semibold text-primary hover:text-white" target="_blank" aria-label="Ir a Sharrys Tech">
                                Sharrys Tech
                            </a>
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>


<!-- BOTÓN FLOTANTE "IR ARRIBA" -->
<button id="scrollTopBtn" aria-label="Ir Arriba"
    class="hidden fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-dark transition transform hover:scale-110 cursor-pointer animate-bounce"
    onclick="scrollToTop()"
>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>

<script>
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.remove('hidden');
        } else {
            scrollTopBtn.classList.add('hidden');
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<!-- animaciones -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',

        // SOLO se activa cuando entra al viewport
        once: true,

        // distancia antes de activar
        offset: 120,

        // evita activación prematura
        startEvent: 'load',

        // no repetir animación al subir
        mirror: false,
    });
</script>

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

