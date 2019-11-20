<?php
$path = __DIR__ . '/files';

foreach (new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($path,
        RecursiveDirectoryIterator::SKIP_DOTS)) as $item)
{
    print( (string) $item . PHP_EOL);
}
