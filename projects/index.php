<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

$pswp = array(
    array(
        'src' => '/projects/gallery/TOTH-pin-2018.jpg',
        'w' => 1000,
        'h' => 662
    ),
    array(
        'src' => '/projects/gallery/TOTH-shirt-2018.jpg',
        'w' => 1000,
        'h' => 662
    ),
    array(
        'src' => '/projects/gallery/TOTH-pin-2017.jpg',
        'w' => 1000,
        'h' => 662
    ),
    array(
        'src' => '/projects/gallery/TOTH-shirt-2017.jpg',
        'w' => 1000,
        'h' => 662
    ),
    array(
        'src' => '/projects/gallery/TOTH-pin-2016.jpg',
        'w' => 1000,
        'h' => 662
    ),
    array(
        'src' => '/projects/gallery/TOTH-shirt-2016.jpg',
        'w' => 1000,
        'h' => 662
    ),
    array(
        'src' => '/projects/gallery/tftv1.jpg',
        'w' => 1730,
        'h' => 2160
    ),
    array(
        'src' => '/projects/gallery/tftv2.jpg',
        'w' => 1730,
        'h' => 2160
    ),
    array(
        'src' => '/projects/gallery/emote.jpg',
        'w' => 1000,
        'h' => 827
    ),
    array(
        'src' => '/projects/gallery/violet1.jpg',
        'w' => 2550,
        'h' => 1650
    ),
    array(
        'src' => '/projects/gallery/violet2.jpg',
        'w' => 2550,
        'h' => 1650
    ),
    array(
        'src' => '/projects/gallery/violet3.jpg',
        'w' => 2550,
        'h' => 1650
    ),
    array(
        'src' => '/projects/gallery/violet4.jpg',
        'w' => 2550,
        'h' => 1650
    ),
    array(
        'src' => '/projects/gallery/hell-on-earth.jpg',
        'w' => 2550,
        'h' => 1650
    )
);

$pswp = json_encode($pswp, JSON_UNESCAPED_SLASHES);
echo $m->render("projects", array('title' => 'Projects', 'pswp' => $pswp));

?>
