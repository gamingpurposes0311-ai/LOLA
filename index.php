<?php
$builtIndex = __DIR__ . '/dist/index.html';

if (!is_file($builtIndex)) {
    http_response_code(503);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'The birthday website has not been built yet. Run npm run build in the project folder.';
    exit;
}

readfile($builtIndex);