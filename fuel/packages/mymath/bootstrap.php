<?php
// Add as core namespace (add package namespace to global)
\Autoloader::add_core_namespace('Mymath');

// And add the classes, this is usefull for:
// - optimization: no path searching is necessary
// - it's required to be able to use as a core namespace
// - if you want to break the autoloader's path search rules
\Autoloader::add_classes(array(
	'mymath\\BasicOperator' => __DIR__.'/classes/basicOperator.php',
    'mymath\\View' => __DIR__.'/classes/view.php',
));
