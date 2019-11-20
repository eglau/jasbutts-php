<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

echo $m->render("about", array('title' => 'About'));

?>
