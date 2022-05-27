<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$config = require "config.php";
$db = $config["db"];
require "utils.php";

require "classes/Connection.php";
require "classes/QueryBuilder.php";
require "classes/User.php";
require "classes/Posts.php";


require "classes/Upload.php";
