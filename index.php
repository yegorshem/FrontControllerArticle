<?php
/**
 * User: Yegor Shemereko
 * Date: 11/30/2016
 * Time: 5:28 PM
 */

error_reporting(E_ALL);

//load auto-loader
require('vendor/autoload.php');

$f3 = require('vendor/bcosca/fatfree-core/base.php');

//create routes
$f3->route('GET /', function($f3) {
    $controller = new HomeController($f3);
    $controller->viewHome();
});

//turn on more verbose error handling through router
$f3->set('DEBUG', 3);
$f3->set('ONERROR', function ($f3) {
    echo 'Error text ' . $f3->get('ERROR.text') . '<br>';
    echo 'Error trace ' . $f3->get('ERROR.trace') . '<br>';

});

$f3->run();
