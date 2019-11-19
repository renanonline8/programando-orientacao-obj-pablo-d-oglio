<?php
$file = new SplFileObject(__DIR__ . '/spl_file_info.php');
print 'Nome: ' . $file->getFileName() . '<br>' . PHP_EOL;
print 'Extensão: ' . $file->getExtension() . '<br>' . PHP_EOL;

$file2 = new SplFileObject(__DIR__ . "/novo.txt", "w");
$bytes = $file2->fwrite('Olá Mundo PHP' . PHP_EOL);
print 'Bytes escritos ' . $bytes . PHP_EOL;