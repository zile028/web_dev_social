<?php

define("GENDERS", ["Male", "Female"]);
define("POST_VISIBILITY", ["Public", "Private", "Friend"]);

define("UPLOAD_DIR", "upload");


function dd($arg)
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function vd($arg)
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
}

function redirect($page)
{
    header("Location: $page");
}

function getExcerpt($str, $maxLength = 20)
{
    $excerpt = explode(" ", $str);
    $excerpt = implode(" ", array_slice($excerpt, 0, $maxLength));
    return $excerpt;
}

function displayDateTime($arg)
{
    return date("d.m.Y H:i", strtotime($arg));
}