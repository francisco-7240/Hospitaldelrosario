<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    public function run(): void
    {
        $ejemplos = [
            'Celebramos la vida de una mujer que ha dejado una huella invaluable',
            'Jornada de vacunación gratuita este fin de semana',
            'Nuevo servicio de telemedicina disponible para pacientes',
        ];

        foreach ($ejemplos as $i => $titulo) {
            Noticia::create([
                'titulo' => $titulo,
                'resumen' => 'La E.S.E. Hospital del Rosario extiende un especial saludo a nuestra comunidad.',
                'contenido' => "La E.S.E. Hospital del Rosario extiende un especial saludo a nuestra comunidad.\n\nContenido completo de la noticia aquí.",
                'imagen' => null, // usa el placeholder hasta que subas una imagen
                'publicado' => true,
                'fecha_publicacion' => now()->subDays($i),
            ]);
        }
    }
}
