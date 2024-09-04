<?php

spl_autoload_register(function ($className) {
    $path = $className . '.php';
    require_once $path;
});