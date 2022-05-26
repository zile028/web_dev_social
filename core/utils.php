<?php

define("GENDERS", ["Male", "Female"]);

define("KB", 1024);
define("MB", 1048576);
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
