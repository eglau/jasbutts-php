<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

echo $m->render("cv", array("title" => "CV"));

?>
