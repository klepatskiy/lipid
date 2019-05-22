<?php

/**
 * Object MVC Example app
 *
 * @author Alexandr Gorlov <a.gorlov@gmail.com>
 */

require_once '../vendor/autoload.php';

use AG\WebApp\App\ApplicationStd;
use AG\WebApp\Response\RespStd;
use ExampleApp\ActIndexTwig;
use ExampleApp\ActLogin;
use ExampleApp\ActLogout;
use ExampleApp\ActLk;

(new ApplicationStd(
    [
        '/' => new ActIndexTwig(),
        '/login' => new ActLogin(),
        '/logout' => new ActLogout(),
        '/lk' => new ActLk(),
    ],
    new RespStd
))->start();