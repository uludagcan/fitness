
<?php

ini_set( "display_errors", true );

date_default_timezone_set( "Europe/Dublin" );

define( "DB_DSN", "mysql:host=localhost;dbname=fitness" );
#store your usename mine is default you should change for a live website
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );

define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );

define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );

require( CLASS_PATH . "/testimonial.php" );
require( CLASS_PATH . "/class.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

#set handleException() as the exception handler by calling PHP’s set_exception_handler() function.
 set_exception_handler( 'handleException' );

?>






