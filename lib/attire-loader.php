<?php

/** Loads all add-ons from the /closet/ directory */

$closet = $_SERVER['DOCUMENT_ROOT'] . '/closet/';
$directory = scandir($closet);

foreach($directory as $folder) if($folder != '.' && $folder != '..' && is_dir($closet . $folder)) {

    $path = $closet . $folder;

    $includes = $path . '/includes.php';
    if(file_exists($includes)) {
        include $includes;
    }
}