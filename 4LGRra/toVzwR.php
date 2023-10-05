<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        echo 'This is the home page.';
        break;
    case '/about':
        echo 'This is the about page.';
        break;
    case '/contact':
        echo 'This is the contact page.';
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo '404 - Page not found';
        break;
}
