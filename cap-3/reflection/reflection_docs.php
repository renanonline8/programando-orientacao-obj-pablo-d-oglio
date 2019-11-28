<?php
$classes = spl_classes();

foreach ($classes as $classe) {
    $rc = new ReflectionClass($classe);
    print $classe . PHP_EOL;

    foreach ($rc->getMethods() as $method) {
        print '   ' . $method->getName();

        print '(';
        $parameters = array();
        $parameters = $method->getParameters();
        if (count($parameters) > 0) {
            foreach ($parameters as $parameter) {
                if ($parameter->isOptional()) {
                    $paramNames[] = '[' . $parameter->getName() . ']';
                } else {
                    $paramNames[] = '[' . $parameter->getName();
                }
            }
        }
        print implode(', ', $paramNames);
        print ')';
        print PHP_EOL;
    }
}