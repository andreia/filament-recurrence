<?php

return [
    'fields' => [
        'recurrence' => [
            'label' => 'Recurrencia',
            'start_date' => 'Fecha incial',
            'start_date_time' => 'Fecha y hora iniciales',
            'repeats' => 'Se repite',
            'fused_repeats' => 'Repetir cada',
            'timezone' => 'Zona horaria',
            'interval' => 'Intervalo',
            'repeat_on' => 'Repetir los',
            'repeat_by' => 'Repetición por',
            'day_of_month' => 'Día del mes',
            'day_of_week' => 'Día de la semana',
            'in_months' => 'Los meses',
            'ends' => 'Ends',
            'never' => 'Nunca',
            'on_date' => 'En una fecha',
            'after_occurrences' => 'Tras ocurrencias',
            'end_date' => 'Fecha final',
            'occurrences' => 'Número de ocurrencias',
            'preview' => 'Preview',
            'next_occurrences' => 'Próximas ocurrencias',
            'preview_on_calendar' => 'Previsualizar en el calendario',
            'calendar_modal_close' => 'Cerrar',
        ],
    ],

    'frequencies' => [
        'DAILY' => 'Diaria',
        'WEEKLY' => 'Semanal',
        'MONTHLY' => 'Mensual',
        'YEARLY' => 'Anual',
    ],

    /*
    | Used for the frequency select labels; pluralized from the numeric interval.
    */
    'frequency_units' => [
        'daily' => '{1} día|[2,*] días',
        'weekly' => '{1} semana|[2,*] semanas',
        'monthly' => '{1} mes|[2,*] meses',
        'yearly' => '{1} año|[2,*] años',
    ],

    'intervals' => [
        'days' => 'día(s)',
        'weeks' => 'semana(s)',
        'months' => 'mes(es)',
        'years' => 'año(s)',
    ],

    'weekdays' => [
        'MO' => 'Lunes',
        'TU' => 'Martes',
        'WE' => 'Miércoles',
        'TH' => 'Jueves',
        'FR' => 'Viernes',
        'SA' => 'Sábado',
        'SU' => 'Domingo',
    ],

    /*
    | Single-letter labels for circular weekday toggles (Sunday–Saturday).
    */
    'weekday_letters' => [
        'SU' => 'D',
        'MO' => 'L',
        'TU' => 'M',
        'WE' => 'X',
        'TH' => 'J',
        'FR' => 'V',
        'SA' => 'S',
    ],

    'positions' => [
        '1' => 'Primero',
        '2' => 'Segundo',
        '3' => 'Tercero',
        '4' => 'Cuarto',
        '-1' => 'Último',
    ],

    'months' => [
        '1' => 'Enero',
        '2' => 'Febrero',
        '3' => 'Marzo',
        '4' => 'Abril',
        '5' => 'Mayo',
        '6' => 'Junio',
        '7' => 'Julio',
        '8' => 'Agosto',
        '9' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre',
    ],

    'messages' => [
        'no_recurrence' => 'Sin recurrencia',
        'invalid_recurrence' => 'Patrón de recurrencia inválido',
        'unable_to_preview' => 'No fue posible generar la previsualización',
    ],

    /*
    | Fragments appended to the Recurr pattern in previews (comma-separated).
    */
    'preview' => [
        'repeats' => 'Se repite :pattern',
        'starting_only' => 'empezando :date',
        'until_only' => 'hasta :date',
        'date_range' => 'desde :start hasta :end',
        'for_occurrences' => 'por :count ocurrencias',
        'at_time' => 'a las :time',
    ],
];
