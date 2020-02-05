<?php
//entry point into the app

require 'core/Functions.php';
require 'core/Bootstrap.php';



require Router::load('routes/routes.php')->direct(Request::uri());
