<?php
session_start();
header('Cache-control: private');

if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];

    $_SESSION['lang'] = $lang;

    setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'en';
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