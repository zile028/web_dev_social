<?php
session_status() === PHP_SESSION_NONE ?: session_start();
$cfg = require "config.php";

require "utils.php";
require "classes/Connection.php";

