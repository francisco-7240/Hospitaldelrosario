<header @class(['w-full', 'border-b', 'border-slate-200', 'bg-white', 'text-slate-900'])>
    <div @class(['bg-[#008f4c]', 'text-white'])>
        <div @class(['mx-auto', 'flex', 'max-w-7xl', 'flex-col', 'gap-2', 'px-4', 'py-2', 'text-sm', 'font-semibold', 'sm:flex-row', 'sm:items-center', 'sm:justify-between', 'lg:px-8'])>
            <a href="{{ url('https://www.gov.co/') }}" @class(['flex', 'items-center', 'gap-2', 'text-2xl', 'font-bold', 'tracking-tight']) aria-label="Gobierno de Colombia">
                <img src="{{ asset('storage/optimized/logoGovCO.webp') }}"
                             alt="Logo Gobierno de Colombia"
                             @class(['h-8', 'w-auto', 'mt-6', 'sm:mt-0'])>
            </a>
            @foreach ($topMenu as $group)
                <div @class(['group', 'relative'])>
                    <a href="{{ $group['href'] }}" @class(['flex', 'cursor-pointer', 'items-center', 'gap-1', 'rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>
                        {{ $group['label'] }}
                        <svg @class(['h-3', 'w-3', 'transition-transform', 'group-hover:rotate-180']) fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div @class(['absolute', 'left-0', 'top-full', 'z-50', 'mt-1', 'hidden', 'w-64', 'rounded-md', 'border', 'border-slate-100', 'bg-white', 'py-2', 'shadow-xl', 'group-hover:block'])>
                        @foreach ($group['items'] as $item)
                            <a href="{{ $item['href'] }}" @class(['block', 'px-4', 'py-2', 'text-sm', 'text-slate-600', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
                        

            <div @class(['flex', 'items-center', 'justify-center', 'gap-3', 'sm:justify-end'])>
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
    <div @class(['mx-auto', 'max-w-7xl', 'px-4', 'lg:px-8'])>
    <div @class(['flex', 'min-h-24', 'items-center', 'justify-between', 'gap-6', 'py-4'])>
        
        <!-- Logo -->
        <a href="{{ url('/') }}" @class(['flex', 'shrink-0', 'items-center', 'gap-2']) aria-label="Hospital del Rosario ESE Carmen">
            <img src="{{ asset('storage/optimized/logohospital.webp') }}"
                 alt="Logo Hospital del Rosario ESE Carmen"
                 @class(['h-16', 'w-auto', 'sm:h-20'])>
        </a>

        <!-- MENÚ MÓVIL (Hamburguesa con Submenús) -->
        <!-- Oculto en escritorio: hidden md:block (o simplemente visible en móvil con lógica) -->
        <!-- Usaremos display: none en desktop y block en móvil -->
        <div @class(['hidden', 'md:block'])></div> 
        <!-- Truco: Un div invisible en desktop para mantener el espacio del logo, 
             pero el menú real se maneja con el bloque de abajo que tiene md:hidden -->

        <div @class(['relative', 'md:hidden'])>
            <details @class(['group'])>
                <summary @class(['flex', 'cursor-pointer', 'list-none', 'items-center', 'gap-2', 'rounded-md', 'border', 'border-slate-200', 'px-4', 'py-3', 'text-sm', 'font-medium', 'text-[#008f4c]', 'outline-none', 'hover:bg-emerald-50', 'sm:text-base'])>
                    <span>Menú</span>
                    <span @class(['transition-transform', 'group-open:rotate-180'])>
                        <svg @class(['h-5', 'w-5']) fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                
                <nav @class(['absolute', 'right-0', 'z-50', 'mt-3', 'w-72', 'origin-top', 'scale-y-0', 'opacity-0', 'transition-all', 'duration-300', 'group-open:scale-y-100', 'group-open:opacity-100', 'rounded-md', 'border', 'border-slate-200', 'bg-white', 'p-3', 'shadow-xl']) aria-label="Navegación principal móvil">
                    <div @class(['flex', 'flex-col', 'gap-1', 'text-sm', 'font-medium'])>
                        
                        <!-- Inicio -->
                        <a href="{{ url('/') }}" @class(['block', 'rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>Inicio</a>

                        @foreach ($mainMenu as $group)
                            {{-- Grupo del menú (dropdown móvil) --}}
                            <details @class(['group', 'relative'])>
                                <summary @class(['flex', 'cursor-pointer', 'list-none', 'items-center', 'justify-between', 'rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>
                                    <span>{{ $group['label'] }}</span>
                                    <span @class(['transition-transform', 'group-open:rotate-180'])>
                                        <svg @class(['h-4', 'w-4']) fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </span>
                                </summary>
                                <div @class(['ml-4', 'hidden', 'flex-col', 'gap-1', 'overflow-hidden', 'rounded-md', 'bg-slate-50', 'py-1', 'group-open:flex'])>
                                    @foreach ($group['items'] as $item)
                                        <a href="{{ $item['href'] }}" @class(['block', 'rounded', 'px-3', 'py-2', 'text-sm', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>{{ $item['label'] }}</a>
                                    @endforeach
                                </div>
                            </details>
                        @endforeach

                        <!-- Citas Médicas -->
                        <a href="{{ $appointmentsLink['href'] }}" @class(['block', 'rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>{{ $appointmentsLink['label'] }}</a>

                        <!-- Botón Agendar Cita -->
                        <a href="{{ $bookAppointmentLink['href'] }}" @class(['mt-2', 'rounded-md', 'bg-[#008f4c]', 'px-3', 'py-2', 'text-center', 'font-bold', 'text-white', 'hover:bg-[#00763f]'])>{{ $bookAppointmentLink['label'] }}</a>
                    </div>
                </nav>
            </details>
        </div>

        <!-- MENÚ ESCRITORIO (Horizontal con Dropdowns) -->
        <!-- Oculto en móvil, visible en tablets/escritorio -->
        <nav @class(['hidden', 'items-center', 'gap-1', 'text-sm', 'font-medium', 'text-slate-700', 'md:flex']) aria-label="Navegación principal">
            
            <!-- Inicio -->
            <a href="{{ url('/') }}" @class(['rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>Inicio</a>

            @foreach ($mainMenu as $group)
                {{-- Grupo del menú --}}
                <div @class(['group', 'relative'])>
                    <a href="{{ $group['href'] }}" @class(['flex', 'items-center', 'gap-1', 'rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>
                        {{ $group['label'] }}
                        <svg @class(['h-3', 'w-3', 'transition-transform', 'group-hover:rotate-180']) fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div @class(['absolute', 'left-0', 'top-full', 'z-50', 'mt-1', 'hidden', 'w-64', 'rounded-md', 'border', 'border-slate-100', 'bg-white', 'py-2', 'shadow-xl', 'group-hover:block'])>
                        @foreach ($group['items'] as $item)
                            <a href="{{ $item['href'] }}" @class(['block', 'px-4', 'py-2', 'text-sm', 'text-slate-600', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <!-- Citas Médicas -->
            <a href="{{ $appointmentsLink['href'] }}" @class(['rounded', 'px-3', 'py-2', 'hover:bg-emerald-50', 'hover:text-[#008f4c]'])>{{ $appointmentsLink['label'] }}</a>

            <!-- Botón Agendar Cita -->
            <a href="{{ $bookAppointmentLink['href'] }}" @class([ 'ml-2', 'rounded-md', 'bg-[#008f4c]', 'px-4', 'py-2', 'font-bold', 'text-white', 'hover:bg-[#00763f]'])>{{ $bookAppointmentLink['label'] }}</a>
        </nav>

    </div>
</div>
    
</header>
