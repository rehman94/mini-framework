<?php
/* lets create routes */
$router->get('', 'Pagescontroller@index');
$router->get('index.php', 'Pagescontroller@index');
$router->get('index.php/about', 'Pagescontroller@about');
$router->get('index.php/contact', 'Pagescontroller@contact');
$router->get('index.php/users', 'UsersController@index');
$router->post('index.php/user', 'UsersController@store');