<?php
/* lets create routes */
$router->get('php-practicioner/pdo-refactoring', 'Pagescontroller@index');
$router->get('php-practicioner/pdo-refactoring/index.php', 'Pagescontroller@index');
$router->get('php-practicioner/pdo-refactoring/index.php/about', 'Pagescontroller@about');
$router->get('php-practicioner/pdo-refactoring/index.php/contact', 'Pagescontroller@contact');
$router->get('php-practicioner/pdo-refactoring/index.php/users', 'UsersController@index');
$router->post('php-practicioner/pdo-refactoring/index.php/user', 'UsersController@store');