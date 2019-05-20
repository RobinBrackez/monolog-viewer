<?php
use Jtclark\MonologViewer;

date_default_timezone_set('UTC');
require(__DIR__ . '/vendor/autoload.php');
$viewer = new MonologViewer([
    'user' => 'user',
    'pass' => 'abc123',
    'path' => __DIR__ . '/sample.log',
    //'template' => 'log.twig'
]);

$viewer->authenticate();

$viewer->render(
    isset($_GET['lines']) ? $_GET['lines'] : 100,
    isset($_GET['filter']) ? $_GET['filter'] : null,
    isset($_GET['sc']) ? $_GET['sc'] : null,
    isset($_GET['q']) ? $_GET['q'] : null
);


// render last 100 log entries
//$viewer->render(100);

// render last 100 error log entries
//$viewer->render(100, 'error');

// render last 100 log entries with support code 763b463
//$viewer->render(100, null, '763b463');

// render last 100 log entries with search keyword POST
//$viewer->render(100, null, null, 'POST');