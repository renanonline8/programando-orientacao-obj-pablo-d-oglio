<?php
foreach (new DirectoryIterator(__DIR__ . '/files') as $file) {
    print (string) $file . PHP_EOL;
    print 'Nome: ' . $file->getFileName() . PHP_EOL;
    print 'Extensão: ' . $file->getExtension() . PHP_EOL;
    print 'Tamanho: ' . $file->getSize() . PHP_EOL;
    print PHP_EOL;
}
