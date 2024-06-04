<?php


session_start();
const PATH_ROOT =__DIR__ .'/';

require 'vendor/autoload.php';


Dotenv\Dotenv::createImmutable(__DIR__)->load();


require_once __DIR__ . '/routes/index.php';
