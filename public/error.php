<!DOCTYPE html>

<?php
include_once __DIR__ . '/../src/classes/Basics.php';
include_once __DIR__ . '/../src/classes/Locales.php';

use imastarcitizen\Basics;
use imastarcitizen\Locales;

$basics = new Basics();
$locales = new Locales();

$locale = $locales->getLocale();
$error = $basics->errorCode()
?>

<html lang="<?= $locale['LOCALE_CODE'] ?>">

<head>
    <title><?= $error[0] ?></title>
    <?php include_once __DIR__ . '/../src/templates/components/head.php' ?>
</head>

<body>
<main class="shadow">
    <header>
        <a href="/"><img id="header" height="205px" src="/assets/img/header/header_bg.jpg" width="980px"></a>
        <?= $locale['HEADER_LOCALE'] ?>
    </header>
    <nav>
        <?php include __DIR__ . '/../src/templates/components/nav.php' ?>
    </nav>
    <section>
        <h1><?= $error[0] ?></h1>
        <div>
            <p style='text-align: center'><?= $error[1] ?></p>
        </div>
        <a href="#" class="back_to_top">Top</a>
    </section>
</main>
<footer class="footer-distributed">
    <?php include_once __DIR__ . '/../src/templates/components/footer.php' ?>
</footer>
</body>

</html>