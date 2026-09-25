<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')

        <title>{{ config('app.name', 'Hospital del Rosario') }}</title>
        <link rel="preload" as="image" href="{{ asset('storage/favicon.svg') }}" fetchpriority="high">
    </head>
    <body @class(['min-h-screen', 'bg-white', 'text-dark'])>
        @include('partials.hospital-header')

        <main @class(['min-h-screen'])>
            <div
                x-data="{
                activeSlide: 0,
                slides: [
                    {
                        image: '/storage/optimized/DSC_0057-scaled.webp',
                        link: '#agendar',
                        title: 'Cuidamos tu salud con excelencia médica',
                        text: 'E.S.E. Hospital del Rosario ofrece servicios médicos integrales con tecnología de punta, médicos especializados y atención humanizada disponible 24/7.'
                    },
                    {
                        image: '/storage/optimized/DSC_0077-scaled.webp',
                        link: '#section-services',
                        title: 'Atención humanizada y cercana',
                        text: 'Nuestro equipo está comprometido con brindarte un servicio cálido, seguro y de calidad en cada visita.'
                    },
                    {
                        image: '/storage/optimized/DSC_0998-scaled.webp',
                        link: '#section-services',
                        title: 'Tecnología al servicio de tu bienestar',
                        text: 'Contamos con equipos modernos y personal capacitado para garantizar los mejores resultados en tu tratamiento.'
                    },
                    {
                        image: '/storage/optimized/DSC_1001-scaled.webp',
                        link: '#agendar',
                        title: 'Tu salud es nuestra prioridad',
                        text: 'Recibe atención profesional y cercana en el Hospital del Rosario.'
                    },
                ],
                init() {
                    setInterval(() => {
                        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                    }, 5000);
                }
            }"
            @class(['relative', 'h-150', 'w-full', 'overflow-hidden'])
            >

            {{-- Slides --}}
            <template x-for="(slide, index) in slides" :key="index">
                    <div
                        x-show="activeSlide === index"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-700"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        @class(['absolute', 'inset-0', 'h-full', 'w-full'])
                    >
                        {{-- Imagen de fondo --}}
                        <a
                            :href="slide.link"
                            :aria-label="`Conoce más: ${slide.title}`"
                            @class(['absolute', 'inset-0', 'h-full', 'w-full', 'bg-cover', 'bg-center'])
                        >
                            <img
                                :src="slide.image"
                                :alt="slide.title"
                                :loading="index === 0 ? 'eager' : 'lazy'"
                                :fetchpriority="index === 0 ? 'high' : 'low'"
                                @class(['h-full', 'w-full', 'object-cover', 'object-center'])
                            >
                        </a>

                        {{-- Overlay oscuro --}}
                        <div @class(['pointer-events-none', 'absolute', 'inset-0', 'bg-black/40'])></div>

                        {{-- Contenido --}}
                        <div @class(['relative', 'z-10', 'flex', 'h-full', 'flex-col', 'items-center', 'justify-center', 'px-6', 'text-center'])>
                            <h1
                                @class(['mb-6', 'max-w-3xl', 'text-5xl', 'font-extrabold', 'text-white', 'md:text-6xl'])
                                x-text="slide.title"
                            ></h1>

                            <p
                                @class(['mb-8', 'max-w-2xl', 'text-lg', 'text-gray-100'])
                                x-text="slide.text"
                            ></p>

                            <div @class(['flex', 'flex-wrap', 'justify-center', 'gap-4'])>
                                <a href="#agendar"
                                @class(['rounded-lg', 'bg-primary', 'px-8', 'py-3', 'font-semibold', 'text-white', 'transition', 'hover:opacity-90'])>
                                    Agendar cita
                                </a>
                                <a href="#section-services"
                                @class(['rounded-lg', 'border-2', 'border-primary', 'px-8', 'py-3', 'font-semibold', 'text-white', 'transition', 'hover:bg-primary'])>
                                    Conocer servicios
                                </a>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
             {{--accessos rápidos--}}   
            <section @class(['bg-white', 'px-4', 'py-10', 'sm:px-8']) aria-labelledby="quick-access-title">
                <div @class(['mx-auto', 'max-w-6xl'])>
                    <h2 id="quick-access-title" @class(['mb-8', 'text-3xl', 'font-extrabold', 'text-[#008f4c]'])>
                        Accesos rápidos
                    </h2>

                    <div x-data="{ scroll(direction) { $refs.accessList.scrollBy({ left: direction * 300, behavior: 'smooth' }) } }" @class(['flex', 'items-center', 'gap-3'])>
                        <button
                            type="button"
                            @click="scroll(-1)"
                            title="Ver accesos anteriores"
                            aria-label="Ver accesos anteriores"
                            @class(['shrink-0', 'p-1', 'text-4xl', 'leading-none', 'text-[#008f4c]', 'transition', 'hover:text-[#00763f]'])
                        >
                            &lsaquo;
                        </button>

                        <div
                            x-ref="accessList"
                            @class(['scrollbar-none', 'flex', 'min-w-0', 'flex-1', 'gap-1.5', 'overflow-x-auto', 'scroll-smooth', 'py-1', '[&::-webkit-scrollbar]:hidden'])
                        >
                            <a href="#agendar" @class(['flex', 'min-w-40', 'flex-1', 'items-center', 'gap-3', 'rounded-xl', 'border', 'border-[#008f4c]', 'px-3', 'py-3', 'text-[#008f4c]', 'transition', 'hover:bg-[#effaf4]', 'sm:min-w-40'])>
                                <svg @class(['h-10', 'w-10', 'shrink-0']) viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <rect x="3" y="4" width="18" height="17" rx="2" />
                                    <path d="M8 2v4M16 2v4M3 9h18M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01" />
                                    <circle cx="17" cy="18" r="3" fill="white" />
                                    <path d="M17 16.7v1.5l1 0.6" />
                                </svg>
                                <span @class(['min-w-0'])>
                                    <strong @class(['block', 'text-sm', 'font-extrabold', 'leading-tight'])>Agendar cita</strong>
                                    <small @class(['block', 'text-[10px]', 'leading-tight', 'text-slate-700'])>Reserva tu cita médica.</small>
                                </span>
                            </a>

                            <a href="#urgencias" @class(['flex', 'min-w-40', 'flex-1', 'items-center', 'gap-3', 'rounded-xl', 'border', 'border-[#008f4c]', 'px-3', 'py-3', 'text-[#008f4c]', 'transition', 'hover:bg-[#effaf4]', 'sm:min-w-40'])>
                                <svg @class(['h-10', 'w-10', 'shrink-0']) viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 4v4M12 16v4M4 12H1M23 12h-3M6.3 6.3 4.2 4.2M19.8 19.8l-2.1-2.1M17.7 6.3l2.1-2.1M4.2 19.8l2.1-2.1" />
                                    <path d="M8 12a4 4 0 1 1 8 0v7H8z" />
                                    <path d="M10 12h4M12 10v4" />
                                </svg>
                                <span @class(['min-w-0'])>
                                    <strong @class(['block', 'text-sm', 'font-extrabold', 'leading-tight'])>Urgencias 24/7</strong>
                                    <small @class(['block', 'text-[10px]', 'leading-tight', 'text-slate-700'])>Atención inmediata.</small>
                                </span>
                            </a>

                            <a href="#laboratorio" @class(['flex', 'min-w-40', 'flex-1', 'items-center', 'gap-3', 'rounded-xl', 'border', 'border-[#008f4c]', 'px-3', 'py-3', 'text-[#008f4c]', 'transition', 'hover:bg-[#effaf4]', 'sm:min-w-40'])>
                                <svg @class(['h-10', 'w-10', 'shrink-0']) viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M9 3h6M10 3v6l-5 9a2 2 0 0 0 1.8 3h10.4A2 2 0 0 0 19 18l-5-9V3" />
                                    <path d="M7 16h10M8.5 13h7" />
                                </svg>
                                <span @class(['min-w-0'])>
                                    <strong @class(['block', 'text-sm', 'font-extrabold', 'leading-tight'])>Resultados de laboratorio</strong>
                                    <small @class(['block', 'text-[10px]', 'leading-tight', 'text-slate-700'])>Consulta tus resultados.</small>
                                </span>
                            </a>

                            <a href="#historia-clinica" @class(['flex', 'min-w-40', 'flex-1', 'items-center', 'gap-3', 'rounded-xl', 'border', 'border-[#008f4c]', 'px-3', 'py-3', 'text-[#008f4c]', 'transition', 'hover:bg-[#effaf4]', 'sm:min-w-40'])>
                                <svg @class(['h-10', 'w-10', 'shrink-0']) viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M5 3h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zM7 7h8M7 11h5M7 15h3" />
                                    <circle cx="17" cy="17" r="4" fill="white" />
                                    <path d="m15.5 17 1 1 2-2" />
                                </svg>
                                <span @class(['min-w-0'])>
                                    <strong @class(['block', 'text-sm', 'font-extrabold', 'leading-tight'])>Historia clínica</strong>
                                    <small @class(['block', 'text-[10px]', 'leading-tight', 'text-slate-700'])>Accede a tu información.</small>
                                </span>
                            </a>

                            <a href="#directorio-medico" @class(['flex', 'min-w-40', 'flex-1', 'items-center', 'gap-3', 'rounded-xl', 'border', 'border-[#008f4c]', 'px-3', 'py-3', 'text-[#008f4c]', 'transition', 'hover:bg-[#effaf4]', 'sm:min-w-40'])>
                                <svg @class(['h-10', 'w-10', 'shrink-0']) viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M5 3h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zM7 7h8M7 11h8M7 15h5" />
                                    <circle cx="17" cy="17" r="4" fill="white" />
                                    <path d="M15.5 17h3M17 15.5v3" />
                                </svg>
                                <span @class(['min-w-0'])>
                                    <strong @class(['block', 'text-sm', 'font-extrabold', 'leading-tight'])>Directorio médico</strong>
                                    <small @class(['block', 'text-[10px]', 'leading-tight', 'text-slate-700'])>Conoce nuestros especialistas.</small>
                                </span>
                            </a>
                        </div>

                        <button
                            type="button"
                            @click="scroll(1)"
                            title="Ver más accesos"
                            aria-label="Ver más accesos"
                            @class(['shrink-0', 'p-1', 'text-4xl', 'leading-none', 'text-[#008f4c]', 'transition', 'hover:text-[#00763f]'])
                        >
                            &rsaquo;
                        </button>
                    </div>
                </div>
            </section>

            {{--Indicadores--}}

            <section
                x-data="{
                    started: false,
                    stats: [
                        { value: 17, current: 0, label: 'Camas disponibles' },
                        { value: 9, current: 0, label: 'Camillas Urgencias' },
                        { value: 3, current: 0, label: 'Consultorios Odontológicos' },
                        { value: 3, current: 0, label: 'Ambulancias' }
                    ],
                    animateStats() {
                        if (this.started) {
                            return;
                        }

                        this.started = true;
                        this.stats.forEach((stat) => {
                            const duration = 900;
                            const start = performance.now();

                            const update = (now) => {
                                const progress = Math.min((now - start) / duration, 1);
                                const easedProgress = 1 - Math.pow(1 - progress, 3);
                                stat.current = Math.round(stat.value * easedProgress);

                                if (progress < 1) {
                                    requestAnimationFrame(update);
                                }
                            };

                            requestAnimationFrame(update);
                        });
                    }
                }"
                x-init="
                    const observer = new IntersectionObserver((entries) => {
                        if (entries[0].isIntersecting) {
                            animateStats();
                            observer.disconnect();
                        }
                    }, { threshold: 0.35 });
                    observer.observe($el);
                "
                @class(['px-4', 'sm:px-8'])
                aria-label="Indicadores de capacidad del hospital"
            >
                <div @class(['relative', 'mx-auto', 'max-w-6xl', 'overflow-hidden', 'rounded-[2rem]', 'bg-[#005d35]', 'shadow-xl'])>
                    <img
                        src="{{ asset('storage/optimized/DSC_1001-scaled.webp') }}"
                        alt="Ambulancias del Hospital del Rosario"
                        loading="lazy"
                        decoding="async"
                        @class(['absolute', 'inset-0', 'h-full', 'w-full', 'object-cover', 'object-center'])
                    >
                    <div @class(['absolute', 'inset-0', 'bg-[#0c7c3b]/50'])></div>

                    <div @class(['relative', 'grid', 'min-h-52', 'grid-cols-2', 'items-center', 'sm:min-h-52', 'sm:grid-cols-4'])>
                        <template x-for="stat in stats" :key="stat.label">
                            <div @class(['flex', 'min-h-26', 'flex-col', 'items-center', 'justify-center', 'px-3', 'py-5', 'text-center', 'sm:min-h-52', 'sm:px-5'])>
                                <div @class(['flex', 'items-baseline', 'text-white'])>
                                    <span @class(['text-4xl', 'font-black', 'tracking-tight', 'sm:text-5xl']) x-text="stat.current"></span>
                                    <span @class(['ml-0.5', 'text-3xl', 'font-black', 'sm:text-4xl'])>+</span>
                                </div>
                                <p @class(['mt-1', 'max-w-44', 'text-xs', 'font-bold', 'leading-tight', 'text-white', 'sm:text-sm']) x-text="stat.label"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </section>
            {{--Servicios--}}
            <section
                id="servicios"
                x-data="{
                    current: 0,
                    services: [
                        { image: '/storage/optimized/DSC_0057-scaled.webp', title: 'Agendar cita' },
                        { image: '/storage/optimized/DSC_0077-scaled.webp', title: 'Promoción y prevención' },
                        { image: '/storage/optimized/DSC_0998-scaled.webp', title: 'Urgencias' },
                        { image: '/storage/optimized/DSC_1001-scaled.webp', title: 'Hospitalización' }
                    ],
                    visible: 4,
                    get maxIndex() {
                        return Math.max(this.services.length - this.visible, 0);
                    },
                    next() {
                        this.current = this.current >= this.maxIndex ? 0 : this.current + 1;
                    },
                    previous() {
                        this.current = this.current <= 0 ? this.maxIndex : this.current - 1;
                    },
                    updateVisible() {
                        const w = window.innerWidth;
                        this.visible = w < 640 ? 1 : (w < 1024 ? 2 : 4);
                        this.current = Math.min(this.current, this.maxIndex);
                    }
                }"
                x-init="updateVisible(); window.addEventListener('resize', () => updateVisible())"
                @class(['bg-white', 'px-4', 'py-12', 'sm:px-8', 'sm:py-16'])
                aria-labelledby="services-title"
            >
                <div @class(['mx-auto', 'max-w-7xl'])>
                    <div @class(['mx-auto', 'max-w-2xl', 'text-center'])>
                        <h2 id="services-title" @class(['text-4xl', 'font-black', 'text-[#008f4c]', 'sm:text-5xl'])>Nuestros Servicios</h2>
                        <p @class(['mt-4', 'text-sm', 'leading-relaxed', 'text-slate-800', 'sm:text-base'])>Contamos con servicios médicos integrales para atender todas tus necesidades de salud.</p>
                    </div>

                    <div @class(['relative', 'mt-10'])>
                        <button type="button" @click="previous()" title="Servicios anteriores" aria-label="Servicios anteriores" @class(['absolute', 'left-0', 'top-1/2', 'z-10', '-translate-x-1/2', '-translate-y-1/2', 'text-5xl', 'leading-none', 'text-[#008f4c]', 'transition', 'hover:scale-110', 'sm:-translate-x-3/4'])>&lsaquo;</button>
                        <div @class(['overflow-hidden', 'px-1', 'py-2'])>
                            <div @class(['flex', 'gap-3', 'transition-transform', 'duration-500', 'ease-out', 'sm:gap-4']) :style="`transform: translateX(calc(-${current} * (100% + ${window.innerWidth < 640 ? 12 : 16}px) / ${visible}))`">
                                <template x-for="service in services" :key="service.title">
                                    <a href="#agendar" @class(['block', 'min-w-0', 'flex-[0_0_100%]', 'overflow-hidden', 'rounded-2xl', 'bg-white', 'shadow-[0_5px_15px_rgba(0,0,0,0.15)]', 'transition', 'hover:-translate-y-1', 'sm:flex-[0_0_calc(50%_-_8px)]', 'lg:flex-[0_0_calc(25%_-_12px)]'])>
                                        <img :src="service.image" :alt="service.title" loading="lazy" decoding="async" @class(['h-40', 'w-full', 'object-cover', 'sm:h-44'])>
                                        <h3 @class(['flex', 'min-h-14', 'items-center', 'justify-center', 'px-3', 'py-3', 'text-center', 'text-lg', 'font-bold', 'leading-tight', 'text-slate-950']) x-text="service.title"></h3>
                                    </a>
                                </template>
                            </div>
                        </div>
                        <button type="button" @click="next()" title="Siguientes servicios" aria-label="Siguientes servicios" @class(['absolute', 'right-0', 'top-1/2', 'z-10', 'translate-x-1/2', '-translate-y-1/2', 'text-5xl', 'leading-none', 'text-[#008f4c]', 'transition', 'hover:scale-110', 'sm:translate-x-3/4'])>&rsaquo;</button>
                    </div>

                    <div @class(['mt-7', 'flex', 'items-center', 'justify-between', 'gap-4'])>
                        <div @class(['flex', 'items-center', 'gap-1.5']) aria-label="Páginas de servicios">
                            <template x-for="page in maxIndex + 1" :key="page">
                                <button type="button" @click="current = page - 1" :aria-label="`Ir a la página ${page}`" :class="current === page - 1 ? 'h-3 w-7 rounded-full bg-[#008f4c]' : 'h-3 w-3 rounded-full bg-slate-300'"></button>
                            </template>
                        </div>
                        <a href="#agendar" @class(['flex', 'items-center', 'gap-2', 'text-sm', 'font-bold', 'text-[#008f4c]', 'transition', 'hover:text-[#006b3d]', 'sm:text-base'])>Ver todos los servicios <span aria-hidden="true" @class(['text-2xl', 'leading-none'])>&rarr;</span></a>
                    </div>
                </div>
            </section>
                            &rsaquo;
                        </button>
                    </div>

                    <div @class(['mt-7', 'flex', 'items-center', 'justify-between', 'gap-4'])>
                        <div @class(['flex', 'items-center', 'gap-1.5']) aria-label="Páginas de servicios">
                            <template x-for="page in maxIndex + 1" :key="page">
                                <button
                                    type="button"
                                    @click="current = page - 1"
                                    :aria-label="`Ir a la página ${page}`"
                                    :class="current === page - 1 ? 'h-3 w-7 rounded-full bg-[#008f4c]' : 'h-3 w-3 rounded-full bg-slate-300'"
                                ></button>
                            </template>
                        </div>
                        <a href="#agendar" @class(['flex', 'items-center', 'gap-2', 'text-sm', 'font-bold', 'text-[#008f4c]', 'transition', 'hover:text-[#006b3d]', 'sm:text-base'])>
                            Ver todos los servicios <span aria-hidden="true" @class(['text-2xl', 'leading-none'])>&rarr;</span>
                        </a>
                    </div>
                </div>
            </section>

            <section @class(['bg-[#f1f3f4]', 'px-4', 'py-12', 'sm:px-8', 'sm:py-16']) aria-labelledby="news-section-title">
                <div @class(['mx-auto', 'max-w-7xl'])>
                    <div @class(['grid', 'grid-cols-1', 'gap-10', 'lg:grid-cols-3', 'lg:gap-16'])>
                        <div>
                            <div @class(['mb-5', 'flex', 'items-center', 'gap-3'])>
                                <h2 id="news-section-title" @class(['shrink-0', 'text-2xl', 'font-bold', 'text-[#003b91]', 'sm:text-3xl'])>Últimas Noticias</h2>
                                <span @class(['h-px', 'w-full', 'bg-[#003b91]']) aria-hidden="true"></span>
                            </div>
                            @if($noticias->isEmpty())
                                <div @class(['flex', 'min-h-80', 'items-center', 'justify-center', 'rounded-2xl', 'bg-white', 'p-6', 'text-center', 'text-slate-600', 'shadow-sm'])>Aún no hay noticias publicadas.</div>
                            @else
                                @php($noticiaPrincipal = $noticias->first())
                                <article @class(['overflow-hidden', 'rounded-2xl', 'bg-white', 'shadow-[0_8px_24px_rgba(0,0,0,0.1)]'])>
                                    <a href="{{ route('noticias.show', $noticiaPrincipal) }}" @class(['group', 'block'])>
                                        <div @class(['relative', 'h-80', 'overflow-hidden', 'sm:h-96'])>
                                            <img src="{{ $noticiaPrincipal->imagen_url }}" alt="{{ $noticiaPrincipal->titulo }}" loading="lazy" @class(['h-full', 'w-full', 'object-cover', 'transition', 'duration-500', 'group-hover:scale-105'])>
                                            <div @class(['absolute', 'inset-x-0', 'bottom-0', 'bg-gradient-to-t', 'from-black/80', 'to-transparent', 'px-5', 'pb-5', 'pt-20'])><h3 @class(['text-xl', 'font-bold', 'leading-tight', 'text-white'])>{{ $noticiaPrincipal->titulo }}</h3></div>
                                        </div>
                                    </a>
                                    <div @class(['p-5'])>
                                        <p @class(['line-clamp-3', 'text-sm', 'leading-relaxed', 'text-slate-600'])>{{ \Illuminate\Support\Str::limit(strip_tags($noticiaPrincipal->resumen ?? $noticiaPrincipal->contenido), 150) }}</p>
                                        <a href="{{ route('noticias.show', $noticiaPrincipal) }}" @class(['mt-4', 'inline-flex', 'items-center', 'gap-2', 'font-bold', 'text-[#008f4c]', 'hover:text-[#006b3d]'])>Leer noticia <span aria-hidden="true">&rarr;</span></a>
                                    </div>
                                </article>
                            @endif
                        </div>
                        <div>
                            <div @class(['mb-5', 'flex', 'items-center', 'gap-3'])><h2 @class(['shrink-0', 'text-2xl', 'font-bold', 'text-[#003b91]', 'sm:text-3xl'])>En Redes</h2><span @class(['h-px', 'w-full', 'bg-[#003b91]']) aria-hidden="true"></span></div>
                            <article @class(['overflow-hidden', 'rounded-2xl', 'bg-white', 'shadow-[0_8px_24px_rgba(0,0,0,0.1)]'])>
                                <div @class(['relative', 'h-32', 'overflow-hidden'])>
                                    <img src="{{ asset('storage/optimized/DSC_0077-scaled.webp') }}" alt="Hospital del Rosario" loading="lazy" @class(['h-full', 'w-full', 'object-cover'])>
                                    <span @class(['absolute', 'right-4', 'top-4', 'flex', 'h-9', 'w-9', 'items-center', 'justify-center', 'rounded-full', 'bg-[#1877f2]', 'text-xl', 'font-bold', 'text-white']) aria-label="Facebook">f</span>
                                </div>
                                <div @class(['relative', '-mt-8', 'mx-4', 'rounded-t-2xl', 'bg-white', 'px-4', 'pt-4'])>
                                    <div @class(['flex', 'items-center', 'gap-3'])>
                                        <img src="{{ asset('storage/logohospital.webp') }}" alt="" @class(['h-14', 'w-14', 'rounded-full', 'border-4', 'border-white', 'bg-[#312783]', 'object-contain', 'shadow'])>
                                        <div>
                                            <h3 @class(['text-base', 'font-bold', 'leading-tight', 'text-slate-950'])>Hospital del Rosario</h3>
                                            <p @class(['text-xs', 'text-slate-500'])>Publicaciones recientes</p>
                                        </div>
                                    </div>
                                </div>
                                <div @class(['divide-y', 'divide-slate-200'])>
                                    @forelse($publicacionesFacebook as $publicacion)
                                        <a href="{{ $publicacion['url'] }}" target="_blank" rel="noopener noreferrer" @class(['block', 'p-5', 'transition', 'hover:bg-slate-50'])>
                                            @if($publicacion['image'])
                                                <img src="{{ $publicacion['image'] }}" alt="" loading="lazy" @class(['mb-3', 'h-36', 'w-full', 'rounded-lg', 'object-cover'])>
                                            @endif
                                            <p @class(['line-clamp-3', 'text-sm', 'leading-relaxed', 'text-slate-700'])>{{ \Illuminate\Support\Str::limit($publicacion['message'], 180) }}</p>
                                            <span @class(['mt-3', 'block', 'text-xs', 'font-bold', 'text-[#1877f2]'])>Ver publicación en Facebook &rarr;</span>
                                        </a>
                                    @empty
                                        <div @class(['p-5'])>
                                            <p @class(['text-sm', 'leading-relaxed', 'text-slate-600'])>Las publicaciones recientes aparecerán aquí.</p>
                                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" @class(['mt-5', 'flex', 'items-center', 'justify-center', 'gap-2', 'rounded-lg', 'bg-[#1877f2]', 'px-4', 'py-3', 'font-bold', 'text-white', 'transition', 'hover:bg-[#0d65d9]'])>
                                                <span aria-hidden="true">f</span> Visitar Facebook
                                            </a>
                                        </div>
                                    @endforelse
                                </div>
                            </article>
                        </div>
                        <div>
                            <div @class(['mb-5', 'flex', 'items-center', 'gap-3'])><h2 @class(['shrink-0', 'text-2xl', 'font-bold', 'text-[#003b91]', 'sm:text-3xl'])>Infografías</h2><span @class(['h-px', 'w-full', 'bg-[#003b91]']) aria-hidden="true"></span></div>
                            <a href="{{ $noticias->isNotEmpty() ? route('noticias.show', $noticias->first()) : route('noticias.index') }}" @class(['group', 'relative', 'block', 'overflow-hidden', 'rounded-2xl', 'bg-white', 'shadow-[0_8px_24px_rgba(0,0,0,0.1)]'])><div @class(['relative', 'h-[30rem]', 'overflow-hidden'])><img src="{{ $noticias->isNotEmpty() ? $noticias->first()->imagen_url : asset('storage/optimized/DSC_1001-scaled.webp') }}" alt="Información de salud del Hospital del Rosario" loading="lazy" @class(['h-full', 'w-full', 'object-cover', 'transition', 'duration-500', 'group-hover:scale-105'])><div @class(['absolute', 'inset-x-0', 'bottom-0', 'bg-gradient-to-t', 'from-[#003b91]/90', 'to-transparent', 'px-5', 'pb-6', 'pt-24'])><p @class(['text-lg', 'font-bold', 'text-white'])>Información para cuidar tu salud</p><span @class(['mt-2', 'inline-flex', 'items-center', 'gap-2', 'text-sm', 'font-bold', 'text-white'])>Ver más <span aria-hidden="true">&rarr;</span></span></div></div></a>
                        </div>
                    </div>
                </div>
            </section>

            <section @class(['hidden', 'bg-[#dcefe0]', 'px-4', 'py-12', 'sm:px-8', 'sm:py-16'])>

                <div @class(['mx-auto', 'max-w-7xl'])>
            <div @class(['max-w-2xl'])>
                <h1 @class(['text-4xl', 'font-black', 'text-[#008f4c]', 'sm:text-5xl'])>
                    Noticias
                </h1>
                <p @class(['mt-3', 'text-sm', 'leading-relaxed', 'text-slate-800', 'sm:text-base'])>
                    Todas las novedades de nuestro hospital.
                </p>
            </div>

            @if($noticias->isEmpty())
                <p @class(['mt-10', 'text-center', 'text-slate-600'])>
                    Aún no hay noticias publicadas.
                </p>
            @else
                <div @class(['mt-10', 'grid', 'grid-cols-1', 'gap-6', 'sm:grid-cols-2', 'lg:grid-cols-3', 'sm:gap-7'])>
                    @foreach($noticias as $noticia)
                        <article
                            @class(['flex', 'flex-col', 'overflow-hidden', 'rounded-3xl', 'bg-white', 'shadow-[0_8px_24px_rgba(0,0,0,0.08)]', 'transition', 'hover:-translate-y-1', 'hover:shadow-[0_12px_32px_rgba(0,0,0,0.12)]'])
                        >
                            <div @class(['p-3'])>
                                <img
                                    src="{{ $noticia->imagen_url }}"
                                    alt="{{ $noticia->titulo }}"
                                    loading="lazy"
                                    @class(['h-52', 'w-full', 'rounded-2xl', 'object-cover'])
                                >
                            </div>

                            <div @class(['flex', 'flex-1', 'flex-col', 'px-6', 'pb-6'])>
                                <h2 @class(['text-lg', 'font-bold', 'leading-snug', 'text-slate-950'])>
                                    {{ $noticia->titulo }}
                                </h2>

                                <p @class(['mt-3', 'line-clamp-3', 'text-sm', 'leading-relaxed', 'text-[#5aa06f]'])>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($noticia->resumen ?? $noticia->contenido), 140) }}
                                </p>

                                <a
                                    href="{{ route('noticias.show', $noticia) }}"
                                    @class(['mt-6', 'flex', 'items-center', 'justify-center', 'gap-2', 'rounded-lg', 'bg-[#008f4c]', 'px-4', 'py-3', 'text-sm', 'font-bold', 'text-white', 'transition', 'hover:bg-[#006b3d]'])
                                >
                                    Leer más <span aria-hidden="true">&rarr;</span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

            @endif
        </div>
            </section>

            @include('partials.sitios-relacionados')

        </main>

        @include('partials.footer')
    </body>
</html>
