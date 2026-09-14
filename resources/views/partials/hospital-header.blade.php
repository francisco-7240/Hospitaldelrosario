<header class="w-full border-b border-slate-200 bg-white text-slate-900">
    <div class="bg-[#008f4c] text-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-2 text-sm font-semibold sm:flex-row sm:items-center sm:justify-between lg:px-8">
            <a href="{{ url('https://www.gov.co/') }}" class="flex items-center gap-2 text-2xl font-bold tracking-tight" aria-label="Gobierno de Colombia">
                <img src="{{ asset('storage/optimized/logoGovCO.webp') }}"
                             alt="Logo Gobierno de Colombia"
                             class="h-8 w-auto mt-6 sm:mt-0">
            </a>

            <a href="#transparencia" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Transparencia y Acceso a la Información Pública</a>
            <a href="#servicios" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Atención y servicios a la ciudadanía</a>
            <a href="#participa" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Participa</a>

            <div class="flex items-center justify-center gap-3 sm:justify-end">
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
                <span>Siguenos</span>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 lg:px-8">
        <div class="flex min-h-24 items-center justify-between gap-6 py-4">
            <a href="{{ url('/') }}" class="flex shrink-0 items-center gap-2" aria-label="Hospital del Rosario ESE Carmen">
                <img src="{{ asset('storage/optimized/logohospital.webp') }}"
                             alt="Logo Hospital del Rosario ESE Carmen"
                             class="h-20 w-auto mt-6 sm:mt-0">
            </a>

            <details class="relative md:hidden">
                <summary class="cursor-pointer list-none rounded-md border border-slate-200 px-3 py-2 text-xl leading-none text-[#008f4c]" aria-label="Abrir menú">
                    <span aria-hidden="true">☰</span>
                </summary>
                <nav class="absolute right-0 z-40 mt-3 w-64 rounded-md border border-slate-200 bg-white p-3 shadow-xl" aria-label="Navegación principal">
                    <div class="flex flex-col gap-1 text-sm font-medium">
                        <a href="{{ url('/') }}" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Inicio</a>
                        <a href="#entidad" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Entidad</a>                     
                        <a href="#normatividad" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Servicios</a>                     
                        <a href="#normatividad" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Normatividad</a>
                        <a href="#normatividad" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Rendicion de Cuentas</a>                     
                        <a href="#normatividad" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Prensa</a>
                        <a href="#citas" class="rounded px-3 py-2 hover:bg-emerald-50 hover:text-[#008f4c]">Citas Médicas</a>
                        <a href="#citas" class="mt-2 rounded-md bg-[#008f4c] px-3 py-2 text-center font-bold text-white hover:bg-[#00763f]">Agendar cita</a>
                    </div>
                </nav>
            </details>

            <nav class="hidden flex-1 items-center justify-end gap-5 text-sm font-medium lg:gap-7 md:flex" aria-label="Navegación principal">
                <a href="{{ url('/') }}" aria-label="Inicio" class="whitespace-nowrap transition hover:text-[#008f4c]">Inicio <span class="text-[#008f4c]">⌄</span></a>
                <a href="#entidad" aria-label="Entidad" class="text-center leading-4 transition hover:text-[#008f4c]">Entidad <span class="text-[#008f4c]">⌄</span></a>
                <a href="#normatividad" aria-label="Servicios" class="whitespace-nowrap transition hover:text-[#008f4c]">Servicios <span class="text-[#008f4c]">⌄</span></a>
                <a href="#normatividad" aria-label="Normatividad" class="whitespace-nowrap transition hover:text-[#008f4c]">Normatividad <span class="text-[#008f4c]">⌄</span></a>            
                <a href="#normatividad" aria-label="Rendición de Cuentas" class="whitespace-nowrap transition hover:text-[#008f4c]">Rendicion de Cuentas <span class="text-[#008f4c]">⌄</span></a>
                <a href="#normatividad" aria-label="Prensa" class="whitespace-nowrap transition hover:text-[#008f4c]">Prensa <span class="text-[#008f4c]">⌄</span></a>
                <a href="#normatividad" aria-label="Educa Web" class="whitespace-nowrap transition hover:text-[#008f4c]">Educa Web</a>
                <a href="#citas" class="whitespace-nowrap transition hover:text-[#008f4c]">Citas Médicas <span class="text-[#008f4c]">⌄</span></a>                
                <a href="#citas" class="whitespace-nowrap rounded-md bg-[#008f4c] px-5 py-2.5 font-bold text-white transition hover:bg-[#00763f]">Agendar cita</a>
            </nav>
        </div>
    </div>
</header>
