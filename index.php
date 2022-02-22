<?php
session_start();

$_SESSION['logName'] = null;
$_SESSION['log'] = rand(1,1000);

require_once 'vendor/autoload.php';

use App\classes\Home;


$home = new Home();
$home->index();
