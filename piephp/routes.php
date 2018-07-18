<?php

use Core\Router;

Router::connect('/user/index', ['controller' => 'user', 'action' => 'index']);
Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
// Router::connect('registerconfirm', ['controller' => 'user', 'action' => 'register']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
// Router::connect('loginconfirm', ['controller' => 'user', 'action' => 'login']);
Router::connect('/accueil', ['controller' => 'user', 'action' => 'accueil']);
