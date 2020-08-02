<title>#imastarcitizen</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="description" content="#imastarcitizen - All official Star Citizen trading cards">
<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Electrolize|Orbitron:400,500,700|Share+Tech+Mono" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/8119fd0658.js" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>

<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#062736">
<link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">
<meta name="apple-mobile-web-app-title" content="#imastarcitizen">
<meta name="application-name" content="#imastarcitizen">
<meta name="msapplication-TileColor" content="#062736">
<meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
<meta name="theme-color" content="#062736">

<link href="/plugins/fancybox/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css">
<script src="/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/assets/js/back_to_top.js"></script>
<script>
    $(document).ready(function () {
        $('.fancybox').fancybox({
            padding: 0,
            openEffect: "elastic"
        })
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68526906-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-68526906-1');
</script>

<?php
$params = explode('/', $_SERVER['REQUEST_URI']);

if (array_key_exists(1, $params)) {
    $section = $params[1];
} else {
    $section = '';
}
?>