<?php
declare(strict_types=1);
error_reporting(-1);

//session_start();

//$start = microtime(true);
//printf('Затрачено %.4F сек.', microtime(true) - $start);

require_once __DIR__ . '/vendor/autoload.php';

function dump($data, $name = 'DUMP'): void
{
    echo "<pre>{$name}<br>"; var_dump($data); echo "<hr></pre>";
}
