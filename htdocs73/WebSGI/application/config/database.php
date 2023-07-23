<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	['dsn']      The full DSN string describe a connection to the database.
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database driver. e.g.: mysqli.
|			Currently supported:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Query Builder class
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
|	['encrypt']  Whether or not to use an encrypted connection.
|
|			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
|			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
|
|				'ssl_key'    - Path to the private key file
|				'ssl_cert'   - Path to the public key certificate file
|				'ssl_ca'     - Path to the certificate authority file
|				'ssl_capath' - Path to a directory containing trusted CA certificats in PEM format
|				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
|				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not ('mysqli' only)
|
|	['compress'] Whether or not to use client compression (MySQL only)
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
| 				NOTE: Disabling this will also effectively disable both
| 				$this->db->last_query() and profiling of DB queries.
| 				When you run a query, with this setting set to TRUE (default),
| 				CodeIgniter will store the SQL statement for debugging purposes.
| 				However, this may cause high memory usage, especially if you run
| 				a lot of SQL queries ... disable this to avoid that problem.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $query_builder variables lets you determine whether or not to load
| the query builder class.
*/
$active_group = 'default0';
$query_builder = TRUE;

// TODO: Cambiar de Base de Datos LOCAL a Hosting

$db['default'] = array(
	'dsn'	=> '',
	
//        'hostname' => 'localhost',
//	'username' => 'root',
//	'password' => '',
//	'database' => 'aulascursosya',
/*   
	'hostname' => 'localhost',
	'username' => 'jaqconsu_aulasya',
	'password' => 'password2017',
	'database' => 'jaqconsu_aulasya',
*/

/*
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'password2017',
	'database' => 'aulascur_de2',
*/

    
   'hostname' => 'localhost',
	'username' => 'aulascur_de2',
	'password' => 'aulascur_de2',
	'database' => 'aulascur_de2',


   	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['default0'] = array(
    'dsn'	=> 'datacli',
    'hostname' => '',
    'username' => '',
    'password' => '',
    'database' => '',
    'pconnect' => TRUE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'dbdriver' => 'odbc',
//    'char_set' => 'utf8',
//    'dbcollat' => 'utf8_general_ci',
    'save_queries' => TRUE
);


$db['default1'] = array(
    'dsn'	=> 'odbc_sqlserver',
	 'hostname' => 'localhost',
	 'username' => 'sa',
	 'password' => 'password2017',
	 'database' => 'Trodu',
	 'pconnect' => TRUE,
	 'db_debug' => TRUE,
	 'cache_on' => FALSE,
    'dbdriver' => 'odbc',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'save_queries' => TRUE
);


$db['default2'] = array(
    'dsn'	=> 'aulascur_sosya',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'password2017',
    'database' => 'Trodu',
    'pconnect' => TRUE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'dbdriver' => 'odbc',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'save_queries' => TRUE
);


$db['default3']['hostname'] = '192.168.XX.XX'; //el ip o nombre del Servidor SQL
$db['default3']['username'] = 'sa';
$db['default3']['password'] = 'tupassword';
$db['default3']['database'] = 'tu_DB';
$db['default3']['dbdriver'] = 'sqlsrv'; //si, poner sqlsrv
$db['default3']['dbprefix'] = '';
$db['default3']['pconnect'] = FALSE; //ponerlo a False
$db['default3']['db_debug'] = TRUE;
$db['default3']['cache_on'] = FALSE;
$db['default3']['cachedir'] = '';
$db['default3']['char_set'] = 'utf8';
$db['default3']['dbcollat'] = 'utf8_general_ci';
$db['default3']['swap_pre'] = '';
$db['default3']['autoinit'] = TRUE;
$db['default3']['stricton'] = FALSE;
