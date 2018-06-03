<?php
$routes = [
    'default' => "./pages/main.php",
    'gallery' => "./pages/gallery.php",
    'about' => "./pages/about.php",
    'article' => "pages/article.php"
];
$page = @$_GET["page"];
include "components/header.php";

if (empty($page)) include $routes['default'];
else {
    if(isset($routes[$page])) include $routes[$page];
    else echo "404";
}

include "components/footer.php";