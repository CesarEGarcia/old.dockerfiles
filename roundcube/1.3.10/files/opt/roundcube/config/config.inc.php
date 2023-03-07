<?php

// Para testear la instalación poner la url /installer
$config ['enable_installer'] = {INSTALLER};

/* Local configuration for Roundcube Webmail */

// ----------------------------------
// SQL DATABASE
// ----------------------------------
// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql, sqlsrv, oracle
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// NOTE: for SQLite use absolute path (Linux): 'sqlite:////full/path/to/sqlite.db?mode=0646'
//       or (Windows): 'sqlite:///C:/full/path/to/sqlite.db'
$config['db_dsnw'] = 'mysql://roundcube:rc_Admin@mysql/roundcube';


// ----------------------------------
// IMAP
// ----------------------------------
// The IMAP host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
// WARNING: After hostname change update of mail_host column in users table is
//          required to match old user data records with the new host.
$config['default_host'] = '{IMAP_SERVER}';

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = '';

// use this folder to store log files
// must be writeable for the user who runs PHP process (Apache user if mod_php is being used)
// This is used by the 'file' log driver.
$config['log_dir'] = '/var/log/httpd';

// use this folder to store temp files
// must be writeable for the user who runs PHP process (Apache user if mod_php is being used)
$config['temp_dir'] = '/tmp/roundcube';

// This key is used for encrypting purposes, like storing of imap password
// in the session. For historical reasons it's called DES_key, but it's used
// with any configured cipher_method (see below).
$config['des_key'] = '2nRCqOFZ3IeVeBhNACAORACW';

// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = array('zipdownload');

// the default locale setting (leave empty for auto-detection)
// RFC1766 formatted language name like en_US, de_DE, de_CH, fr_FR, pt_BR
$config['language'] = 'es_Es';

$config['mime_types'] = '/opt/httpd/conf/mime.types';


// $config ['include_host_config'] = true;
$config ['smtp_server']         = '{SMTP_SERVER}';
$config ['smtp_port']           = {SMTP_PORT};
$config ['smtp_user']           = '{SMTP_USER}';
$config ['smtp_pass']           = '{SMTP_PASS}';
// $config ['support_url']         = '';
// $config ['product_name']        = 'Roundcube Webmail';
// $config ['plugins']             = array('archive', 'zipdownload', 'password', 'managesieve');
// $config['skin_logo'] = 'logos/logo-ayto.png';
