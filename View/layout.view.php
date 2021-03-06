<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 07/11/2018
 * Time: 21:20
 */

global $content;
$vheader  = new VHeader();
$vpages   = new VPages();
$vform    = new VForm();
$vcontent = new $content['class']();
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
<!--        <meta http-equiv="content-type" content="text/html" />-->
        <meta name="viewport" content="width=device-width" />

        <title><?=$content['title'];?></title>

        <link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">

    </head>
    <body>
    <header>
        <?=$vheader->showHeader()?>
    </header>
    <main id="content">
        <?php $vcontent->{$content['method']}($content['arg']);?>
    </main>
<footer>
    <?php
        $vform->showFormContact();
        $vform->showFormConnect();
    ?>
</footer>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/what-input/dist/what-input.js"></script>
    <script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
    <script src="../js/foundation.min.js"></script>

    <script src="../js/app.js"></script>
    <script src="../js/app2.js"></script>

    <script src="../js/form-floating-label.js"></script>
    <script src="../js/floated-label-wrapper.js"></script>

    <script src="../js/foundation.tabs.js"></script>
        <noscript>Votre navigateur n'accepte pas Javascript. Pour une expérience optimale, il est fortement conseillé d'activer cette option.</noscript>
    </body>
</html>
