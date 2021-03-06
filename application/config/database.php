<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

/* 
 *	connecting to the TMW database
 */

$active_group = 'tmw';
$active_record = TRUE;

$db['tmw']['hostname'] = 'localhost';
$db['tmw']['username'] = 'root';
$db['tmw']['password'] = 'root';
$db['tmw']['database'] = 'dispatchpuppy';
$db['tmw']['dbdriver'] = 'mysql';
$db['tmw']['dbprefix'] = '';
$db['tmw']['pconnect'] = FALSE;
$db['tmw']['db_debug'] = FALSE;
$db['tmw']['cache_on'] = FALSE;
$db['tmw']['cachedir'] = '';
$db['tmw']['char_set'] = 'utf8';
$db['tmw']['dbcollat'] = 'utf8_general_ci';
$db['tmw']['swap_pre'] = '';
$db['tmw']['autoinit'] = TRUE;
$db['tmw']['stricton'] = FALSE; 

/* 
 *	connecting to the MYSQL database
 */

$active_group = 'mysql';
$active_record = TRUE;

$db['mysql']['hostname'] = 'localhost';
$db['mysql']['username'] = 'root';
$db['mysql']['password'] = 'root';
$db['mysql']['database'] = 'dispatchsheets';
$db['mysql']['dbdriver'] = 'mysql';
$db['mysql']['dbprefix'] = '';
$db['mysql']['pconnect'] = TRUE;
$db['mysql']['db_debug'] = FALSE;
$db['mysql']['cache_on'] = FALSE;
$db['mysql']['cachedir'] = '';
$db['mysql']['char_set'] = 'utf8';
$db['mysql']['dbcollat'] = 'utf8_general_ci';
$db['mysql']['swap_pre'] = '';
$db['mysql']['autoinit'] = TRUE;
$db['mysql']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */