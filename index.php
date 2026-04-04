<?php

$uri = trim(
    str_replace(dirname($_SERVER['SCRIPT_NAME']), '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)),
    '/'
);

require 'function.php';

switch ($uri) {
    case '':
        require 'main.php';
        break;

    case 'contact':
        require 'contact.php';
        break;

	case 'job-vacancy':
        require 'job.php';
        break;

    default:
        http_response_code(404);
        require '404.html';
        break;
}