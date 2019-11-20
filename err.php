<?php

$sc = $_SERVER['REDIRECT_STATUS'];

if ($sc > 399 && $sc < 500) {
    header("Location: /");
}

?>
