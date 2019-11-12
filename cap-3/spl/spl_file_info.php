<?php
$file = new SplFileInfo('spl_file_info.php');
print "Nome: {$file->getFileName()} \n";
print "Extensão: {$file->getExtension()} \n";
//print "Tamanho: {$file->getSize()} \n";
print "Caminho: {$file->getRealPath()} \n";
//print "Tipo: {$file->getType()} \n";
print "Gravação: {$file->isWritable()} \n";