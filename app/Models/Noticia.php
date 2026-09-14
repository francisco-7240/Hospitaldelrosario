<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    // Laravel pluraliza "Noticia" como "noticias" con el driver de inglés,
    // así que fijamos la tabla explícitamente para evitar sorpresas.
    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'slug',
        'resumen',
        'contenido',
        'imagen',
        'publicado',
        'fecha_publicacion',
    ];

    protected $casts = [
        'publicado' => 'boolean',
        'fecha_publicacion' => 'datetime',
    ];

    // Genera el slug automáticamente a partir del título si no se pasó uno.
    protected static function booted(): void
    {
        static::saving(function (Noticia $noticia) {
            if (empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->titulo);
            }
        });
    }

    // Usar el slug en las URLs en lugar del id.
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // URL pública lista para usar en <img src="...">
    public function getImagenUrlAttribute(): string
    {
        return $this->imagen
            ? asset('storage/' . $this->imagen)
            : asset('images/noticia-placeholder.jpg');
    }

    // Scope para traer solo publicadas y ordenadas por fecha.
    public function scopePublicadas($query)
    {
        return $query
            ->where('publicado', true)
            ->orderByDesc('fecha_publicacion')
            ->orderByDesc('created_at');
    }
}
