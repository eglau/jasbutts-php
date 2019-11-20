<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

echo $m->render("storyboards", array('title' => 'Storyboards'));

?>
