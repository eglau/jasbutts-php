<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

echo $m->render("homepage", array("title" => "Jasbutts"));

?>
