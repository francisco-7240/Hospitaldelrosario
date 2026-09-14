<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')

        <title>{{ $noticia->titulo }} | {{ config('app.name', 'Hospital del Rosario') }}</title>
    </head>
    <body class="min-h-screen bg-white text-dark">
        @include('partials.hospital-header')

        <main>
            <article @class(['bg-white', 'px-4', 'py-12', 'sm:px-8', 'sm:py-16'])>
        <div @class(['mx-auto', 'max-w-3xl'])>
            <a
                href="{{ route('noticias.index') }}"
                @class(['inline-flex', 'items-center', 'gap-2', 'text-sm', 'font-bold', 'text-[#008f4c]', 'transition', 'hover:text-[#006b3d]'])
            >
                <span aria-hidden="true" @class(['text-xl', 'leading-none'])>&larr;</span> Volver a noticias
            </a>

            <h1 @class(['mt-6', 'text-3xl', 'font-black', 'leading-tight', 'text-slate-950', 'sm:text-4xl'])>
                {{ $noticia->titulo }}
            </h1>

            @if($noticia->fecha_publicacion)
                <p @class(['mt-2', 'text-sm', 'text-slate-500'])>
                    {{ $noticia->fecha_publicacion->translatedFormat('d \d\e F \d\e Y') }}
                </p>
            @endif

            @if($noticia->imagen)
                <img
                    src="{{ $noticia->imagen_url }}"
                    alt="{{ $noticia->titulo }}"
                    @class(['mt-6', 'w-full', 'rounded-2xl', 'object-cover'])
                >
            @endif

            <div @class(['prose', 'prose-slate', 'mt-8', 'max-w-none'])>
                {!! nl2br(e($noticia->contenido)) !!}
            </div>
        </div>
            </article>
        </main>

        @include('partials.footer')
    </body>
</html>
