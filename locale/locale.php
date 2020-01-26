<?php
session_start();
header('Cache-control: private');

$params = explode('/', $_SERVER['REQUEST_URI']);

if (array_key_exists(1, $params)) {
    if ($params[1] === 'en' || $params[1] === 'de') {
        $lang = $params[1];
        $_SESSION['lang'] = $lang;
        setcookie('lang', $lang, time() + (3600 * 24 * 30 * 12), '/');
    } else {
        $lang = $_SESSION['lang'] ?? $_COOKIE['lang'] ?? 'en';
    }
} else {
    $lang = $_SESSION['lang'] ?? $_COOKIE['lang'] ?? 'en';
}

switch ($lang) {
    case 'en':
        $lang_file = 'lang.en.php';
        break;

    case 'de':
        $lang_file = 'lang.de.php';
        break;

    default:
        $lang_file = 'lang.en.php';

}

include_once __DIR__ . '/' . $lang_file;