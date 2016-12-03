<?php
/* Main File setting things up */
/* further actions taken by controller */
require 'vendor/autoload.php';
include 'core/bootstrap.php';
use App\Core\Router;
use App\Core\Request;
Router::load_routers('app/routes.php')
				->direct(Request::uri(),Request::method_type());