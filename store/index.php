<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

echo $m->render('store', array('title' => 'Store'));

?>
