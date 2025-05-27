<?php
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');

use App\Route;
use App\Controller\FrontController;
use Illuminate\Database\Capsule\Manager as Capsule;

$config = require __DIR__.'/config/database.php';
$capsule = new Capsule;
$capsule->addConnection($config);
// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();
// Setup the Eloquent ORM
$capsule->bootEloquent();

// $users = Capsule::table('users')->where('id', '>', 1)->get();
// var_dump($users);
// exit();

$route = new Route();
$route->addRoute("GET","/WebProgramming/",[FrontController::class, 'home']);
$route->addRoute("GET",'/WebProgramming/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/WebProgramming/infs',[FrontController::class, 'infs']);
$route->dispatch();

?>