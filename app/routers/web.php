<?php

//Definir controladores
require_once('./iPSOF/controllers/landingPageController.php');
require_once('./iPSOF/controllers/exampleController.php');
require_once('./iPSOF/controllers/errorController.php');

//Definir rutas
Http::get('/', ['controller' => 'LandingPage', 'method' => 'index']);


//Ejemplo
Http::get('/example', ['controller' => 'ExampleController', 'method' => 'index']);
Http::get('/user/:id', ['controller' => 'ExampleController', 'method' => 'getUser']);
Http::post('/post', ['controller' => 'ExampleController', 'method' => 'store']);

