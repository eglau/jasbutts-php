<?php

require($_SERVER['DOCUMENT_ROOT'] . '/mustache.php');

$pathToImages = $_SERVER['DOCUMENT_ROOT'] . '/photography-editing/gallery';
$thumbs = glob($pathToImages . "/*-tn.jpg");

$index = 0;
$gallery = array();
$pswp = array();
foreach ($thumbs as $thumbpath) {
    $imagepath = str_replace('-tn.jpg', '.jpg', $thumbpath);
    if (file_exists($imagepath)) {
        $thumb = str_replace($_SERVER['DOCUMENT_ROOT'], '', $thumbpath);
        array_push($gallery, array(
            'index' => $index,
            'name' => $thumb
        ));
        $index++;

        $image = str_replace('-tn.jpg', '.jpg', $thumb);
        list($width, $height) = getimagesize($imagepath);
        array_push($pswp, array(
            'src' => $image,
            'w' => $width,
            'h' => $height
        ));
    }
}

$pswp = json_encode($pswp, JSON_UNESCAPED_SLASHES);
echo $m->render("photography-editing", array('title' => 'Photography & Editing', 'gallery' => $gallery, 'pswp' => $pswp));

?>
