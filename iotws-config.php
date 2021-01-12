<?php
/**
 * The base configuration for your IoT Webserver
 *
 * The iotws-config.php creation script uses this file during the
 * installation. 
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @documentation: __________ (pending)
 *
 * @package IoTws
 */

// ** MySQL settings - You can get this info from your web host or if you have set up the server yourself ** //
/** The name of the database for your IoT Webserver*/
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USERNAME', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOSTNAME', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**
 * IoT Webserver Database Table prefix.
 * Add any prefix, so that noone can guess the name of your database tables.
 * This prefix will be added to standard IoTws tablenames, since the standard names are open-source.  
 * Only numbers, letters, and underscores please!
 */
$table_prefix = 'iotws_';


/** Absolute path to the IoTws directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'iotws-settings.php';
