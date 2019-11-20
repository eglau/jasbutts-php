<?php

require($_SERVER['DOCUMENT_ROOT'] . '/_vendor/autoload.php');
Mustache_Autoloader::register();

$views = $_SERVER['DOCUMENT_ROOT'] . '/_views';
$opts = array('extension' => '.html');
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($views, $opts)
));

?>
