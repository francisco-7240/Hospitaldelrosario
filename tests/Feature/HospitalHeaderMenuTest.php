<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->withoutVite();
});

test('the header links to the wordpress portal pages', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee(url('/portal/portafolio-de-servicios/'), false)
        ->assertSee(url('/portal/transparencia-y-acceso-a-informacion-publica/'), false)
        ->assertSee(url('/portal/participa/'), false)
        ->assertSee(url('/portal/wpbc-booking/'), false);
});

test('the header links news to the laravel route', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee(route('noticias.index'), false);
});

test('every configured menu link resolves to an absolute or portal url', function () {
    $links = collect(config('menu.top'))
        ->merge(config('menu.main'))
        ->flatMap(fn (array $group): array => [$group, ...$group['items']])
        ->push(config('menu.appointments'), config('menu.book_appointment'));

    $links->each(function (array $link): void {
        expect(isset($link['route']) xor isset($link['url']))->toBeTrue();

        if (isset($link['url'])) {
            expect($link['url'])->toMatch('/^(\/portal\/|https:\/\/|#)/');
        }
    });
});
