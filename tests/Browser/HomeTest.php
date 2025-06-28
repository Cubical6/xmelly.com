<?php

it('pitches pest', function () {
    $response = visit('/');

    $response->assertSee('The elegant PHP testing framework')
        ->assertSee('What makes Pest special…')
        ->assertSee('distraction-free')
        ->assertSee('How does Pest differ from PHPUnit?');
});

it('allows you to get started', function () {
    $response = visit('/');

    $response->click('Get started')
        ->assertPathIs('/docs/installation')
        ->assertSee('Installing Pest PHP Testing Framework is a simple process')
        ->assertSee('composer require pestphp/pest --dev');
});

it('allows you to check the source code', function () {
    $response = visit('/');

    $response->assertSee('Source code');
});
