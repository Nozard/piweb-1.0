<?php


require_once(__DIR__. '/vendor/autoload.php');

use Joker\Piweb\Api\Create;
use Joker\Piweb\Config\Connection;
use Joker\Piweb\Employee;

$employee = new Employee ('Alan','5845212','20202020');
$create = new Create;
$con = new Connection;

var_dump($con->getCon());
var_dump($employee);
var_dump($create);
