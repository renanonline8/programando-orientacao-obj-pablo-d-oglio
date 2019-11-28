<?php
$classes = spl_classes();

foreach ($classes as $classe) {
    $rc = new ReflectionClass($classe);
    print $classe . '<br />' . PHP_EOL;

    foreach ($rc->getMethods() as $method) {
        print str_repeat('&nbsp;', 4) . $method->getName();

        print '(';
        $paramNames = array();
        $parameters = $method->getParameters();
        if (count($parameters) > 0) {
            foreach ($parameters as $parameter) {
                if ($parameter->isOptional()) {
                    $paramNames[] = '[' . $parameter->getName() . ']';
                } else {
                    $paramNames[] = $parameter->getName();
                }
            }
        }
        print implode(', ', $paramNames);
        print ')';
        print '<br />' . PHP_EOL;
    }
}