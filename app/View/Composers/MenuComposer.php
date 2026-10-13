<?php

namespace App\View\Composers;

use Illuminate\View\View;

class MenuComposer
{
    public function compose(View $view): void
    {
        $view->with([
            'topMenu' => $this->resolveGroups(config('menu.top', [])),
            'mainMenu' => $this->resolveGroups(config('menu.main', [])),
            'appointmentsLink' => $this->resolveLink(config('menu.appointments')),
            'bookAppointmentLink' => $this->resolveLink(config('menu.book_appointment')),
        ]);
    }

    /**
     * @param  array<int, array{label: string, url?: string, route?: string, items: array<int, array{label: string, url?: string, route?: string}>}>  $groups
     * @return array<int, array{label: string, href: string, items: array<int, array{label: string, href: string}>}>
     */
    private function resolveGroups(array $groups): array
    {
        return array_map(fn (array $group): array => [
            ...$this->resolveLink($group),
            'items' => array_map($this->resolveLink(...), $group['items']),
        ], $groups);
    }

    /**
     * @param  array{label: string, url?: string, route?: string}  $link
     * @return array{label: string, href: string}
     */
    private function resolveLink(array $link): array
    {
        return [
            'label' => $link['label'],
            'href' => isset($link['route']) ? route($link['route']) : url($link['url'] ?? '#'),
        ];
    }
}
