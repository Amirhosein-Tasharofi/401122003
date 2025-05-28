<?php
session_start();
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');

use App\Route;
use App\Controller\FrontController;
use App\Controller\AuthController;
use App\Controller\DashboardController;
use App\Controller\PostController;
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
$route->addRoute("GET",'/WebProgramming/login',[AuthController::class, 'login']);
$route->addRoute("POST",'/WebProgramming/login',[AuthController::class, 'loginuser']);
$route->addRoute("GET",'/WebProgramming/register',[AuthController::class, 'register']);
$route->addRoute("GET",'/WebProgramming/dashboard',[DashboardController::class, 'index']);
$route->addRoute("POST",'/WebProgramming/register',[AuthController::class, 'storeuser']);

// Routes of CRUD for Post Model
$route->addRoute("GET",'/WebProgramming/post',[PostController::class, 'index']);
$route->addRoute("GET",'/WebProgramming/post/show',[PostController::class, 'show']);
$route->addRoute("GET",'/WebProgramming/post/edit',[PostController::class, 'edit']);
$route->addRoute("POST",'/WebProgramming/post/update',[PostController::class, 'update']);
$route->addRoute("GET",'/WebProgramming/post/create',[PostController::class, 'create']);
$route->addRoute("POST",'/WebProgramming/post/create',[PostController::class, 'store']);
//test the relation of database
$route->addRoute("GET",'/WebProgramming/test',function(){


    // $id = $_GET['id'];
    // $user = \App\Model\User::find($id);
    // $posts = $user->posts;
    // var_dump($posts);
    // exit();

    $id = $_GET['id'];
    $post = \App\Model\Post::find($id);
    $user = $post->user;
    var_dump($user);
});

//
$route->dispatch();

?>