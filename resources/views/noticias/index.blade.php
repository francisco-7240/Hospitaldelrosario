<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')

        <title>Noticias | {{ config('app.name', 'Hospital del Rosario') }}</title>
    </head>
    <body class="min-h-screen bg-white text-dark">
        @include('partials.hospital-header')

        <main>
            <section @class(['bg-[#dcefe0]', 'px-4', 'py-12', 'sm:px-8', 'sm:py-16'])>
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

                <div @class(['mt-10'])>
                    {{ $noticias->links() }}
                </div>
            @endif
        </div>
            </section>
        </main>

        @include('partials.footer')
    </body>
</html>
