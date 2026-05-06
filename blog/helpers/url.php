<?php
    $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($requestPath) . '/';
?>