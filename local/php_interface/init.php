<?php
if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

// Константы + Env
if (file_exists('local/php_interface/include/const.php')) {
    require_once('local/php_interface/include/const.php');
}