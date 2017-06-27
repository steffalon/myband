<?php

require 'core/con.php';
require 'core/check_session.php';

if (!empty($_GET['page'])) {
    $url = $_GET['page'];
} else {
    $url = null;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>CarTek - Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dit is een nieuws pagina over auto's. Hier vind je recente auto nieuws die op de markt zijn gekomen.">
    <meta name="keywords" content="Auto's, Nieuws, CarTek">
</head>
<body>
<div id="content">
    <?php
    $templateParser->display('navigation.tpl');
    switch ($url) {
        case 'login':
            require_once ("core/makeLogin.php");
            echo "<link rel=\"stylesheet\" href=\"css/login.css\">";
            $templateParser->display('login.tpl');
            break;
        case 'register':
            echo "<link rel=\"stylesheet\" href=\"css/register.css\">";
            $templateParser->display('register.tpl');
            break;
        case 'article':
            require_once ("core/readNews.php");
            echo "<script src=\"javascript/facebookSDK.js\"></script>";
            echo "<link rel=\"stylesheet\" href=\"css/article.css\">";
            $templateParser->display('article.tpl');
            break;
        case 'dashboard':
            require_once ("core/dashboard.php");
            require_once ("core/saveSettings.php");
            require_once ("core/sendArticle.php");
            require_once ("core/news.php");
            echo "<link rel=\"stylesheet\" href=\"css/dashboard.css\">";
            $templateParser->display('dashboard.tpl');
            break;
        case 'calender':
            echo "<link rel=\"stylesheet\" href=\"css/calender.css\">";
            $templateParser->display('calender.tpl');
            break;
        case 'info':
            echo "<link rel=\"stylesheet\" href=\"css/info.css\">";
            $templateParser->display('info.tpl');
            break;
        default:
            require ("core/news.php");
            echo "<link rel=\"stylesheet\" href=\"css/home.css\">";
            $templateParser->display('home.tpl');
            require ("javascript/search.php");
            break;
    }
    echo "</div>";
    $templateParser->display('footer.tpl');
    ?>
</body>
</html>
