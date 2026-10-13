<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menús del sitio
    |--------------------------------------------------------------------------
    |
    | Enlaces del encabezado. Cada enlace usa "url" (ruta relativa del portal
    | WordPress, URL externa o ancla) o "route" (nombre de una ruta de
    | Laravel). Cuando una página del portal se migre a Laravel, basta con
    | cambiar su "url" por el "route" correspondiente.
    |
    */

    'top' => [
        [
            'label' => 'Transparencia y Acceso a la Información Pública',
            'url' => '/portal/transparencia-y-acceso-a-informacion-publica/',
            'items' => [
                ['label' => 'Transparencia y Acceso a la Información', 'url' => '/portal/transparencia-y-acceso-a-informacion-publica/'],
                ['label' => 'Instrumentos de Gestión de la Información', 'url' => '/portal/9-1-instrumentos-de-gestion-de-la-informacion/'],
                ['label' => 'Información Clasificada y Reservada', 'url' => '/portal/instrumentos-de-gestion-de-informacion-publica/10-3-indice-de-informacion-clasificada-y-reservada/'],
                ['label' => 'Información Pública y/o Relevante', 'url' => '/portal/4-6-informacion-publica-y-o-relevante/'],
                ['label' => 'Contratación SECOP II', 'url' => '/portal/contratacion-secop-ii/'],
                ['label' => 'Mapa del Sitio', 'url' => '/portal/mapa-del-sitio/'],
            ],
        ],
        [
            'label' => 'Atención y servicios a la ciudadanía',
            'url' => '/portal/13-2-canales-de-atencion-y-pida-una-cita/',
            'items' => [
                ['label' => 'Canales de Atención y Pida una Cita', 'url' => '/portal/13-2-canales-de-atencion-y-pida-una-cita/'],
                ['label' => 'Trámites y Consultas', 'url' => '/portal/11-1-tramites-otros-procedimientos-administrativos-y-consultas-de-acceso-a-informacion-publica/'],
                ['label' => 'Solicitud de Historia Clínica', 'url' => '/portal/tramites-y-servicios/formulario-solicitud-historia-clinica-2/'],
                ['label' => 'Manual de Atención al Usuario', 'url' => '/portal/manual-de-atencion-al-usuario/'],
                ['label' => 'Notificación por Aviso', 'url' => '/portal/notificacion-por-aviso/'],
                ['label' => 'Encuesta de Satisfacción', 'url' => 'https://forms.office.com/pages/responsepage.aspx?id=WywdQr8mLUGiuBHEZtCwQmdS9duyRapMuPuSj_b-y_JUQlRJNTMzVTdNTVEyODIwRDBCTk03VVgxVC4u'],
            ],
        ],
        [
            'label' => 'Participa',
            'url' => '/portal/participa/',
            'items' => [
                ['label' => 'Descripción General', 'url' => '/portal/a-descripcion-general-del-menu-participa/'],
                ['label' => 'Participación Ciudadana PPSS', 'url' => '/portal/participacion-ciudadana-ppss/'],
                ['label' => 'Consulta Ciudadana', 'url' => '/portal/consulta-ciudadana/'],
                ['label' => 'Colaboración e Innovación', 'url' => '/portal/colaboracion-e-innovacion/'],
                ['label' => 'Control Social', 'url' => '/portal/6-2-6-control-social/'],
            ],
        ],
    ],

    'main' => [
        [
            'label' => 'Entidad',
            'url' => '/portal/propositos/',
            'items' => [
                ['label' => 'Propósitos', 'url' => '/portal/propositos/'],
                ['label' => 'Valores Institucionales', 'url' => '/portal/valores-institucionales/'],
                ['label' => 'Código de Integridad', 'url' => '/portal/codigo-de-integridad/'],
                ['label' => 'Comité de Ética', 'url' => '/portal/comite-de-etica/'],
                ['label' => 'Planes Institucionales', 'url' => '/portal/otros-planes-institucionales/'],
                ['label' => 'Gestión Ambiental', 'url' => '/portal/gestion-ambiental/'],
                ['label' => 'Entes de Control', 'url' => '/portal/mecanismos-de-control/1-13-entes-de-control-que-vigilan-la-entidad-2/'],
            ],
        ],
        [
            'label' => 'Servicios',
            'url' => '/portal/portafolio-de-servicios/',
            'items' => [
                ['label' => 'Portafolio de Servicios', 'url' => '/portal/portafolio-de-servicios/'],
                ['label' => 'Modelo de Atención en Salud', 'url' => '/portal/modelo-de-atencion-en-salud/'],
                ['label' => 'Atención con Enfoque Diferencial', 'url' => '/portal/protocolo-de-atencion-con-enfoque-diferencial/'],
                ['label' => 'Educación al Paciente y su Familia', 'url' => '/portal/educacion-al-paciente-y-su-familia/'],
                ['label' => 'Recomendaciones Para Una Atención Segura', 'url' => '/portal/recomendaciones-para-una-atencion-segura/'],
                ['label' => 'Alerta Sanitaria Medicamentos', 'url' => '/portal/alerta-sanitaria-medicamentos/'],
            ],
        ],
        [
            'label' => 'Normatividad',
            'url' => '/portal/2-3-1-proyectos-normativos/',
            'items' => [
                ['label' => 'Proyectos Normativos', 'url' => '/portal/2-3-1-proyectos-normativos/'],
                ['label' => 'Agenda Regulatoria', 'url' => '/portal/2-1-6-agenda-regulatoria/'],
                ['label' => 'Comentarios y Respuestas', 'url' => '/portal/2-3-2-comentarios-y-documentos-de-respuesta-a-comentarios/'],
                ['label' => 'Resolución 2063 de 2017', 'url' => '/portal/resolucion-2063-de-2017/'],
                ['label' => 'Política de Gestión Documental', 'url' => '/portal/politica-de-gestion-documental-2/'],
                ['label' => 'Glosario', 'url' => '/portal/2-5-glosary/'],
            ],
        ],
        [
            'label' => 'Rendición de Cuentas',
            'url' => '/portal/6-2-5-rendicion-de-cuentas/',
            'items' => [
                ['label' => 'Informes de Gestión', 'url' => '/portal/mecanismos-de-control/4-7-1-informes-de-gestion/'],
                ['label' => 'Rendición de Cuentas a la Ciudadanía', 'url' => '/portal/mecanismos-de-control/4-7-3-informe-de-rendicion-de-cuentas-a-la-ciudadania/'],
                ['label' => 'Planes de Mejoramiento', 'url' => '/portal/mecanismos-de-control/4-7-5-planes-de-mejoramiento/'],
                ['label' => 'Presupuesto General', 'url' => '/portal/presupuesto-2/4-1-resupuesto-general-de-ingresos-gastos-e-inversion/'],
                ['label' => 'Ejecución Presupuestal', 'url' => '/portal/presupuesto-2/4-2-ejecucion-presupuestal/'],
            ],
        ],
        [
            'label' => 'Prensa',
            'route' => 'noticias.index',
            'items' => [
                ['label' => 'Noticias', 'route' => 'noticias.index'],
                ['label' => 'Galería', 'url' => '#galeria'],
            ],
        ],
    ],

    'appointments' => ['label' => 'Citas Médicas', 'url' => '/portal/13-2-canales-de-atencion-y-pida-una-cita/'],

    'book_appointment' => ['label' => 'Agendar cita', 'url' => '/portal/wpbc-booking/'],

];
