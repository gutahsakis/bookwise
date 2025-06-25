<?php
// server.php (roteador para o servidor embutido)
if (php_sapi_name() == 'cli-server') {
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $fullPath = __DIR__ . $path;

    if ($path !== '/' && file_exists($fullPath)) {
        return false; // deixa o PHP servir arquivos estáticos
    } else {
        require_once __DIR__ . '/index.php'; // roteia tudo para index.php
    }
}
