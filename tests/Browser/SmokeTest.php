<?php

it('serve various pages without errors', function () {
    $response = visit(['/', '/docs/editor-setup', '/docs/installation']);

    $response->assertNoSmoke();
});
