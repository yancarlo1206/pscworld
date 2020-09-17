<?php

define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'default');
define('APP_NAME', 'Sistema PSCWORLD');
define('APP_EMAIL', 'contacto@pscworld.co');
define('APP_SLOGAN', 'PSCWORLD');
define('APP_COMPANY', 'www.pscworld.co');
define('SESSION_TIME', 100);
define('HASH_KEY', '4ebz7d533be89');

/*if (in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1'
))) {
	define('BASE_URL', 'http://localhost/mvc_base_2018/');
	define('DB_HOST', 'localhost');
	define('DB_HOST_LOCAL', true);	
}else {
	
	define('BASE_URL', 'http://tksis.com/');
	define('DB_HOST', 'localhost');	
	define('DB_HOST_LOCAL', false);	
}*/
//define('BASE_URL', 'https://wwwtest.pscworld.com/');
define('BASE_URL', 'https://www.pscworld.com/');
// define('BASE_URL', 'http://siaweb.ufps.edu.co/proyectos/pscworld');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'PscWorld20');
define('DB_NAME', 'pscworld_bd');
define('DB_PORT', '3307');
define('DB_CHAR', 'utf8');

?>